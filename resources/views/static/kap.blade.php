@extends('layouts.main')
@section('header-title')
Կապ մեզ հետ
@endsection
@section('content')
@if($errors->any())
<div class="block-error">
<ul>
    @foreach($errors->all() as $err)
    <li>{{$err}}</li>
    @endforeach
</ul>
</div>
@endif
<h1>Հետադարձ կապ</h1>
<form class="contact-form" action="{{ route('kap.post') }}" method="post">
    @csrf
    <label for="name"> անուն </label>
    <input type="text" placeholder="գրեք Ձեր անունը" name="name" id="name" value="{{old('name')}}"/>

    <label for="email"> Էլ. հասցե </label>
    <input type="email" placeholder="գրեք Ձեր Էլ. հասցեն" name="email" id="email" value="{{old('email')}}"/>

    <label for="subject"> թեմա </label>
    <input type="text" placeholder="թեմա" name="subject" id="subject" value="{{old('subject')}}"/>

    <label for="message"> նամակ </label>
    <textarea name="message" id="message" placeholder="գրել նամակ">{{old("message")}}</textarea>

    <button type="submit"> ուղարկել</button>

</form>
@endsection