@extends('layouts.app')

@section('content')

<div class="container">
    
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>

<SCRipt>
console.log("hola")
// Configurar la URL de la solicitud
const url = '/ventana';

// Configurar la solicitud con fetch
fetch(url, {
  method: 'GET',
  headers: {
    'Content-Type': 'application/json',
    'X-CSRF-TOKEN': '{{ csrf_token() }}'  // Asegúrate de incluir el token CSRF de Laravel aquí
  }
})
.then(response => {
  if (response.ok) {
    // Si la respuesta es exitosa, convertir la respuesta a JSON o texto según corresponda
    return response.json();  // Para respuesta JSON
    // return response.text(); // Para respuesta en texto
  }
  throw new Error('Hubo un problema con la solicitud.');
})
.then(data => {
  // Manejar los datos recibidos
  console.log('Respuesta:', data);
})
.catch(error => {
  // Capturar y manejar errores de red o de la solicitud
  console.error('Error:', error);
});


</SCRipt>
@endsection
