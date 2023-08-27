<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Watch;
use App\Models\Brand;
use Illuminate\Support\Facades\Storage;

class WatchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $watch = Watch::orderBy('created_at', 'DESC')->get();
        return view('watchs.index', compact('watch'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $brands = Brand::all();
        return view('watchs.create', compact('brands'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $data = $request->validate([
        //     'name' => 'required',
        //     'price' => 'required',
        //     'size' => 'required',
        //     'material' => 'required',
        //     'color' => 'required',
        //     'description' => 'required',
        //     'image' => 'mimes:jpg,jpeg,bmp,png' ,
        //     'brand_id' => 'required|exists:App\Models\Brand,id',
            
        if($request->has('file_upload'))
        {
            $file = $request-> file_upload;
            $file_name = $file-> getClientoriginalName();
            $file->move(public_path('uploads'),$file_name);
        }
        
        $request->merge(['image'=>$file_name]);
        if( Watch::create($request->all()))
        {
         return redirect()->route('watch')->with('success', 'Watch added successfully' );
        } 

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $watch = Watch::findOrFail($id);
         return view ('watchs.show', compact('watch'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $brands = Brand::all();
        $watch = Watch::findOrFail($id);
        return view ('watchs.edit', compact('watch', 'brands'));
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
        
        $watch = Watch::findOrFail($id);
        $watch->update($request->all());
        return redirect()->route('watch')->with('success', 'Watch updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $watch = Watch::findOrFail($id);
  
        $watch->delete();
  
        return redirect()->route('watch')->with('success', 'Brand Delete successfully');
    }
}
