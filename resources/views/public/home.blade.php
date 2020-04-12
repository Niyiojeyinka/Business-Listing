@extends('public.common.template')
@section('contents')
<div class="w3-padding w3-center w3-border">

<form>
	@csrf
<input type="search" name="keywords" class="w3-padding-large"/>

<input type="submit" name="submit" class="w3-btn w3-teal" value="search...">

</form>

<span class="w3-large">Categories</span>
<br>
<div class="w3-padding-large w3-card w3-center w3-margin">


@foreach($categories as $category)


	<a href="{{url('category/'.$category->id)}}" class=""> {{$category->name}}</a>
	
@endforeach

</div>
<div>
	<span class="w3-large w3-serif">Businesses</span><br>

	@foreach($businesses as $business)

<a href="{{url('/business/'.$business['id'])}}" class="">
<div class="w3-row w3-card-4 w3-margin">
	<div class="w3-col l5 m5 s5 w3-display-container">
		<img src="{{asset('images/'.json_decode($business['feature_image'])[0])}}"  style="width:100%;" class="w3-image" />
		
	</div>
	
<div class="w3-col l7 m7 s7 w3-padding">
	<span class="w3-xlarge"><b>{{$business['name']}}</b></span>
<span class="w3-opacity">listed since {{$business['created_at']}}</span>
	<br>
	<p>test</p>		<a href="{{url('/business/'.$business['id'])}}" class="w3-button w3-padding-large w3-white w3-text-teal w3-border w3-hide-small w3-margin">
<b>Read more.. »</b>
</a>
	</div>
	

</div>
</a>

	@endforeach


</div>


@endsection