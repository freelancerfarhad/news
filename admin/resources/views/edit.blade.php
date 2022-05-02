@extends('layout.app')

@section('content')


<div>

	<form action="{{ url('service/' .$service->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$service->id}}" id="id" />
        <label>Service Name</label></br>
        <input type="text" name="name" id="name" value="{{$service->service_name}}" class="form-control"></br>
        <label>Service Description</label></br>
        <input type="text" name="address" id="address" value="{{$service->service_des}}" class="form-control"></br>
       
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
  
</div>















@endsection