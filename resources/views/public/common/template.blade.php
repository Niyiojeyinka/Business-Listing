<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<title>{{$title ?? ''}}</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="" />
  <meta name="author" content="cbds"/>
  <meta name="description" content="A Classic Business Directory Service"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
  <link rel="stylesheet" href="{{asset('css/w3.css')}}">
  <link rel="stylesheet" href="{{asset('css/fontawesome-4.6.3.min.css')}}">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<style>
    a {
        text-decoration: none;
    }
</style>
<body class="">
<header  style="max-width: 2000px;height: 500px;background-image: url({{asset('images/header_bg.png') }});background-size: 100%;background-repeat: no-repeat;" class="w3-padding-large w3-border-bottom w3-border-white w3-card w3-hide-small">
<div class="w3-small">
  <img style="max-width: 220px;max-height: 200px" src="{{asset('images/logo.png')}}" class="w3-left w3-margin-left"/>



<a href="" class="w3-btn w3-teal w3-padding w3-right w3-hide-small">Terms & Condition</a>
<a href="" class="w3-btn w3-teal w3-padding w3-right w3-hide-small">Privacy Policy</a>
<a href="" class="w3-btn w3-teal w3-padding w3-right w3-hide-small">Login</a>
<a href="" class="w3-btn w3-teal w3-padding w3-right w3-hide-small">List Business</a>

</div>

<br>
<div class="w3-padding-jumbo w3-margin w3-center">
<form class="w3-padding-jumbo">
	@csrf
<input type="search" name="keywords" placeholder="Search....." class="w3-padding"/><br>
<button name="submit" class="w3-btn w3-black w3-padding w3-margin">search <i class="fa fa-search w3-text-white"></i></button>


</form>
</header>

<header  style="max-width: 800px;height: 300px;background-image: url({{asset('images/header_bg_small.png') }});background-size: 100%;background-repeat: no-repeat;"
 class="w3-padding-large w3-border-bottom w3-border-white w3-hide-medium w3-hide-large">
<img style="max-width: 120px;max-height: 60px" src="{{asset('images/logo.png') }}" class="w3-left"/>


<span class="fa fa-bars w3-text-white w3-large w3-right w3-margin-right"></span>


</header>








<div>
 @yield('contents')
 </div>
<footer class="w3-container w3-padding-jumbo w3-teal w3-center">

&copy; 2020 All right Reserved.
</footer>
 </body>
  </html>
