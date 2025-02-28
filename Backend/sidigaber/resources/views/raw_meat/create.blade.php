@extends('layouts.app')

@section('content')
<h2>Add New Raw Meat Item</h2>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('raw_meats.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label class="form-label">Item Name</label>
        <input type="text" name="item_name" class="form-control" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Price</label>
        <input type="number" name="item_price" class="form-control" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Item Picture</label>
        <input type="file" name="item_picture" class="form-control" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Review</label>
        <textarea name="review" class="form-control"></textarea>
    </div>

    <div class="mb-3">
        <label class="form-label">Description</label>
        <textarea name="description" class="form-control" required></textarea>
    </div>

    <button type="submit" class="btn btn-success">Add Item</button>
</form>
@endsection
