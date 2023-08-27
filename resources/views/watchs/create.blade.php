@extends('layouts.app')
  
@section('title', 'Create Product')
  
@section('contents')
    <h1 class="mb-0">Add Product</h1>
    <hr />
    <form action="{{route('watch.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="name" class="form-control" placeholder="Name">
            </div>
            <div class="col">
                <input type="text" name="price" class="form-control" placeholder="Price">
            </div>
            <div class="col">
                <input type="text" name="size" class="form-control" placeholder="Size">
            </div>
            <div class="col">
                <input type="text" name="material" class="form-control" placeholder="Material">
            </div>
            <div class="col">
                <input type="text" name="color" class="form-control" placeholder="Color">
            </div>
            
            <div class="form-group">    
                <label for="brand" class="form-label">Brand</label>
                <select class="form-select" name="brand_id" id="brand" required>
                  <option value="" disabled selected>Select Category</option>
                  @foreach ($brands as $brand)
                    <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                  @endforeach
                </select>
              </div>
            
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="file" name="file_upload" class="form-control" placeholder="Image">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="description" class="form-control" placeholder="Description">
                
            </div>
        </div>
        
        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection