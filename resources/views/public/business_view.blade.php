@extends('public.common.template')
@section('contents')
<div class="w3-container w3-padding w3-center" >

<span class="w3-xxlarge w3-serif">{{$business['name']}}</span><br>
	
	<img src="{{asset('images/'.json_decode($business['feature_image'])[0])}}" class="w3-image" style="max-width: 70%;" />
	<span class="w3-large">Categories</span><br>
		@foreach($business['categories'] as $category )
		<span class="w3-teal w3-margin w3-tag w3-round-xlarge w3-text-white w3-padding">{{$category['name']}}</span>
		@endforeach
	<div class="w3-row">
<div class=" w3-col l9 m9 s12 w3-padding w3-center" >
	<span class="w3-large">Contact Box</span><br>
	<br>
<span class="w3-left w3-margin">	<span  class="fa fa-phone w3-large w3-text-teal w3-margin-right"></span>{{$business['phone']}}</span>
<span class="w3-center w3-margin">	<span  class="fa fa-phone fa-envelope w3-large w3-text-teal w3-margin-right"></span>{{$business['email']}}</span>
<span class='w3-right w3-margin'>	<span  class="fa fa-envelope w3-large w3-text-teal w3-margin-right"></span>{{$business['website']}}</span>

</div>

<div class="w3-col l3 m3 s12 w3-padding-large">
<span>Reviews</span><br>

	<i class="fa fa-star w3-medium w3-text-yellow w3-margin-right"></i>
	<i class="fa fa-star w3-medium w3-text-yellow w3-margin-right"></i>
	<i class="fa fa-star w3-medium w3-text-yellow w3-margin-right"></i>
	<i class="fa fa-star w3-medium w3-text-yellow w3-margin-right"></i>
	<i class="fa fa-star-half-empty w3-medium w3-text-yellow w3-margin-right"></i>
	<span class="w3-text-yellow">(56)</span>

		

	</div>
</div>
<i class="fa fa-map-marker w3-xlarge w3-text-pink w3-margin-right"></i>
{{$business['address']}}
		<br>
		
	<div class="w3-container w3-padding">
		<?=$business['description']?>
	</div>

</div>

	

@endsection