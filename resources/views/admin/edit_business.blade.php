@extends('admin.template')
@section('screen')
@include('admin.admin_template')
<div class="w3-col l9 s12 m9">
    <div class="w3-container w3-padding w3-center">

<span class="w3-large"><strong>Edit Business</strong></span><br><br>



@if($errors->any)

@foreach($errors->all() as $error)

<span class="w3-text-red">{{$error}}</span><br>

@endforeach


@endif
@if(Session::has("success"))

<span class="w3-text-green">{{session('success')}}</span><br>

@endif
    	<form action="{{url('admin/business/edit/'.$id)}}" method="POST"  enctype="multipart/form-data">

@csrf

<div class="w3-margin">
    		<label for="name" class="w3-label">Business Name:</label><br>
<input type="text" name="name" class="w3-padding-large" placeholder="Business Name" value="{{$business['name']}}
" />
<br>
</div>

    	<div class="w3-margin">
	<label for="description" class="w3-label">Business Details:</label>
	<br>
    		<textarea id="contents" name="description" cols="35" rows="15">{{$business['description']}}</textarea>
</div>
<br>

<label for="Category" class="w3-label">Category:</label>

<div>

	@foreach($categories as $category)
<?php $check ="";?>
      @foreach( $business['categories'] as $bcategory)

        @if ($bcategory['id'] == $category->id)
          <?php $check ="checked";?>
        @endif
        @endforeach

<span class="w3-margin"><input type="checkbox" class="w3-check" name="categories[]" value="{{$category->id}}" {{$check}}> {{$category->name}} </span>

	@endforeach
	

</div>
<br>
<div class="w3-row">
	
<div class="w3-quarter">
	<label for="address" class="w3-label">Address:</label><br>
	<input type="address" name="address" class="w3-padding" value="{{$business['address']}}">

</div>
	
<div class="w3-quarter">
	<label for="phone" class="w3-label">Mobile Number:</label><br>

	<input type="tel" name="phone" class="w3-padding" value="{{$business['phone']}}">

	
</div>
	
<div class="w3-quarter">
	<label for="website" class="w3-label">Website:</label><br>

	<input type="url" name="website" class="w3-padding" value="{{$business['website']}}">

	
</div>
<div class="w3-quarter">
	<label for="email" class="w3-label">Email Address:</label><br>

	<input type="email" name="email" class="w3-padding" value="{{$business['email']}}">

	
</div>
</div>


<div class="w3-margin">
	<label for="image" class="w3-label">Feature Image:</label>
<input type="file" name="feature_image" class="w3-padding"/>

</div>
<input type="submit" name="submit" value="Edit Business" class="w3-btn w3-margin w3-blue w3-text-white">
    	</form>


    </div>
  </div>
  
</div>



<script>
    $(document).ready(function() {
       $('#contents').summernote({
    height: ($(window).height() - 300),
    callbacks: {
        onImageUpload: function(image) {
            uploadImage(image);
        }
    }
});

function uploadImage(image) {
    var data = new FormData();
    data.append("image", image);
    $.ajax({
        url: '{{url("admin/upload_image")}}',
        cache: false,
        contentType: false,
        processData: false,
        data: data,
        type: "post",
        success: function(url) {
            var image = $('<img>').attr('src', /*'http://' + */url);
            $('#contents').summernote("insertNode", image);
        },
        error: function(data) {
            console.log(data);
        }
    });
}});


</script>


@endsection