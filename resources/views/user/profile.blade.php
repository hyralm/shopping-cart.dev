@extends('layouts.app')

@section('title')
    Shopping Cart: Profile
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12">
                <h1>User's profile</h1>
                <hr>
                <h2>My orders</h2>
                @foreach($orders as $order)
                    <div class="panel panel-default">
                        <ul class="list-group">
                            @foreach($order->cart->items as $item)
                                <li class="list-group-item">
                                    <span class="badge">${{ $item['price'] }}</span>
                                    {{ $item['item']->title }} | {{ $item['qty'] }} {{ $item['qty'] > 1 ? 'Units' : 'Unit' }}
                                </li>
                            @endforeach
                        </ul>
                        <div class="panel-footer">
                            <strong>Total price: ${{ $order->cart->totalPrice }}</strong>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection