@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="my-4">Kitchen Items</h2>
    <a href="{{ route('kitchen.create') }}" class="btn btn-primary mb-3">Add New Item</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
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
                <td>
                    <a href="{{ route('kitchen.show', $kitchen) }}" class="btn btn-info btn-sm">View</a>
                    <a href="{{ route('kitchen.edit', $kitchen) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('kitchen.destroy', $kitchen) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
