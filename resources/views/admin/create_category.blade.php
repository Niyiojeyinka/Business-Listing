@extends('admin.template')
@section('screen')
@include('admin.admin_template')
<div class="w3-col l9 s12 m9">
    <div class="w3-container w3-padding w3-center">

<span class="w3-large"><strong>New Category</strong></span><br><br>

@if($errors->any())

@foreach($errors->all() as $error)

<span class="w3-text-red">{{$error}}</span><br>

@endforeach
@endif
@if(Session::has("success"))

<span class="w3-text-green">{{session('success')}}</span><br>

@endif
    	<form action="{{url('admin/category/create')}}" method="POST">
@csrf
<div class="w3-margin">
    		<label for="name" class="w3-label">Category:</label><br>
<input type="text" name="name" class="w3-padding-large" placeholder="Category Label" />
<br>
</div>
    	
    	
<br>
<input type="submit" name="submit" value="Add Category" class="w3-btn w3-margin w3-blue w3-text-white">
    	</form>


    </div>
  </div>
  
</div>

@endsection