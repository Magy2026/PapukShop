@extends('layouts.main')
@section('header-title')
Գլխավոր
@endsection
@section('content')
<h1> Գլխավոր </h1>
<h2> Բարի գալուստ <b> <strong> «Փափուկ» </strong> </b> օնլայն խանութ </h2>
<div class="hero-slider">
  @foreach($slides as $slide)
  <div class="slide">
   <img src="{{asset('storage/'.$slide->image)}}" alt="{{$slide->title}}" width="100%" heigth="100%">
   <div class="slide-text">
    <p> {{$slide->subtitle}} </p>
</div>
</div>
  @endforeach
</div>
  @endsection
  
