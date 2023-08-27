<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $brand = Brand::orderBy('created_at', 'DESC')->get();
        return view('brands.index', compact('brand'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('brands.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
  
        if($request->has('file_upload'))
        {
            $file = $request-> file_upload;
            $file_name = $file-> getClientoriginalName();
            $file->move(public_path('uploads'),$file_name);
        }
        $request->merge(['image'=>$file_name]);
       
        if( Brand::create($request->all()))
        {
        return redirect()->route('brand')->with('success', 'Brand added successfully' );

        }

    }

   
    public function show(string $id)
    {
        $brand = Brand::findOrFail($id);
        return view ('brands.show', compact('brand'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $brand = Brand::findOrFail($id);
        return view ('brands.edit', compact('brand'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if($request->has('file_upload'))
        {
            $file = $request-> file_upload;
            $file_name = $file-> getClientoriginalName();
            $file->move(public_path('uploads'),$file_name);
        }
        $request->merge(['image'=>$file_name]);

        $brand = Brand::findOrFail($id);
        $brand->update($request->all());
        return redirect()->route('brand')->with('success', 'Brand updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $brand = Brand::findOrFail($id);
  
        $brand->delete();
  
        return redirect()->route('brand')->with('success', 'Brand Delete successfully');
    }
}
