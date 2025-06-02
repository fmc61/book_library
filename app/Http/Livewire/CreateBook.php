<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Book;

class CreateBook extends Component
{
    public $title = '';
    public $author = '';
    public $published_year = '';
    public $description = '';
    public $success = false;

    protected $rules = [
        'title' => 'required|min:3',
        'author' => 'required|min:3',
        'published_year' => 'required|integer|min:1000|max:2024',
        'description' => 'required|min:10',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function save()
    {
        $validatedData = $this->validate();
        
        Book::create($validatedData);
        
        $this->success = true;
        
        $this->reset(['title', 'author', 'published_year', 'description']);
    }

    public function render()
    {
        return view('livewire.create-book');
    }
}
