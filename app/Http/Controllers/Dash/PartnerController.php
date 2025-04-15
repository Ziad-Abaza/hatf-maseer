<?php

namespace App\Http\Controllers\Dash;


use App\Models\Partner;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorePartnerRequest;

class PartnerController extends Controller
{
    function __construct()
    {
        $this->middleware(['permission:partner-list|partner-create|partner-edit|partner-delete']);
        $this->middleware(['permission:partner-create'], ['only' => ['create', 'store']]);
        $this->middleware(['permission:partner-edit'], ['only' => ['edit', 'update']]);
        $this->middleware(['permission:partner-delete'], ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $partenrs = Partner::paginate(self::$paginate);
        return view('dash.partners.index', compact('partenrs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dash.partners.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePartnerRequest $request)
    {
        $partenr = Partner::create([
            'title' => Str::random(10), // Generates a unique random string
            'desc' => 'aa',
        ]);
        

        if ($request->hasFile('img')) {
            uploadImage($partenr, $request->img, 'partenrs');
        }

        
        return redirect()->route('partenrs.index')->with('success', 'Partner has been created successfully.');
    }


    /**
     * Display the specified resource.
     */
    public function show(Partner $partenr)
    {
        return view('dash.partenrs.show', compact('partenr'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Partner $partenr)
    {
        return view('dash.partners.edit', compact('partenr'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StorePartnerRequest $request, Partner $partenr)
    {

        if ($request->hasFile('img')) {
            uploadImage($partenr, $request->img, 'partenrs');
        }


        return redirect()->route('partenrs.index')->with('success', 'Partner has been updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Partner $partenr)
    {
        $partenr->delete();
        deleteImage($partenr,'partners');
        return redirect()->route('partenrs.index')->with('success', 'Partner has been deleted successfully.');
    }
}
