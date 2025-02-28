<!-- resources/views/users/index.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2 class="mb-4 text-center">Reviews List</h2>

    <!-- Success Message -->
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('reviews.index') }}" class="btn btn-primary mb-3">Add New Review</a>

    <table class="table table-bordered table-hover">
        <thead class="thead-dark">
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Review</th>
                <th>Rating</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($reviews as $review)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $review->name }}</td>
                    <td>{{ $review->email }}</td>
                    <td>{{ Str::limit($review->review, 50) }}</td>
                    <td>{{ $review->rating }}⭐</td>
                    <td>
                        <a href="{{ route('reviews.index', $review->id) }}" class="btn btn-info btn-sm">View</a>
                        <a href="{{ route('reviews.index', $review->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('reviews.index', $review->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?');">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
