@extends('admin.template')
@section('screen')
@include('admin.admin_template')
<div class="w3-col l9 s12 m9">
    <div class="w3-container w3-padding w3-center">
@if(Session::has("success"))

<span class="w3-text-green">{{session('success')}}</span><br>

@endif

@foreach($categories as $category)

<div class="w3-padding w3-card w3-center w3-margin">

	Category: {{$category->name}}
	<br>

	<a href="{{url('admin/category/delete/'.$category->id)}}" class="w3-text-red">Delete</a>
	



</div>



@endforeach


    </div></div>

@endsection
