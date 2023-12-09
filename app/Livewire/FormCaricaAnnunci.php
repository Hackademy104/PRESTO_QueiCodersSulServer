<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Announcement;

class FormCaricaAnnunci extends Component
{
    public $name;
    public $category;
    public $price;
    public $description;

    public function updated($property){
        $this->validateOnly($property);
    }

    public function store(){
        $this->validate();
        
        $announcement = Announcement::create([
            'name' => $this->name,
            'category' => $this->category,
            'price' => $this->price,
            'description' => $this->description
        ]);

        $this->reset();
        session()->flash('message', 'success');
    }

    public function render()
    {
        return view('livewire.form-carica-annunci');
    }
}
