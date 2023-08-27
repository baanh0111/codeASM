@extends('layouts.app')
  
@section('title', 'Create Brand')
  
@section('contents')
    <h1 class="mb-0">Add Brand</h1>
    <hr />
    <form action="{{route('brand.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="name" class="form-control" placeholder="Name">
            </div>
            <div class="col">
                <input type="file" name="file_upload" class="form-control @error('image') is-invalid @enderror" placeholder="Image">
            </div>
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