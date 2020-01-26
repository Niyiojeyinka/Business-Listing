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
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<style>
    a {
        text-decoration: none;
    }
</style>
<body class="">

<header class="w3-container w3-padding-jumbo w3-teal">
<span class="w3-xlarge">A Classic Business Directory Service</span>
</header>
<div>
 @yield('contents')
 </div>
<footer class="w3-container w3-padding-jumbo w3-teal w3-center">

&copy; 2020 All right Reserved.
</footer>
 </body>
  </html>
