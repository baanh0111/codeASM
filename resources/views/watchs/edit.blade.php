@extends('layouts.app')
  
@section('title', 'Edit Product')
@section('contents')
    <h1 class="mb-0">Edit Product</h1>
    <hr />
    <form action="{{ route('watch.update', $watch->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
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
                <input type="text" name="description" class="form-control" placeholder="Description " value="{{ $watch->description }}" >
            </div>
    
            <div class="col mb-3">
                <label for="brand" class="form-label">Brand --></label>
                <select class="form-select" name="brand_id" id="brand" required>
                  <option value="" disabled selected>Select Category</option>
                  @foreach ($brands as $brand)
                    <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                  @endforeach
                </select>
            </div>
            <div class="col mb-3">
                <label class="form-label">Image</label>
                <input type="file" name="file_upload" class="form-control" placeholder="Image " value="{{ $watch->image }}" >
            </div>
        
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection