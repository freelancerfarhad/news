<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <title>Category</title>
  </head>
  <body>
    <div class="container mt-5">
        <h1 class="text-center">Axios CRUD</h1>
        <hr>
        <div class="row">
            <div class="col-8">
                <h4>Manage Category</h4>
                <table class="table table-bordered">
                    <tr>
                        <th>Sl</th>
                        <th>Name</th>
                        <th>Actions</th>
                    </tr>
                    <tbody id="tbody">

                    </tbody>
                </table>
            </div>
            <div class="col-4">
                <h4>Add New Category</h4>
                <form  id="addNewDataForm">
                    <div class="form-group">
                        <input type="text" class="form-control" id="name" placeholder="Add New Category">
                        <span id="error" class="text-danger"></span>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-sm btn-block btn-success" type="submit">Add New Category</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<!-- Modal -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <form  id="editDataForm">
            <div class="form-group">
                        <input type="text" class="form-control" id="e_name" placeholder="Add New Category">
                        <input type="hidden" id="e_id">
                        <span id="error" class="text-danger"></span>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-sm btn-block btn-success" type="submit">Update Category</button>
                    </div>
            </form>
      </div>

    </div>
  </div>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" ></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script type="text/javascript">

$('body').on('submit','#addNewDataForm',function(e){

e.preventDefault();

alert(5);

});
</script>
</body>
</html>