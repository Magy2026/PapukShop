@extends('layouts.main')
@section('header-title')
 &#x1F6D2;
@endsection
@section('content')
@if(!empty($cart))
@php $total=0; @endphp
<h1> &#x1F6D2; Զամբյուղ </h1>
@foreach($cart as $id=> $item)
<div class="cart-items">
    <div class="cart-item">
    <img src="{{asset('storage/'.$item['image'])}}" alt="{{$item['name']}}" width="70" height="70" loading="lazy"/>
         <p> Քանակ`{{$item['qty']}} </p>
         <p> Ընդհանուր՝{{$item['price']*$item['qty']}} դր. </p>
         @php $total += $item['price']*$item['qty']; @endphp 

 <div class="cart-buttons">         
        <a href="{{route('cart.decrement',$id)}}" class="minus">-</a>
         <a href="{{route('cart.increment',$id)}}" class="plus">+</a>
         <a href="{{route('cart.remove',$id)}}" class="delete"> &#x1F5D1; Ջնջել</a>
     
 </div> 
</div>
</div>
@endforeach

@else
<p> Զամբյուղը դատարկ է </p>
@endif 

<div class="cart-total"> Ընդհանուր գումարը՝ {{$total ?? 0}} դր.</div>
@endsection