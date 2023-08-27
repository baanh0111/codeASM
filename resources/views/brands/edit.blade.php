@extends('layouts.app')
  
@section('title', 'Edit Brand')
  
@section('contents')
    <h1 class="mb-0">Edit Brand</h1>
    <hr />
    <form action="{{ route('brand.update', $brand->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Name</label>
                <input type="text" name="name" class="form-control" placeholder="Name" value="{{ $brand->name }}" >
            </div>
            
            <div class="col mb-3">
                <label class="form-label">Description</label>
                <textarea class="form-control" name="description" placeholder="Descriptoin" >{{ $brand->description }}</textarea>
            </div>
            <div class="col mb-3">
                <label class="form-label">Image</label>
                <input type="file" name="file_upload" class="form-control" placeholder="Image" value="{{ $brand->image }}" >
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection