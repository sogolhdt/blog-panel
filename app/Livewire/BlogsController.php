<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogsController extends Component
{
    public function render()
    {
        $blogs = Blog::paginate(10);
        // dd($blogs);
        return view('livewire.blogs-management', compact('blogs'));

    }
    public function createView()
    {
        return view('livewire.blog-creation');
    }
    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'title' => 'required|string|max:200',
            'content' => 'required|string',
            'expire_date' => 'required',
        ]);
        // dd($request->all());

        // Create the blog entry
        $blog = Blog::create([
            'title' => $validatedData['title'],
            'content' => $validatedData['content'],
            'expire_date' => $validatedData['expire_date'],
            'user_id' => 2

        ]);

        return redirect()->route('blogs.management', $blog->id)->with('success', 'Blog created successfully!');
    }


}
