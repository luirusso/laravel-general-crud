@extends('layouts.main')

@section('content')
    <section class="container">
        <div class="mb-5">
            <h1 class="mb-4">
                {{ $product['title'] }}
            </h1>
    
            <span class="fs-4">
                Starting from ${{ $product['price'] }}
            </span>
        </div>
        <div class="container w-75">
    
            <div class="d-flex justify-content-around align-items-center pt-3">
                <div class="w-100">
                    <img class="w-75" src="{{$product['thumb']}}" alt="{{ $product['title'] }}">
                </div>
        
                <p class="w-75">
                    {{ $product['description'] }}
                </p>
            </div>
        </div>
    </section>
@endsection