@extends('layouts.app')

@section('content')
 <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.6.0/css/bootstrap.min.css" rel="stylesheet">


 <div class="container my-5">
        <div class="row">
            <div class="col-md-12">
                <div class="image-text-section">
                <h2 class="display-3 text-center">"ROLES ADMINISTRATIVOS"</h2><br>
                    <div class="text-content">
                        
                        <p class="lead">
                        El Módulo de Roles de Usuario es una herramienta en nuestra página web que te permite gestionar qué pueden hacer los usuarios dentro de la plataforma. Los roles definen las diferentes responsabilidades y permisos de los usuarios. Por ejemplo, algunos usuarios pueden tener acceso completo para administrar el contenido, mientras que otros solo pueden visualizar información.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

<div class="container">
    <h1 class="text-center">Usuarios</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
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
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-id="{{ $use->id }}" onclick="abrirModal(this)">Permisos</button>
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
        <h5 class="modal-title" id="exampleModalLabel">Asignar Roles</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <input type="text" class="form-control" id="idusuario" readonly placeholder="Ingresa algo">
      <input type="text" class="form-control" id="idrol" placeholder="Ingresa Rol">
    </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" onclick="asignarPermiso()">Guardar</button>
        
      </div>
    </div>
  </div>
</div>
    <script>

function abrirModal(button){

    var userId = button.getAttribute('data-id');
    console.log('ID del usuario:', userId);
    $('#idusuario').val(userId)
    $('#exampleModal').modal("show")
}

function asignarPermiso(){

    $.ajax({
                url: 'asignar-role', // Ruta definida en Laravel
                type: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    id:   $('#idusuario').val(),
                    rol: $('#idrol').val(),
                },
                success: function(response) {
                    console.log('Respuesta del servidor:', response);
                    alert('Rol asignado con éxito');s                },
                error: function(xhr, status, error) {
                    console.error('Error en la solicitud:', error);
                    // Manejar errores
                }
            });
}

    </script>
@endsection

