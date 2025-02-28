@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2 class="text-center mb-4">Edit Kitchen Item</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('kitchen.update', $kitchen->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label>Item Name:</label>
            <input type="text" name="item_name" class="form-control" value="{{ $kitchen->item_name }}" required>
        </div>

        <div class="form-group">
            <label>Item Price ($):</label>
            <input type="number" name="item_price" class="form-control" value="{{ $kitchen->item_price }}" required min="0">
        </div>

        <div class="form-group">
            <label>Current Picture:</label><br>
            <img src="{{ asset('storage/' . $kitchen->item_picture) }}" width="100">
        </div>

        <div class="form-group">
            <label>New Item Picture (Optional):</label>
            <input type="file" name="item_picture" class="form-control-file">
        </div>

        <div class="form-group">
            <label>Description:</label>
            <textarea name="description" class="form-control" required>{{ $kitchen->description }}</textarea>
        </div>

        <div class="form-group">
            <label>Review (Optional):</label>
            <textarea name="review" class="form-control">{{ $kitchen->review }}</textarea>
        </div>

        <button type="submit" class="btn btn-success">Update Item</button>
        <a href="{{ route('kitchen.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
