@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2>Raw Meat List</h2>
    <a href="{{ route('raw_meats.create') }}" class="btn btn-success">Add New Item</a>
</div>

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<div class="row">
    @foreach($rawMeats as $meat)
    <div class="col-md-4">
        <div class="card mb-4">
            <img src="{{ asset('storage/' . $meat->item_picture) }}" class="card-img-top" alt="{{ $meat->item_name }}">
            <div class="card-body">
                <h5 class="card-title">{{ $meat->item_name }}</h5>
                <p class="card-text"><strong>Price:</strong> ${{ $meat->item_price }}</p>
                <a href="{{ route('raw_meats.show', $meat->id) }}" class="btn btn-primary">View</a>
                <a href="{{ route('raw_meats.edit', $meat->id) }}" class="btn btn-warning">Edit</a>
                <form action="{{ route('raw_meats.destroy', $meat->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                </form>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
