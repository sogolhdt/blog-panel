<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Blog;

class BlogsController extends Component
{
    public function render()
    {
        $blogs = Blog::paginate(10);
        // dd($blogs);
        return view('livewire.blogs-management', compact('blogs'));

    }
}
