<?php

namespace App\Http\Controllers\Dash;


use App\Models\Banner;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBannerRequest;
use App\Http\Requests\UpdateBannerRequest;

class BannerController extends Controller
{
    function __construct()
    {
        $this->middleware(['permission:banner-list|banner-create|banner-edit|banner-delete']);
        $this->middleware(['permission:banner-create'], ['only' => ['create', 'store']]);
        $this->middleware(['permission:banner-edit'], ['only' => ['edit', 'update']]);
        $this->middleware(['permission:banner-delete'], ['only' => ['destroy']]);
    }

    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $banners = Banner::paginate(self::$paginate);
        return view('dash.baneers.index', compact('banners'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dash.baneers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBannerRequest $request)
    {
        $banner = Banner::create([
            'content' => prepareLocalizedData($request->content_ar, $request->content_en),
        ]);

        if ($request->hasFile('img')) {
            uploadImage($banner, $request->img, 'banners');
        }

        
        return redirect()->route('banners.index')->with('success', 'Banner has been created successfully.');
    }


    /**
     * Display the specified resource.
     */
    public function show(Banner $banner)
    {
        return view('dash.baneers.show', compact('banner'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Banner $banner)
    {
        return view('dash.baneers.edit', compact('banner'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBannerRequest $request, Banner $banner)
    {
        $banner->update([
            'content' => prepareLocalizedData($request->content_ar, $request->content_en),
        ]);

        if ($request->hasFile('img')) {
            uploadImage($banner, $request->img, 'banners');
        }


        return redirect()->route('banners.index')->with('success', 'Banner has been updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Banner $banner)
    {
        $banner->delete();
        deleteImage($banner,'banners');

        return redirect()->route('banners.index')->with('success', 'Banner has been deleted successfully.');
    }
}
