@extends('layouts.app')
@section('title')
    @if($cat)
        {{ $cat->title }}
    @else
        Default Title
    @endif
@endsection

@section('content')

@if($cat)
    <div class="container marketing">
        <h2 class="category_title col-4 h2-bold">{{ $cat->title }}</h2>
        <div class="row">
            @foreach($cat->products as $product)
                <div class="col-md-4 g-5">
                    <div class="card mb-4">
                        <img src="{{ $product->photo }}" class="card-img-top" style="max-height:270px" alt="Картинка товара">
                        <div class="card-body">
                            <a href="{{ route('showProduct', ['cat' => 'category', 'product_id' => $product->id]) }}" class="card-naming" 
                            style="font-weight:700; color:black; text-decoration:none; margin-top:6px; margin-bottom:12px;">{{ $product->title}}</a>
                            <p class="card-param"
                            style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 300px; margin-bottom:5px; margin-top:5px">Размер: {{ $product->size }}мм.</p>
                            <p class="card-param"
                            style="margin-bottom:5px">Количество: {{ $product->quantity }}шт. в комплекте</p>
                            <p class="card-param"
                            style="font-weight:700; margin-bottom: 0px">от {{ $product->price }}руб.</p>
                        </div>
                    </div>
                </div>
                @if ($loop->iteration % 3 == 0)
        </div>
        <div class="row">
            <div class="col-md-4">
                
            </div>
        @endif
        @endforeach
        
    </div>
@else
    <div class="container marketing">
        <h2 class="category_title col-4 h2-bold">Default Title</h2>
        <p>No products found for this category</p>
    </div>

@endif
</div>
</div>
@endsection