<?php

namespace App\Http\Controllers;

use App\Models\Blog;

class BlogTitleController extends Controller
{
    public function show($id)
    {
        $blog = Blog::select('title')->findOrFail($id);
        return view('public.blogs.title', compact('blog'));
    }
}