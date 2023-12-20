<?php

namespace App\Livewire;

use App\Jobs\GoogleVisionLabelImage;
use App\Jobs\GoogleVisionSafeSearch;
use App\Jobs\RemoveFaces;
use App\Jobs\ResizeImage;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

use function Livewire\store;

class FormCaricaAnnunci extends Component
{
    use WithFileUploads;

    #[Validate('required')]
    public $name;

    #[Validate('required')]
    public $category;

    public $temporary_images;

    public $images = [];

    public $image;

    public $user_id;

    #[Validate('required')]
    public $price;

    #[Validate('required')]
    public $description;

    public $announcement;

    public $form_id;

    protected $rules = [
        'name' => 'required|string|max:255',
        'category' => 'required|exists:categories,id', // Assicurati che il nome della tabella delle categorie sia corretto
        'price' => 'required|numeric',
        'description' => 'required|string',
        'images.*' => 'image|max:1024',
        'temporary_images.*' => 'image|max:1024',
        'user_id' => 'required',
    ];

    protected $messages = [
        'required' => 'Il campo :attribute è richiesto',
        'temporary_images.*.image' => 'I file devono essere immagini',
        'temporary_images.*.max' => 'L\'immagine deve essere max di 1 MB',
    ];

    public function updatedTemporaryImages()
    {
        if ($this->validate([
            'temporary_images.*' => 'image|max:1024',
        ])) {
            foreach ($this->temporary_images as $image) {
                $this->images[] = $image;
            }
        }
    }

    public function removeImage($key)
    {
        if (in_array($key, array_keys($this->images))) {
            unset($this->images[$key]);
        }
    }

    public function updated($property)
    {
        $this->validateOnly($property);
    }

    public function store()
    {
        $this->user_id = Auth::user()->id;
        $this->validate();
        $this->announcement = Category::find($this->category)->announcements()->create($this->validate());
        if (count($this->images)) {
            foreach ($this->images as $image) {
                // $this->announcement->images()->create(['path' => $image->store('images', 'public')]);
                $newFileName = "announcements/{$this->announcement->id}";
                $newImage = $this->announcement->images()->create(['path' => $image->store($newFileName, 'public')]);

                RemoveFaces::withChain([
                    new ResizeImage($newImage->path, 300, 300),
                    new GoogleVisionSafeSearch($newImage->id),
                    new GoogleVisionLabelImage($newImage->id),
                ])->dispatch($newImage->id);
            }
            File::deleteDirectory(storage_path('/app/livewire-tmp'));
        }
        $this->reset();
        session()->flash('message', 'Annuncio caricato con successo, in revisione');
        $this->cleanForm();
    }

    public function cleanForm()
    {
        $this->name = '';
        $this->price = '';
        $this->description = '';
        $this->image = '';
        $this->images = [];
        $this->temporary_images = [];
        $this->form_id = rand();

    }

    public function render()
    {
        return view('livewire.form-carica-annunci');
    }
}
