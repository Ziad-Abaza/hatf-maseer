<?php

namespace App\Http\Controllers\Frontend;


use App\Models\Blog;

use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function blogns()
    {

        $blogs = Blog::orderBy('created_at', 'desc')->paginate(12);


        return view('frontend.page.blogs.blog', compact('blogs'));
    }


    public function show($blog, $title = null)
    {

        $blog = Blog::where('id', $blog)->firstOrFail();
        return view('frontend.page.blogs.show', compact('blog'));
    }
}
