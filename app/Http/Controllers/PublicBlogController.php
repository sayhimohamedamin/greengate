<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class PublicBlogController extends Controller
{
public function index()
    {
        $recentBlogs = Blog::orderBy('created_at', 'desc')->take(4)->get();
        $recentBlogIds = $recentBlogs->pluck('id')->toArray();
        $blogs = Blog::whereNotIn('id', $recentBlogIds)
                    ->orderBy('created_at', 'desc')
                    ->paginate(6);

        return view('public.blogs.index', compact('recentBlogs', 'blogs'));
    }

    public function show(Blog $blog)
    {
        return view('public.blogs.show', compact('blog'));
    }
}
