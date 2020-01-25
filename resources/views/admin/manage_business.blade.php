@extends('admin.template')
@section('screen')
@include('admin.admin_template')
<div class="w3-col l9 s12 m9">
    <div class="w3-container w3-padding w3-center">
@if(Session::has("success"))

<span class="w3-text-green">{{session('success')}}</span><br>

@endif

@foreach($businesses as $business)

<div class="w3-padding w3-card w3-center w3-margin">

	Name: {{$business->name}}
	<br>

	<a href="{{url('admin/business/delete/'.$business->id)}}">Delete</a>
	@if($business->status == 1)
	<a href="{{url('admin/business/status/deactivate/'.$business->id)}}">Deactivate</a>
	@else
		
		<a href="{{url('admin/business/status/activate/'.$business->id)}}">Activate</a>
     @endif

	<a href="{{url('admin/business/edit/'.$business->id)}}">Edit</a>



</div>



@endforeach


    </div></div>

@endsection
