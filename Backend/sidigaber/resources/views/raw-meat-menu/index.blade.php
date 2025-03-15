@extends('layouts.app')

@section('title', 'Raw Meat Menu')

@section('content')
    <div class="container">
        <h2 class="mb-4">Raw Meat Menu</h2>

        <div class="row">
            @foreach($rawMeats as $rawMeat)
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">{{ $rawMeat->name }}</h5>
                            <p class="card-text">
                                <strong>Category:</strong> {{ $rawMeat->category }}<br>
                                <strong>Price:</strong> ${{ number_format($rawMeat->price, 2) }}<br>
                                <strong>Weight:</strong> {{ $rawMeat->weight }} kg<br>
                                <strong>Quality:</strong> {{ ucfirst($rawMeat->quality) }}
                            </p>
                            <p class="card-text">{{ Str::limit($rawMeat->description, 100) }}</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="badge {{ $rawMeat->is_available ? 'bg-success' : 'bg-danger' }}">
                                    {{ $rawMeat->is_available ? 'Available' : 'Not Available' }}
                                </span>
                                <a href="{{ route('raw-meat-menu.show', $rawMeat) }}" class="btn btn-primary btn-sm">
                                    View Details
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Pagination -->
        <div class="d-flex justify-content-center mt-4">
            {{ $rawMeats->links('pagination::bootstrap-5') }}
        </div>
    </div>
@endsection