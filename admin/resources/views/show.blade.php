@extends('layout.app')

@section('content')


<div class="card">
	<div class="card-header">
		<h2>show page</h2>
	</div>
<div class="card-body">
	<h5 class="card-title">
		{{ $service->id}}
      
	</h5>
	<p class="card-text">
		{{ $service->service_name}}
      
	</p>
	<p class="card-text">
		{{ $service->service_des}}
	</p>

	<img src="{{ $service->service_img}}"width="80"height="80">
	
</div>
</div>
@endsection