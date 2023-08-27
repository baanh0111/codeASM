@extends('layouts.app')
  
@section( 'Home Admin')
  
@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">List Admin</h1>
    </div>
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>PassWord</th>
                <th>Level</th>
                <th>Created</th>
            </tr>
        </thead>
        <tbody>
            @if($user->count() > 0)
                @foreach($user as $rs)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $rs->name }}</td>
                        <td class="align-middle">{{ $rs->email }}</td>
                        <td class="align-middle">{{ $rs->password }}</td>
                        <td class="align-middle">{{ $rs->level }}</td>
                        <td class="align-middle">{{ $rs->created_at }}</td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
@endsection