<?php
namespace App\Http\Controllers\Dash;


use App\Models\Advantage;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAdvantageRequest;
use App\Http\Requests\UpdateAdvantageRequest;

class AdvantageController extends Controller
{
    function __construct()
    {
        $this->middleware(['permission:advantage-list|advantage-create|advantage-edit|advantage-delete']);
        $this->middleware(['permission:advantage-create'], ['only' => ['create', 'store']]);
        $this->middleware(['permission:advantage-edit'], ['only' => ['edit', 'update']]);
        $this->middleware(['permission:advantage-delete'], ['only' => ['destroy']]);
    }



    
        /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $advantages = Advantage::paginate(self::$paginate);
        return view('dash.advantages.index', compact('advantages'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dash.advantages.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAdvantageRequest $request)
    {
        $advantage = Advantage::create([
            'content' => prepareLocalizedData($request->content_ar, $request->content_en),
        ]);

        if ($request->hasFile('img')) {
            uploadImage($advantage, $request->img, 'advantages');
        }

        
        return redirect()->route('advatages.index')->with('success', 'Advantage has been created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Advantage $advatage)
    {
        return view('dash.advantages.show', compact('advatage'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Advantage $advatage)
    {
        return view('dash.advantages.edit', compact('advatage'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAdvantageRequest $request, Advantage $advatage)
    {
        $advatage->update([
            'content' => prepareLocalizedData($request->content_ar, $request->content_en),
        ]);

        if ($request->hasFile('img')) {
            uploadImage($advatage, $request->img, 'advantages');
        }


        return redirect()->route('advatages.index')->with('success', 'Advantage has been updated successfully.');
    }




        /**
     * Remove the specified resource from storage.
     */
    public function  destroy(Advantage $advatage)
    {
        $advatage->delete();
        deleteImage($advatage,'advantages');

        return redirect()->route('advatages.index')->with('success', 'Advantage has been deleted successfully.');
    }



}
