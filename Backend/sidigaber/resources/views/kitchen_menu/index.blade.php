@extends('layouts.app')

@section('title', 'Restaurant Menu')

@section('content')
<div class="container">
    <h2 class="my-4 text-center text-light font-weight-bold">Restaurant Menu</h2>
    <div class="menu-book">
        @foreach($kitchens as $kitchen)
            <div class="menu-page">
                <h5 class="text-center text-light font-weight-bold">{{ $kitchen->item_name }}</h5>
                <p class="text-center text-success font-weight-bold">${{ number_format($kitchen->item_price, 2) }}</p>
            </div>
        @endforeach
    </div>
</div>
@endsection

@section('styles')
<style>
    body {
        background-color: #111 !important;
        color: #fff !important;
    }

    .menu-book {
        display: flex !important;
        flex-wrap: wrap !important;
        justify-content: center !important;
        gap: 30px !important;
        margin-top: 30px !important;
    }

    .menu-page {
        width: 250px !important;
        height: 350px !important;
        background-color: #f8f9fa !important;
        border: 1px solid #ddd !important;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1) !important;
        border-radius: 8px !important;
        padding: 15px !important;
        display: flex !important;
        flex-direction: column !important;
        justify-content: center !important;
        align-items: center !important;
        transform: perspective(1000px) rotateY(0deg) !important;
        transition: transform 0.3s ease-in-out !important;
    }

    .menu-page:hover {
        transform: perspective(1000px) rotateY(5deg) !important;
        box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.2) !important;
    }

    .menu-page h5 {
        font-size: 20px !important;
        font-weight: bold !important;
        color: #333 !important;
        margin-bottom: 10px !important;
    }

    .menu-page p {
        font-size: 18px !important;
        font-weight: bold !important;
        color: #28a745 !important;
    }
</style>
@endsection
