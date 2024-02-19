<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;

class ShowPost extends Component
{
    public $search = '';

/*     protected $queryString = ['search']; */
    public function render()
    {
        $posts = Post::where('status', 2)
            ->latest('id')
            ->where('name', 'like', '%'.$this->search.'%')
            ->paginate(8);

        return view('livewire.show-post', compact('posts'));
    }
}
