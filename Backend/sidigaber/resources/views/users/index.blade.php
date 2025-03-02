@extends('layouts.app')

@section('title', 'Users List')

@section('content')
<div class="mb-4 d-flex justify-content-between align-items-center">
    <h2>Users List</h2>
    <a href="{{ route('users.create') }}" class="btn btn-primary">Add User</a>
</div>

@if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

<table class="table table-striped table-hover table-bordered">
    <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->phone_number }}</td>
            <td class="gap-2 d-flex">
                <a href="{{ route('users.show', $user) }}" class="btn btn-info btn-sm">View</a>
                <a href="{{ route('users.edit', $user) }}" class="btn btn-warning btn-sm">Edit</a>
                <form action="{{ route('users.destroy', $user) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this user?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<!-- Pagination with custom styling -->
<div class="d-flex justify-content-center">
    {{ $users->links('pagination::bootstrap-5') }}
</div>

@endsection
