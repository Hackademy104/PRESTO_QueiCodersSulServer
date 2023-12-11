<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\Announcement;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;

class FormCaricaAnnunci extends Component
{
    #[Validate('required')] 
    public $name;
    #[Validate('required')] 
    public $category;
    #[Validate('required')] 
    public $price;
    #[Validate('required')] 
    public $description;

    protected $rules = [
        'name' => 'required|string|max:255',
        'category' => 'required|exists:categories,id', // Assicurati che il nome della tabella delle categorie sia corretto
        'price' => 'required|numeric',
        'description' => 'required|string',
    ];

    public function updated($property)
    {
        $this->validateOnly($property);
    }

    public function store()
    {
        $this->validate();
        $category = Category::find($this->category);

        $announcement = $category->announcements()->create([
            'name' => $this->name,
            'price' => $this->price,
            'description' => $this->description,
            'user_id' => Auth::user()->id
        ]);

        $this->reset();
        session()->flash('message', 'success');
    }

    public function render()
    {
        return view('livewire.form-carica-annunci');
    }
}
