@extends('admin.template')
@section('screen')
@include('admin.admin_template')
<div class="w3-col l9 s12 m9">
    <div class="w3-container w3-padding w3-center">

<span class="w3-large"><strong>New Business</strong></span><br><br>

    	<form action="{{url('admin/business/create')}}" method="POST"  enctype="multipart/form-data">

@csrf

<div class="w3-margin">
    		<label for="name" class="w3-label">Business Name:</label><br>
<input type="text" name="name" class="w3-padding-large" placeholder="Business Name" />
<br>
</div>
    	
    	<div class="w3-margin">
	<label for="description" class="w3-label">Business Details:</label>
	<br>
    		<textarea id="contents" name="description" cols="35" rows="15"></textarea>
</div>
<br>

<label for="Category" class="w3-label">Category:</label>

<div>

	@foreach($categories as $category)

<span class="w3-margin"><input type="checkbox" class="w3-check" name="categories[]" value="{{$category->id-quarter{{$category->name}} </span>

	@endforeach
	

</div>
<br>
<div class="w3-row">
	
<div class="w3-quarter">
	<label for="address" class="w3-label">Address:</label><br>
	<input type="address" name="address" class="w3-padding">

</div>
	
<div class="w3-quarter">
	<label for="phone" class="w3-label">Mobile Number:</label><br>

	<input type="tel" name="phone" class="w3-padding">

	
</div>
	
<div class="w3-quarter">
	<label for="phone" class="w3-label">Website:</label><br>

	<input type="url" name="website" class="w3-padding">

	
</div>
<div class="w3-quarter">
	<label for="email" class="w3-label">Email Address:</label><br>

	<input type="url" name="email" class="w3-padding">

	
</div>
</div>


<div class="w3-margin">
	<label for="image" class="w3-label">Feature Image:</label>
<input type="file" name="feature_image" class="w3-padding"/>

</div>
<input type="submit" name="submit" value="Add Business" class="w3-btn w3-margin w3-blue w3-text-white">
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
            uploadImage(image[0]);
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
            $('#contents').summernote("insertNode", image[0]);
        },
        error: function(data) {
            console.log(data);
        }
    });
}});


</script>


@endsection