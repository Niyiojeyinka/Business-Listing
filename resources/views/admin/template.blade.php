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
  <script src="https://use.fontawesome.com/16da2feddb.js"></script>
<style>
    a {
        text-decoration: none;
    }
</style>
<body class="">
@yield('screen')

</body>
</html>