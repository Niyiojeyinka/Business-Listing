@extends('public.common.template')
@section('contents')
<div class="w3-container w3-padding w3-center" >

<span class="w3-xxlarge w3-serif">{{$business['name']}}</span><br>
	
	<img src="{{asset('images/'.json_decode($business['feature_image'])[0])}}" class="w3-image" style="max-width: 80%;" />
<div class="w3-padding-jumbo">
<div class="w3-card w3-center w3-margin" >
	<span>Contact Box</span>
<div class="w3-row">
	<div class="w3-half">
		<table class="w3-table w3-striped">
			<tr><td>Contact Number</td><td>{{$business['phone']}}</td></tr>
			<tr><td>Email Address</td><td>{{$business['email']}}</td></tr>
			<tr><td>website</td><td>{{$business['website']}}</td></tr>

		</table>
	</div>
	<div class="w3-half">
		{{$business['address']}}

	</div>
</div>
</div></div>
	<div class="w3-container w3-padding">
		<?=$business['description']?>
	</div>

</div>

	

@endsection