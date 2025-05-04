<?php

namespace App\Http\Controllers\Frontend;


use App\Models\Blog;
use Illuminate\Support\Str;

use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function blogns()
    {

        $blogs = Blog::orderBy('created_at', 'desc')->paginate(12);


        return view('frontend.page.blogs.blog', compact('blogs'));
    }



    public function show($id, $title = null)
    {
        $blog = Blog::findOrFail($id);

        // transform title according to the locale
        $locale = app()->getLocale();
        $rawTitle = $locale === 'ar' ? de_ar($blog->title) : de_en($blog->title);
        $cleanTitle = strip_tags($rawTitle);

        // create slug from the title
        $slug = Str::slug($cleanTitle, '-', $locale === 'ar' ? null : 'en');

        // check if the slug is correct
        if ($title !== $slug) {
            return redirect()
                ->route('blogns.show', ['blog' => $id, 'title' => $slug])
                ->setStatusCode(301);
        }

        return view('frontend.page.blogs.show', compact('blog'));
    }
}
