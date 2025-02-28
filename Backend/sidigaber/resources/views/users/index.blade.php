@extends('layouts.app')

@section('title', 'Users List')

@section('content')
<div class="d-flex justify-content-between mb-3">
    <h2>Users List</h2>
    <a href="{{ route('users.create') }}" class="btn btn-primary">Add User</a>
</div>

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<table class="table table-bordered">
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
            <td>
                <a href="{{ route('users.show', $user) }}" class="btn btn-info btn-sm">View</a>
                <a href="{{ route('users.edit', $user) }}" class="btn btn-warning btn-sm">Edit</a>
                <form action="{{ route('users.destroy', $user) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

{{ $users->links() }} <!-- Pagination -->
@endsection
