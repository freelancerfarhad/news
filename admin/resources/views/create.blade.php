@extends('layout.app')

@section('content')


<div class="container">
	<div class="row">
		<div class="col-8">
			
	
		
	<form action="{{route('store')}}" method="POST">
		 @csrf
	
		 
		 <label>Service Name</label><br>
		 <input type="text" name="service_name"id="service_name"class="form-control"><br>
		 <label>Service Description</label><br>
		 <input type="text" name="service_des"id="service_des"class="form-control"><br>
		<!--  <label>Service Image</label><br>
		 <input type="file" name="service_img"id="service_img"value=""class="form-control"><br> -->
		 <input type="submit" name="submit"value="Upload">



	</form>
</div>
	</div>
	</div>
@endsection