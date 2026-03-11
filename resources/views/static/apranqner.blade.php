@extends('layouts.main')
@section('header-title')
Ապրանքներ
@endsection
@section('content')
<h1> Մեր տեսականին </h1>
<div class="products">
    @foreach($products as $product)
    <div class="product-card">
    <a href="{{route('apranqner.show', $product->id)}}">
  <img src="{{asset('storage/'.$product->image)}}" alt="{{$product->name}}">
  </a> 
  <h2> {{$product->name}} </h2>
 <p> {{$product->price}} դրամ </p>
 <a href="{{route('add.to.cart', $product->id)}}">
<h3> Ավելացնել զամբյուղ </h3>
</a></div>
 @endforeach
</div>
@endsection