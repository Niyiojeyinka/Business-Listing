@extends('public.common.template')
@section('contents')
<div class="w3-padding w3-center w3-border">

<div>
	<span class="w3-large w3-serif">Search Result</span><br>

	@foreach($result as $business)

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