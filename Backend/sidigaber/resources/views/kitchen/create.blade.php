@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2 class="text-center mb-4">Add New Kitchen Item</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('kitchen.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>Item Name:</label>
            <input type="text" name="item_name" class="form-control" required>
        </div>

        <div class="form-group">
            <label>Item Price ($):</label>
            <input type="number" name="item_price" class="form-control" required min="0">
        </div>

        <div class="form-group">
            <label>Item Picture:</label>
            <input type="file" name="item_picture" class="form-control-file" required>
        </div>

        <div class="form-group">
            <label>Description:</label>
            <textarea name="description" class="form-control" required></textarea>
        </div>

        <div class="form-group">
            <label>Review (Optional):</label>
            <textarea name="review" class="form-control"></textarea>
        </div>

        <button type="submit" class="btn btn-success">Save Item</button>
        <a href="{{ route('kitchen.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
