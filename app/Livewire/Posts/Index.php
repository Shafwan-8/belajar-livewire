<?php

namespace App\Livewire\Posts;

use App\Models\Post;
use Livewire\WithPagination;
use Livewire\Component;

class Index extends Component
{

    use WithPagination;
    public function render()
    {
        return view('livewire.posts.index', [
            'posts' => Post::latest()->paginate(5)
        ]);
    }
}
