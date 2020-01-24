@extends('admin.template')
@section('screen')
@include('admin.admin_template')
<div class="w3-col l9 s12 m9">
    <div class="w3-container w3-padding w3-center">

<span class="w3-large"><strong>New Business</strong></span><br><br>

    	<form action="{{url('admin/business/create')}}" method="POST">

<div class="w3-margin">
    		<label for="name" class="w3-label">Business Name:</label><br>
<input type="text" name="name" class="w3-padding-large" placeholder="Business Name" />
<br>
</div>
    	
    	<div class="w3-margin">
	<label for="name" class="w3-label">Business Details:</label>
	<br>
    		<textarea name="description" cols="35" rows="15"></textarea>
</div>
<br>
<input type="submit" name="submit" value="Add Business" class="w3-btn w3-margin w3-blue w3-text-white">
    	</form>


    </div>
  </div>
  
</div>

@endsection