<?php

namespace App\Livewire;

use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use App\Models\Announcement;

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

    public $categories;

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

        $announcement = Announcement::create([
            'name' => $this->name,
            'category' => $this->category,
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
