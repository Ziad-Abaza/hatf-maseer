<?php
namespace App\Http\Controllers\Dash;


use App\Models\Product;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;

class ProductController extends Controller
{
    function __construct()
    {
        $this->middleware(['permission:product-list|product-create|product-edit|product-delete']);
        $this->middleware(['permission:product-create'], ['only' => ['create', 'store']]);
        $this->middleware(['permission:product-edit'], ['only' => ['edit', 'update']]);
        $this->middleware(['permission:product-delete'], ['only' => ['destroy']]);
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::paginate(self::$paginate);
        return view('dash.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dash.products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        $product = Product::create([
            'content' => prepareLocalizedData($request->content_ar, $request->content_en),
        ]);

        if ($request->hasFile('img')) {
            uploadImage($product, $request->img, 'products');
        }

        
        return redirect()->route('products.index')->with('success', 'Product has been created successfully.');
    }


    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('dash.products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('dash.products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        $product->update([
            'content' => prepareLocalizedData($request->content_ar, $request->content_en),
        ]);

        if ($request->hasFile('img')) {
            uploadImage($product, $request->img, 'products');
        }


        return redirect()->route('products.index')->with('success', 'Product has been updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        deleteImage($product,'products');

        return redirect()->route('products.index')->with('success', 'Product has been deleted successfully.');
    }
}

