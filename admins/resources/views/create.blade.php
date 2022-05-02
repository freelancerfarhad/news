@extends('Layout.app')

@section('content')


<div class="container">
	<div class="row">
		<div class="col-8">
			
	
		
	<form action="/store" method="POST"enctype="multipart/form-data">
		
		 @csrf
		 
		 <label>Service Name</label><br>
		 <input type="text" name="service_name"id="service_name"class="form-control"><br>
		 <label>Service Description</label><br>
		 <input type="text" name="service_des"id="service_des"class="form-control"><br>
		 <label>Service Images</label><br>
		 <!-- <input type="text" name="service_img"id="service_img"class="form-control"><br> -->
		 <label>Service Image</label><br>
		 <input type="file" name="service_img"id="service_img"value=""class="form-control"><br>
		
		 <button type="submit"class="btn btn-info">Adds</button>
		 <a href="{{url('Service')}}"class="btn btn-danger">Back</a>



	</form>
</div>
	</div>
	</div>
@endsection