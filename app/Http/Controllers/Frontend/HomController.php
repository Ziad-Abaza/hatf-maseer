<?php

namespace App\Http\Controllers\Frontend;


use App\Models\Banner;
use App\Models\Partner;
use App\Models\Product;
use App\Models\Service;
use App\Models\Advantage;
use App\Http\Controllers\Controller;

class HomController extends Controller
{


    public function index()
    {
        $banners = Banner::get();
        $partners = Partner::get();
        $advatages = Advantage::get();
        $services = Service::get();
        $products = Product::get();

        

        return view('frontend.home',compact('banners','partners','advatages','services','products'));
    }
}



