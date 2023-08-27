@extends('layouts.app')
  
@section( 'Home Product')
  
@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">List Product</h1>
        <a href="/watch/create" class="btn btn-primary">Add Product</a>
    </div>
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <hr />
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Price</th>
                <th>Size</th>
                <th>Material</th>
                <th>Color</th>
                <th>Description</th>
                <th>Image</th>
                <th>Brand ID</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbod>
            @if($watch->count() > 0)
                @foreach($watch as $rs)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $rs->name }}</td>
                        <td class="align-middle">{{ $rs->price }}</td>
                        <td class="align-middle">{{ $rs->size }}</td>
                        <td class="align-middle">{{ $rs->material }}</td>
                        <td class="align-middle">{{ $rs->color }}</td>
                        <td class="align-middle">{{ $rs->description }}</td>
                        <td class="img-widhth">
                            <img src="/uploads/{{ $rs->image }}" >
                        </td>
                        <td class="align-middle">{{ $rs->brand_id }}</td>
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('watch.show', $rs->id) }}" type="button" class="btn btn-secondary">Detail</a>
                                <a href="{{ route('watch.edit', $rs->id) }}" type="button" class="btn btn-warning">Edit</a>
                                <form action="{{ route('watch.destroy', $rs->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger m-0">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="5">Product not found</td>
                </tr>
            @endif
        </tbod
        
        
        
        
@endsection