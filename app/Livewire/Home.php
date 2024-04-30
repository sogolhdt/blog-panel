<?php

namespace App\Livewire;

use App\Models\Blog;
use Livewire\Component;

class Home extends Component
{
    public $blogsCount;
    public function render()
    {
        $this->blogsCount = Blog::count();
        return view('livewire.home');
    }
}
