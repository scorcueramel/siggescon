<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;

class Index extends Component
{
    public $search;

    protected $queryString = ['search'];
    public function render()
    {
        /* return view('livewire.index', [
            'posts' => Post::where('name', 'like', '%'.$this->search.'%')->get(),
        ]);
        */
        return view('livewire.index');        
        
    }
}
