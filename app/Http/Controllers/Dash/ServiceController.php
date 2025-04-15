<?php
namespace App\Http\Controllers\Dash;


use App\Models\Service;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreServiceRequest;
use App\Http\Requests\UpdateServiceRequest;

class ServiceController extends Controller
{
    function __construct()
    {
        $this->middleware(['permission:service-list|service-create|service-edit|service-delete']);
        $this->middleware(['permission:service-create'], ['only' => ['create', 'store']]);
        $this->middleware(['permission:service-edit'], ['only' => ['edit', 'update']]);
        $this->middleware(['permission:service-delete'], ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::paginate(self::$paginate);
        return view('dash.services.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dash.services.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreServiceRequest $request)
    {
        $service = Service::create([
            'content' => prepareLocalizedData($request->content_ar, $request->content_en),
        ]);

        if ($request->hasFile('img')) {
            uploadImage($service, $request->img, 'services');
        }

        
        return redirect()->route('services.index')->with('success', 'Service has been created successfully.');
    }


    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        return view('dash.services.show', compact('service'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        return view('dash.services.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateServiceRequest $request, Service $service)
    {
        $service->update([
            'content' => prepareLocalizedData($request->content_ar, $request->content_en),
        ]);

        if ($request->hasFile('img')) {
            uploadImage($service, $request->img, 'services');
        }


        return redirect()->route('services.index')->with('success', 'Service has been updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        $service->delete();
        deleteImage($service,'services');

        return redirect()->route('services.index')->with('success', 'Service has been deleted successfully.');
    }
}
