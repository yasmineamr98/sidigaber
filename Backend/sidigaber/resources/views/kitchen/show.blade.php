@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2 class="text-center mb-4">{{ $kitchen->item_name }}</h2>

    <div class="card">
        <div class="card-body">
            <img src="{{ asset('storage/' . $kitchen->item_picture) }}" class="img-fluid rounded mb-3" width="300">
            <h4>Price: ${{ number_format($kitchen->item_price, 2) }}</h4>
            <p><strong>Description:</strong> {{ $kitchen->description }}</p>
            <p><strong>Review:</strong> {{ $kitchen->review }}</p>
            <a href="{{ route('kitchen.index') }}" class="btn btn-primary">Back to List</a>
        </div>
    </div>
</div>
@endsection
