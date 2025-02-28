@extends('layouts.app')

@section('content')
<h2>{{ $rawMeat->item_name }}</h2>

<div class="card">
    <img src="{{ asset('storage/' . $rawMeat->item_picture) }}" class="card-img-top" alt="{{ $rawMeat->item_name }}">
    <div class="card-body">
        <p><strong>Price:</strong> ${{ $rawMeat->item_price }}</p>
        <p><strong>Description:</strong> {{ $rawMeat->description }}</p>
        <p><strong>Review:</strong> {{ $rawMeat->review }}</p>

        <a href="{{ route('raw_meats.index') }}" class="btn btn-secondary">Back</a>
        <a href="{{ route('raw_meats.edit', $rawMeat->id) }}" class="btn btn-warning">Edit</a>
        
        <form action="{{ route('raw_meats.destroy', $rawMeat->id) }}" method="POST" class="d-inline">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
        </form>
    </div>
</div>
@endsection
