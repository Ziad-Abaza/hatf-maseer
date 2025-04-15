<?php

namespace App\Http\Controllers\Dash;


use App\Models\Blog;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBlogRequest;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::paginate(10);

        return view('dash.blogs.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dash.blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBlogRequest $request)
    {
        if ($request->hasFile('img')) {
            $imageName = date('Y-m-d') . '_' . uniqid() . '.' . $request->img->extension();
            $request->img->storeAs('public/images', $imageName);
        } else {
            $imageName = '';
        }

        Blog::create([
            'title' => prepareLocalizedData($request->title_ar, $request->title_en),
            'descraption' => prepareLocalizedData($request->descraption_ar, $request->descraption_en),
            'img' => $imageName ?? ''
        ]);

        return redirect()->route('blogs.index')->with('success', "تم انشاء العنصر بنجاح");
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {

        return view('dash.blogs.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(StoreBlogRequest $request, Blog $blog)
    {
        if ($request->hasFile('img')) {
            $currentImage = $blog->img;
            $imageName = date('Y-m-d') . '_' . uniqid() . '.' . $request->img->extension();
            $request->img->storeAs('public/images', $imageName);
            if ($currentImage && Storage::exists('public/images/' . $currentImage)) {
                Storage::delete('public/images/' . $currentImage);
            }
        } else {
            $imageName = $blog->img;
        }

        $blog->update([
            'title' => prepareLocalizedData($request->title_ar, $request->title_en),
            'descraption' => prepareLocalizedData($request->descraption_ar, $request->descraption_en),
            'img' => $imageName
        ]);

        return redirect()->route('blogs.index')->with('success', "تم تعديل العنصر بنجاح");
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();
        return redirect()->route('blogs.index')->with('success', "تم مسح العنصر بنجاح");
    }
}
