@extends('layouts.app')

@section('content')
 <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.6.0/css/bootstrap.min.css" rel="stylesheet">


 <div class="container my-5">
        <div class="row">
            <div class="col-md-12">
                <div class="image-text-section">
                <h2 class="display-3 text-center">"ADMINISTRATIVE ROLES"</h2><br>
                    <div class="text-content">
                        
                        <p class="lead">
                       
The User Roles Module is a tool on our website that allows you to manage what users can do within the platform. Roles define the various responsibilities and permissions of users. For example, some users may have full access to manage content, while others may only be able to view information.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

<div class="container">
    <h1 class="text-center">Users</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th></th>
             
    </div>
            </tr>
        </thead>
        <tbody>
            @foreach($usuarios as $use )
            <tr>
                <th>{{ $use->id }}</th>
                <th>{{ $use->name }}</th>
                <th>{{ $use->email }}</th>
                <th> <div class="container">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-id="{{ $use->id }}" onclick="openModal(this)">Permissions</button>
    </div></th>
            </tr>


            @endforeach


        </tbody>
    </table>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Assign Roles</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <input type="text" class="form-control" id="iduser" readonly>
      <input type="text" class="form-control" id="idrol" >
    </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="assignPermissions()">Save</button>
        
      </div>
    </div>
  </div>
</div>
    <script>

function openModal(button){

    var userId = button.getAttribute('data-id');
    console.log('ID User:', userId);
    $('#iduser').val(userId)
    $('#exampleModal').modal("show")
}

function assignPermissions(){

    $.ajax({
                url: 'assign-role', // Ruta definida en Laravel
                type: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    id:   $('#iduser').val(),
                    rol: $('#idrol').val(),
                },
                success: function(response) {
                    console.log('Respuesta del servidor:', response);
                    alert('Role assigned successfully');
                               },
                error: function(xhr, status, error) {
                    console.error('Error in request:', error);
                    // Manejar errores
                }
            });
}

    </script>
@endsection

