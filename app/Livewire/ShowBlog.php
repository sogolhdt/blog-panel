<?php

namespace App\Livewire;

use App\Models\Blog;
use Livewire\Component;

class ShowBlog extends Component
{
    public $blog;

    public function mount($blogId)
    {
        $this->blog = Blog::findOrFail($blogId);
    }

    public function render()
    {
        return view('livewire.show-blog');
    }

}
