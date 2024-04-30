<?php

namespace App\Livewire;

use App\Models\Blog;
use Livewire\Component;

class EditBlog extends Component
{
    public $blog;
    public $title;
    public $content;
    public $expire_date;

    public function mount($blogId)
    {
        $this->blog = Blog::findOrFail($blogId);
        $this->title = $this->blog->title;
        $this->content = $this->blog->content;
        $this->expire_date = $this->blog->expire_date;
    }

    public function render()
    {
        return view('livewire.edit-blog');
    }
    public function update()
    {

        $this->validate([
            'title' => 'required',
            'content' => 'required',
            'expire_date' => 'required|date',
        ]);
        $this->authorize('update', $this->blog);

        $this->blog->update([
            'title' => $this->title,
            'content' => $this->content,
            'expire_date' => $this->expire_date,
        ]);

        session()->flash('message', 'مقاله آپدیت شد.');

        return redirect()->to('/manage');
    }


}

