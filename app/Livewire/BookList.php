<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Book;

class BookList extends Component
{

    public $name ='book lists';

    public function render()
    {
        return view('livewire.book-list')->with([
            'books' => Book::all()
        ]);
    }
}
