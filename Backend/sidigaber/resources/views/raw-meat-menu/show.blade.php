@extends('layouts.app')

@section('title', 'Raw Meat Details')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h2 class="mb-0">{{ $rawMeat->name }} Details</h2>
                        <a href="{{ route('raw-meat-menu.index') }}" class="btn btn-secondary btn-sm">Back to Menu</a>
                    </div>

                    <div class="card-body">
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <strong>Name:</strong>
                                <p>{{ $rawMeat->name }}</p>
                            </div>
                            <div class="col-md-6">
                                <strong>Category:</strong>
                                <p>{{ $rawMeat->category }}</p>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-12">
                                <strong>Description:</strong>
                                <p>{{ $rawMeat->description ?? 'No description available' }}</p>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <strong>Price:</strong>
                                <p>${{ number_format($rawMeat->price, 2) }}</p>
                            </div>
                            <div class="col-md-6">
                                <strong>Weight:</strong>
                                <p>{{ $rawMeat->weight }} kg</p>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <strong>Quality:</strong>
                                <p class="text-capitalize">{{ $rawMeat->quality }}</p>
                            </div>
                            <div class="col-md-6">
                                <strong>Availability:</strong>
                                <p>
                                    <span class="badge {{ $rawMeat->is_available ? 'bg-success' : 'bg-danger' }}">
                                        {{ $rawMeat->is_available ? 'Available' : 'Not Available' }}
                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection