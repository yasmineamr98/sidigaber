@extends('layouts.app')

@section('content')
<h2>Edit Raw Meat Item</h2>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('raw_meats.update', $rawMeat->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label class="form-label">Item Name</label>
        <input type="text" name="item_name" class="form-control" value="{{ $rawMeat->item_name }}" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Price</label>
        <input type="number" name="item_price" class="form-control" value="{{ $rawMeat->item_price }}" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Item Picture</label>
        <input type="file" name="item_picture" class="form-control">
        <img src="{{ asset('storage/' . $rawMeat->item_picture) }}" alt="{{ $rawMeat->item_name }}" class="mt-2" width="100">
    </div>

    <div class="mb-3">
        <label class="form-label">Review</label>
        <textarea name="review" class="form-control">{{ $rawMeat->review }}</textarea>
    </div>

    <div class="mb-3">
        <label class="form-label">Description</label>
        <textarea name="description" class="form-control" required>{{ $rawMeat->description }}</textarea>
    </div>

    <button type="submit" class="btn btn-success">Update Item</button>
</form>
@endsection
