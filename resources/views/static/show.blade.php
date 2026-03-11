@extends('layouts.main')
@section('header-title')
Ապրանքներ
@endsection
@section('content')
<a href="{{route('apranqner')}}">
<h1> Վերադարձ մեր տեսականի </h1>
</a>
<h2> {{$products->name}} </h2>
<p> {{$products->price}} դրամ </p>
<div class="product-gallery">
    <div class="main-image">
        <img id="current-image" src="{{asset($products->image)}}" alt="{{$products->name}}" width="500" height="500"/>
        <span id="prev-btn" class="arrow left">&#10094;</span>
        <span id="next-btn" class="arrow right">&#10095;</span>
 </div>
   <div class="thumbnails"> 
 @foreach($products-> images as $img)
 <img class="thumb" src="{{asset($img)}}"  alt="{{$products->name}}" width="100" height="100"/>
 @endforeach
</div>

<p> {{$products->description}} </p>
<script>
       let currentImage=document.getElementById('current-image');
   let thumbs=Array.from(document.querySelectorAll('.thumb'));
  let currentIndex=0;
  function updateCurrentIndex(){
    currentIndex=thumbs.findIndex(img=> img.src===currentImage.src);
    if(currentIndex===-1)currentIndex=0;
  }

  thumbs.forEach((img, index)=>{
    img.addEventListener('click',()=>{
        currentImage.src=img.src;
        currentIndex=index;
    });
  });

  document.getElementById('prev-btn').addEventListener('click',()=>{
    updateCurrentIndex();
    currentIndex=(currentIndex+1)%thumbs.length
       currentImage.src=thumbs[currentIndex].src;
  });

   document.getElementById('next-btn').addEventListener('click',()=>{
    updateCurrentIndex();
    currentIndex=(currentIndex-1+thumbs.length)%thumbs.length;
       currentImage.src=thumbs[currentIndex].src;
  });
  
</script>
 
   

@endsection