<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Watch;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\WatchController;

class HomeController extends Controller
{
    // protected $brandController;
    // protected $watchController;
    
        // public function construct(WatchController $watchController, BrandController $brandController)
        // {
        //     $this->watchController = $watchController;
        //     $this->brandController = $brandController;
            
        // }
        public function index()
        {
            $watch = Watch::all();
            $brand = Brand::all();
            
           
            return view('homepage.index', compact('watch', 'brand'));

        }
        public function show(string $id)
        {
            $watch = Watch::findOrFail($id);
            return view ('homepage.show', compact('watch'));
        }
        public function brand($id)
        {
            $brand = Brand::where('id', $id)->get();

            $watch = Watch::where('brand_id', $id)->get();
           

            return view('homepage.brand', compact('watch' , 'brand'));
}


    //     public function product($slug)
    //    {
    //     // $watch = Watch::findOrFail($id);
    //     // $brand = Brand::all();
        
    //     $brand = Brand::where('slug',$slug)->first();
        
    //     $watch =Watch::where('brand_id',$brand->id)->get();
    //         return view('homepage.home',compact('watch','brand'));
    //    }
       
}

