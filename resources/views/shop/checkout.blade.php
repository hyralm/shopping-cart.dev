@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-4 col-sm-offset-4 col-md-offset-3">
                <h1>Checkout</h1>
                <h4 class="text-capitalize">Your total: ${{ $total }}</h4>
                <div id="payment-errors"
                     class="alert alert-danger {{ !Session::has('error') ? 'hidden' : '' }}">{{ Session::get('error') }}</div>
                <form action="{{ route('order.checkout') }}" method="post" id="checkout-form">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="form-group">
                                <label for="address">Address</label>
                                <input type="text" id="address" class="form-control" name="address" required>
                            </div>
                        </div>

                        <div class="col-xs-12">
                            <div class="form-group">
                                <label for="card-number">Credit Card Number</label>
                                <input type="text" id="card-number" class="form-control" data-stripe="number"
                                       required>
                            </div>
                        </div>

                        <div class="col-xs-12">
                            <div class="row">
                                <div class="col-xs-6">
                                    <div class="form-group">
                                        <label for="card-expiry-month">Expiry Month</label>
                                        <input type="text" id="card-expiry-month" size="2" class="form-control"
                                               data-stripe="exp_month" required>
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <div class="form-group">
                                        <label for="card-expiry-year">Expiry Year</label>
                                        <input type="text" id="card-expiry-year" size="2" class="form-control"
                                               data-stripe="exp_year" required>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12">
                            <div class="form-group">
                                <label for="card-cvc">CVC</label>
                                <input type="text" id="card-cvc" class="form-control" data-stripe="cvc" required>
                            </div>
                        </div>

                        {{ csrf_field() }}
                        <div class="col-xs-12">
                            <button type="submit" class="btn btn-success"> Buy Now</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
    <script src="/js/shop/checkout.js"></script>
@endsection