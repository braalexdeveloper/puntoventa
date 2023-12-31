<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\Product\StoreRequest;
use App\Http\Requests\Product\UpdateRequest;
use App\Models\Category;
use App\Models\Provider;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products=Product::get();
        return view('admin.product.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories=Category::get();
        $providers=Provider::get();
     return view('admin.product.create',compact('categories','providers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
       $product=$request->all();
    
        if($request->hasFile('image')){
          $file=$request->file('image');
          $image_name=time()."_".$file->getClientOriginalName();
          $file->move("image/",$image_name);
          $product['image']=$image_name;
        }
        
        $product2=Product::create($product);
        $product2->update(['code'=>$product2->id]);

        return redirect()->route('products.index');
    
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('admin.product.show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $categories=Category::get();
        $providers=Provider::get();
        
        return view('admin.product.edit',compact('product','categories','providers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Product $product)
    {
        $prod=$request->all();
        if($request->hasFile('image')){
            $file=$request->file('image');
            $image_name=time()."_".$file->getClientOriginalName();
            $file->move("image/",$image_name);
            $prod['image']=$image_name;
          }

        $product->update($prod);
        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index');
    }
}
