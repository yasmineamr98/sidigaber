@extends('layouts.app')

@section('title', 'Edit Raw Meat')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h2 class="mb-0">Edit Raw Meat: {{ $rawMeat->name }}</h2>
                        <a href="{{ route('raw-meats.index') }}" class="btn btn-secondary btn-sm">Back to List</a>
                    </div>

                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('raw-meats.update', $rawMeat) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                                    name="name" value="{{ old('name', $rawMeat->name) }}" required>
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <textarea class="form-control" id="description" name="description"
                                    rows="3">{{ old('description', $rawMeat->description) }}</textarea>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="price" class="form-label">Price</label>
                                    <input type="number" class="form-control @error('price') is-invalid @enderror"
                                        id="price" name="price" step="0.01" min="0"
                                        value="{{ old('price', $rawMeat->price) }}" required>
                                    @error('price')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="category" class="form-label">Category</label>
                                    <input type="text" class="form-control @error('category') is-invalid @enderror"
                                        id="category" name="category" value="{{ old('category', $rawMeat->category) }}"
                                        required>
                                    @error('category')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="weight" class="form-label">Weight (kg)</label>
                                    <input type="number" class="form-control @error('weight') is-invalid @enderror"
                                        id="weight" name="weight" step="0.01" min="0"
                                        value="{{ old('weight', $rawMeat->weight) }}" required>
                                    @error('weight')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="quality" class="form-label">Quality</label>
                                    <select class="form-select @error('quality') is-invalid @enderror" id="quality"
                                        name="quality">
                                        <option value="standard" {{ old('quality', $rawMeat->quality) == 'standard' ? 'selected' : '' }}>Standard</option>
                                        <option value="premium" {{ old('quality', $rawMeat->quality) == 'premium' ? 'selected' : '' }}>Premium</option>
                                        <option value="economy" {{ old('quality', $rawMeat->quality) == 'economy' ? 'selected' : '' }}>Economy</option>
                                    </select>
                                    @error('quality')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="is_available" name="is_available"
                                    value="1" {{ old('is_available', $rawMeat->is_available) ? 'checked' : '' }}>
                                <label class="form-check-label" for="is_available">Is Available</label>
                            </div>

                            <div class="d-flex justify-content-between">
                                <button type="submit" class="btn btn-primary">Update Raw Meat</button>
                                <a href="{{ route('raw-meats.index') }}" class="btn btn-secondary">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection