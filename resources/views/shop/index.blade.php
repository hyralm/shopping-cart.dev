@extends('layouts.app')

@section('title')
    Shopping Cart
@endsection

@section('content')
    <div class="container">
        @if(Session::has('success'))
            <div class="row">
                <div class="col-sm-6 col-md-4 col-sm-offset-3 col-md-offset-4">
                    <div id="charge-message" class="alert alert-success alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        {{ Session::get('success') }}
                    </div>
                </div>
            </div>
        @endif

        @foreach($products->chunk(3) as $productChunk)
            <div class="row">
                @foreach($productChunk as $product)
                    <div class="col-sm-4 col-md-4">
                        <div class="thumbnail">
                            <img src="{{ asset('images/' . $product->image_path) }}" alt="photo">
                            <div class="caption">
                                <h4 class="title">{{ $product->title }}</h4>
                                <p class="description">{{ str_limit($product->description, 156) }}</p>
                                <div class="pull-left price">${{ $product->price }}</div>
                                <div class="clearfix">
                                    <a href="{{ route('product.addToCart', ['id' => $product->id]) }}" class="btn btn-success pull-right text-capitalize" role="button">Add to
                                        cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endforeach
    </div>
@endsection
