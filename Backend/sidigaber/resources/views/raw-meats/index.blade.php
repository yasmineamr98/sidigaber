@extends('layouts.app')

@section('title', 'Raw Meat Items')

@section('content')
    <div class="mb-4 d-flex justify-content-between align-items-center">
        <h2>Raw Meat Items</h2>
        <a href="{{ route('raw-meats.create') }}" class="btn btn-primary">Add New Raw Meat</a>
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
                <th>Category</th>
                <th>Price</th>
                <th>Weight</th>
                <th>Quality</th>
                <th>Available</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($rawMeats as $rawMeat)
                <tr>
                    <td>{{ $rawMeat->id }}</td>
                    <td>{{ $rawMeat->name }}</td>
                    <td>{{ $rawMeat->category }}</td>
                    <td>${{ number_format($rawMeat->price, 2) }}</td>
                    <td>{{ $rawMeat->weight }} kg</td>
                    <td>{{ $rawMeat->quality }}</td>
                    <td>
                        <span class="badge {{ $rawMeat->is_available ? 'bg-success' : 'bg-danger' }}">
                            {{ $rawMeat->is_available ? 'Yes' : 'No' }}
                        </span>
                    </td>
                    <td class="gap-2 d-flex">
                        <a href="{{ route('raw-meats.show', $rawMeat) }}" class="btn btn-info btn-sm">View</a>
                        <a href="{{ route('raw-meats.edit', $rawMeat) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('raw-meats.destroy', $rawMeat) }}" method="POST" class="d-inline"
                            onsubmit="return confirm('Are you sure you want to delete this raw meat?');">
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
        {{ $rawMeats->links('pagination::bootstrap-5') }}
    </div>

@endsection