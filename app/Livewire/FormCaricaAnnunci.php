<?php

namespace App\Livewire;

use App\Models\Announcement;
use Livewire\Component;

class FormCaricaAnnunci extends Component
{
    public $name;

    public $category;

    public $price;

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

        $announcement = Announcement::create([
            'name' => $this->name,
            'category' => $this->category,
            'price' => $this->price,
            'description' => $this->description,
            'user_id' => auth()->id(),
        ]);

        $this->reset();
        session()->flash('message', 'success');
    }

    public function render()
    {

        return view('livewire.form-carica-annunci');
    }
}
