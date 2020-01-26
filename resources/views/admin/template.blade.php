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

  <script src="https://use.fontawesome.com/16da2feddb.js"></script>
  <!---editor dependency plus jquery-->  
  <link rel="stylesheet"  href="{{asset('editor/bootstrap3.3.5/css/bootstrap.css')}}">
  <script type="text/javascript" src="{{asset('editor/js/jquery.js')}}">
		</script>
  <script type="text/javascript" src="{{asset('editor/bootstrap3.3.5/js/bootstrap.js')}}">
		</script>
<link rel="stylesheet"  href="{{asset('editor/dist/summernote.css')}}">
<script type="text/javascript" src="{{asset('editor/dist/summernote.js')}}">

</script>

<link rel="stylesheet" href="{{asset('editor/css/fontawesome-4.6.3.min.css')}}">
<style>
    a {
        text-decoration: none;
    }
</style>
<body class="">
@yield('screen')

</body>
</html>