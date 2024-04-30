<?php

namespace App\Livewire;

use App\Models\Blog;
use Livewire\Component;
use Livewire\Attributes\Validate;

class CreateBlog extends Component
{
    #[Validate('required|min:3|max:100')]
    public $title = '';

    #[Validate('required|min:50|max:1000')]
    public $content = '';

    #[Validate('required')]
    public $expire_date = '';
    public function render()
    {
        return view('livewire.create-blog');
    }
    public function save()
    {
        $this->validate();
        // the user logged in
        $userId = auth()->id();
        Blog::create(
            [
                'title' => $this->title,
                'content' => $this->content,
                'expire_date' => $this->expire_date,
                'user_id' => $userId
            ]
        );

        session()->flash('message', 'مقاله ایجاد شد.');

        return $this->redirect('/manage');
    }

}
