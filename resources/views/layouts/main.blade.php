<!DOCTYPE html>
<html lang="hy">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('header-title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
  <header>
    <div class="logo-wripper" title="լոգո">
      <div class="logo-circle" title="լոգո" >
      <div class="logo" title="խանութի անվանում" >
      <span class="l1"> Փ </span>
      <span class="l2"> Ա </span>
      <span class="l3"> Փ </span>
      <span class="l4"> ՈՒ</span>
      <span class="l5"> Կ </span>
   </div>
    </div>
     </div>
  <nav class="nav-menu">
    <a href="{{route('home')}}"> ԳԼԽԱՎՈՐ </a>
    <a href="{{route('apranqner')}}"> ԽԱՆՈՒԹ </a>
    <a href="{{route('about')}}"> ՄԵՐ ՄԱՍԻՆ </a>
    <a href="{{route('zambyugh')}}" class="cart-icon"> &#x1F6D2; </a>
    <a href="{{route('kap')}}"> ՀԵՏԱԴԱՐՁ ԿԱՊ </a>
  </nav>
  </header> 
 <div class="content-wrapper">
    @include('includes.aside')
  <main class="main-content">
   @yield('content')
 </main>
    @include('includes.aside1')
</div>
  <footer class="site-footer">
    <div class="footer-content">
    <p> &copy; 2026 Փափուկ օնլայն խանութ </p>
    <div class="footer-links">
    <a href="{{route('home')}}"> ԳԼԽԱՎՈՐ </a>
    <a href="{{route('apranqner')}}"> ԽԱՆՈՒԹ </a>
    <a href="{{route('about')}}"> ՄԵՐ ՄԱՍԻՆ</a>
    <a href="{{route('zambyugh')}}"> ԶԱՄԲՅՈՒՂ</a>
    <a href="{{route('kap')}}"> ՀԵՏԱԴԱՐՁ ԿԱՊ </a>
   </div>
  </div>
</footer>
@yield('scripts')
</body>
</html>