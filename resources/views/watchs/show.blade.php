@extends('layouts.app')
  
@section('title', 'Show Brand')
  
@section('contents')
    <h1 class="mb-0">Detail Product</h1>
    <hr />
    
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Name</label>
            <input type="text" name="name" class="form-control" placeholder="Name " value="{{ $watch->name }}" >
        </div>
        <div class="col mb-3">
            <label class="form-label">Price</label>
            <input type="text" name="price" class="form-control" placeholder="Price " value="{{ $watch->price }}" >
        </div>
        <div class="col mb-3">
            <label class="form-label">Material</label>
            <input type="text" name="material" class="form-control" placeholder="Material " value="{{ $watch->material }}" >
        </div>
        <div class="col mb-3">
            <label class="form-label">Size</label>
            <input type="text" name="size" class="form-control" placeholder="Size " value="{{ $watch->size }}" >
        </div>
        <div class="col mb-3">
            <label class="form-label">Color</label>
            <input type="text" name="color" class="form-control" placeholder="Color " value="{{ $watch->color }}" >
        </div>
    </div>
        
        <div class="col mb-3">
            <label class="form-label" style="width: 300px">Desciption</label>
            <textarea class="form-control" name="description" placeholder="Descriptoin" readonly>{{ $watch->description }}</textarea>
        </div>

        <div class="col mb-3">
            <label class="form-label">Brand</label>
            <input type="text" name="brand" class="form-control" placeholder="Brand " value="{{ $watch->brand_id }}" >
        </div>
        <div class="col mb-3">
            <label class="form-label">Image</label>
            <input type="text" name="image" class="form-control" placeholder="Image " value="{{ $watch->image }}" >
        </div>
    
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $watch->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $watch->updated_at }}" readonly>
        </div>
    </div>
@endsection