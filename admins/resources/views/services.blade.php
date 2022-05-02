@extends('Layout.app')

@section('content')

<div id="mainDiv"class="container">
<div class="row">
<div class="col-md-12 p-5">
  <div class="">
    <a href="/create">
      <button class="btn btn-success btn-sm">Add servide</button>
    </a>
  </div>
<table id="" class="table table-striped table-bordered" cellspacing="0" width="100%">
  <thead>
    <tr>
      <th class="th-sm">No</th>
	  <th class="th-sm">Name</th>
	  <th class="th-sm">Description</th>
	  <th class="th-sm">Image</th>
	  <th class="th-sm">Edit</th>
      <th class="th-sm">Delete</th>

    </tr>
  </thead>
  <tbody id="service_table">
 
  @foreach($servData as $serv)

  <tr>

      <td>{{ $loop->iteration}}</td>
       <td>{{ $serv->service_name}}</td>
      <td>{{ $serv->service_des}}</td>
		  <td><img src="{{asset('$serv->service_img')}}"width="80"height="80"></td>
      <td>
        <a href=""title="View Service"><button class="btn btn-info btn-sm"><i class="fa fa-eye"aria-hidden="true"></i>View</button></a>

         <a href=""title="Edit Service"><button class="btn btn-primary btn-sm"><i class="fa-solid fa-square-pen"></i>Edit</button></a>

      </td>
      <td>
        <form method="POST"action=""accept-charset="UTF-8">
         
          <button type="submit"class="btn btn-danger btn-sm"title="Delete Service"onclick="return confirm('Are You Sure to Deleted !')">Delete</button>
        </form>

      </td>
    </tr>
@endforeach
 
  </tbody>
</table>

</div>
</div>
</div>


    

@endsection









			


	
