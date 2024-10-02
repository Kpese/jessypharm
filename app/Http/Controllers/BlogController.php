<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class BlogController extends Controller
{
    public function blog()
    {
        $blogs = Blog::orderByDesc('created_at')->get();
        return view('backend.blogs.index', compact('blogs'));
    }

    public function create_blog()
    {
        return view('backend.blogs.create');
    }

    public function store_blog()
    {
        $validate = request()->validate([
            'title' => 'required|string',
            'image' => 'required|image',
            'description' => 'required|string',
        ]);

        $blog = new Blog;
        $blog->title = $validate['title'];
        $blog->description = $validate['description'];

        if (!empty(request('image'))) {
            $file = request()->file('image');
            $filename = time() . '.' . $file->getClientOriginalName();
            $file->move('blogs/', $filename);

            $blog->image = $filename;
        }

        $blog->save();

        Alert::success('Success', 'blog is successfully created');
        return redirect()->route('admin.blog');
    }

    public function edit_blog($id)
    {
        $blog = Blog::where('id', $id)->first();

       return view('backend.blogs.edit', compact('blog'));
    }

    public function update_blog($id)
    {
        $validate = request()->validate([
            'title' => 'string',
            'image' => 'image',
            'description' => 'string',
        ]);

        $blog = Blog::where('id', $id)->first();

        if (!$blog) {
            Alert::error('Error', 'Blog not found.');
            return redirect()->route('admin.blog');
        }

        $blog->title = $validate['title'];
        $blog->description = $validate['description'];

        if (!empty(request('image'))) {

            if (!empty($blog->image)) {
                unlink('blogs/' . $blog->image);
            }

            $file = request()->file('image');
            $filename = time() . '.' . $file->getClientOriginalName();
            $file->move('blogs/', $filename);

            $blog->image = $filename;
        }

        $blog->save();
        Alert::success('Success', 'blog is successfully updated');
        return redirect()->route('admin.blog');

    }

    public function delete_blog(Blog $blog)
    {
        $blog->delete();
        Alert::success('Success', 'blog is successfully deleted');
        return redirect()->route('admin.blog');
    }

}
