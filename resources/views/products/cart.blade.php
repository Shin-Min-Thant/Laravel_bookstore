@extends('layout.master')
@section('title')
    <title>Cart</title>


<link rel="stylesheet" href="{{asset('css/cart.css')}}">
@endsection
@section('content')
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container pb-5 mb-2">
    <!-- Cart Item-->
    @foreach ($products as $product)


    <div class="cart-item d-md-flex justify-content-between my-3"><span class="remove-item"><i class="fa fa-times"></i></span>
        <div class="px-3 my-3">
            <a class="cart-item-product" href="#">
                <div class="cart-item-product-thumb"><img src="{{asset('/uploads/'. unserialize($product->imgs)[0])}}" alt="Product"></div>
                <div class="cart-item-product-info">
                    <h4 class="cart-item-product-title">{{($product->title)}}</h4><span><strong>Type:</strong> Mirrorless</span><span><strong>Color:</strong> Black</span>
                </div>
            </a>
        </div>
        <div class="px-3 my-3 text-center">
            <div class="cart-item-label">Quantity</div>
            <div class="count-input">
                <select class="form-control">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                </select>
            </div>
        </div>
        <div class="px-3 my-3 text-center">
            <div class="cart-item-label">Subtotal</div><span class="text-xl font-weight-medium">$910.00</span>
        </div>
        <div class="px-3 my-3 text-center">
            <div class="cart-item-label">Discount</div><span class="text-xl font-weight-medium">$35.00</span>
        </div>
    </div>
    @endforeach

    <!-- Buttons-->
    <hr class="my-2">
    <div class="row pt-3 pb-5 mb-2">
        <div class="col-sm-6 mb-3"><a class="btn btn-style-1 btn-secondary btn-block" href="#"><i class="fe-icon-refresh-ccw"></i>&nbsp;Update Cart</a></div>
        <div class="col-sm-6 mb-3"><a class="btn btn-style-1 btn-primary btn-block" href="checkout-address.html"><i class="fe-icon-credit-card"></i>&nbsp;Checkout</a></div>
    </div>


    </div>





<script src="{{asset('js/cart.js')}}"></script>
@endsection
