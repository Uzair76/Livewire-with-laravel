<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Book;

class BookList extends Component
{

    public function render()
    {
        return view('livewire.book-list')->with([
            'books' => Book::all()
        ]);
    }
}
