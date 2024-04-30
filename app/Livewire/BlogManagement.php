<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Blog;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;

class BlogManagement extends Component
{
    use WithPagination;
    public function render()
    {
        // retrieving the joined data of blogs and users
        $blogs = DB::table('blogs')
            ->join('users', 'blogs.user_id', '=', 'users.id')
            ->select('blogs.*', 'users.name as username')
            ->orderBy('updated_at', 'desc')
            ->paginate(5);

        return view('livewire.blog-management', [
            'blogs' => $blogs,
        ]);
    }
    public function delete($id)
    {
        $post = Blog::findOrFail($id);
        //deleting a blog is only permitted for the owner of the blog
        $this->authorize('delete', $post);

        $post->delete();
        session()->flash('message', 'مقاله حذف شد.');

    }
}
