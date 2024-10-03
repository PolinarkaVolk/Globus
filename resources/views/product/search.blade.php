@extends('layouts.app')

@section('content')

<div class="container">
    <h1>Search Results for "{{ $searchquery }}"</h1>

    @if($products->isEmpty())
        <p>No products found.</p>
    @else
        <div class="row">
            @foreach($products as $product)
                <div class="col-md-4 g-5">
                    <div class="card mb-4">
                        <img src="{{ $product->photo }}" class="card-img-top" style="max-height:270px" alt="Product Image">
                        <div class="card-body">
                            <a href="{{ route('showProduct', ['cat' => 'category', 'product_id' => $product->id]) }}" class="card-naming" 
                            style="font-weight:700; color:black; text-decoration:none; margin-top:6px; margin-bottom:12px;">{{ $product->title }}</a>
                            <p class="card-param"
                            style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 300px; margin-bottom:5px; margin-top:5px">Размер: {{ $product->size }}mm.</p>
                            <p class="card-param"
                            style="margin-bottom:5px">Количество: {{ $product->quantity }}шт. в комплекте</p>
                            <p class="card-param"
                            style="font-weight:700; margin-bottom: 0px">от {{ $product->price }}руб.</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>

@endsection