@extends('public.common.template')
@section('contents')
<div class="w3-center w3-border">
<div id="searchDiv" class="search w3-hide-medium w3-hide-large">
<form>
	@csrf
<input type="search" name="keywords" class="w3-padding-large w3-border"/>

<input type="submit" name="submit" class="w3-btn w3-teal" value="search...">

</form>
</div>
<span class="w3-large w3-text-teal">Categories</span>
<br>
<div class="w3-padding w3-card w3-center w3-margin">


@foreach($categories as $category)


	<a href="{{url('category/'.$category->id)}}" class="w3-tag w3-margin w3-padding w3-round-large w3-teal"> {{$category->name}}</a>
	
@endforeach

</div>
<div>
	<span class="w3-large w3-serif">Businesses</span><br>
<div class="w3-row"> 
	@foreach($businesses as $business)

<a href="{{url('/business/'.$business['id'])}}" class="">
<div class="w3-card-4 w3-margin w3-col l5 m5 s12 w3-padding">
	<div class="w3-col l5 m5 s5 w3-display-container">
		<img src="{{asset('images/'.json_decode($business['feature_image'])[0])}}"  style="width:100%;height:100%;" class="w3-image" />
		
	</div>
	
<div class="w3-col l7 m7 s7 w3-padding">
	<span class="w3-xlarge"><b>{{$business['name']}}</b></span>
<span class="w3-opacity w3-small">listed since {{$business['created_at']}}</span>
	<br>
	<p>test</p>		<a href="{{url('/business/'.$business['id'])}}" class="w3-button w3-padding-large w3-white w3-text-teal w3-border w3-hide-small w3-margin">
<b>View business.. »</b>
</a>
	</div>
	

</div>
</a>

	@endforeach

</div>
<style>
ul[class="pagination"] {

	list-style-type:none;
}
ul[class="pagination"] > li{
 display:inline;
 padding:8px;
 margin:8px;
 background-color:teal;
color:white;
}
li[class="page-item active"]{
	background-color:white !important;
	color:teal !important;
}
</style>
<div id="pagination" class="w3-margin">
	{{$businesses->links()}}
	</div>
</div>


@endsection