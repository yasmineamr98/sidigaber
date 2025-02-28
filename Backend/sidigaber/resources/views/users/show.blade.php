@extends('layouts.app')

@section('title', 'User Details')

@section('content')
<div class="card">
    <div class="card-header bg-info text-white">User Details</div>
    <div class="card-body">
        <p><strong>Name:</strong> {{ $user->name }}</p>
        <p><strong>Email:</strong> {{ $user->email }}</p>
        <p><strong>Phone:</strong> {{ $user->phone_number }}</p>
        <a href="{{ route('users.index') }}" class="btn btn-secondary">Back</a>
    </div>
</div>
@endsection
