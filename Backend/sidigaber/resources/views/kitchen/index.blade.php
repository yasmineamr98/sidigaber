@extends('layouts.app')

@section('title', 'Kitchen Items')

@section('content')
<div class="mb-4 d-flex justify-content-between align-items-center">
    <h2>Kitchen Items</h2>
    <a href="{{ route('kitchen.create') }}" class="btn btn-primary">Add New Item</a>
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
            <th>Item Name</th>
            <th>Price</th>
            <th>Picture</th>
            <th>Description</th>
            <th>Review</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($kitchens as $kitchen)
        <tr>
            <td>{{ $kitchen->id }}</td>
            <td>{{ $kitchen->item_name }}</td>
            <td>${{ $kitchen->item_price }}</td>
            <td><img src="{{ asset('storage/' . $kitchen->item_picture) }}" width="60" alt="Item"></td>
            <td>{{ $kitchen->description }}</td>
            <td>{{ $kitchen->review ?? 'No Review' }}</td>
            <td class="gap-2 d-flex">
                <a href="{{ route('kitchen.show', $kitchen) }}" class="btn btn-info btn-sm">View</a>
                <a href="{{ route('kitchen.edit', $kitchen) }}" class="btn btn-warning btn-sm">Edit</a>
                <form action="{{ route('kitchen.destroy', $kitchen) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this item?');">
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
    {{ $kitchens->links('pagination::bootstrap-5') }}
</div>

@endsection
