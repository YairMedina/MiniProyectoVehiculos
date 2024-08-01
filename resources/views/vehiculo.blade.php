@extends('layouts.app')

@section('content')


<div class="container">
<div class="container my-5">
        <div class="row">
            <div class="col-md-12">
                <div class="image-text-section">
                <h2 class="display-3 text-center">"VEHICULOS RENTADOS"</h2><br>
                    <div class="text-content">
                        
                        <p class="lead">
                        Nuestro Servicio de Renta de Vehículos te permite alquilar coches para tus necesidades de transporte, ya sea para un viaje, una ocasión especial o un uso diario. Ofrecemos una variedad de vehículos, desde coches compactos hasta SUVs y vehículos de lujo.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <h1 class="text-center">Listado de Vehiculos rentados</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Placa</th>
                <th>Telefono</th>
                <th>Modelo</th>
            </tr>
        </thead>
        <tbody>
            @foreach($vehiculos as $vehiculo )
            <tr>
                <th>{{ $vehiculo->id }}</th>
                <th>{{ $vehiculo->nombre }}</th>
                <th>{{ $vehiculo->placa }}</th>
                <th>{{ $vehiculo->telefono }}</th>
                <th>{{ $vehiculo->modelo }}</th>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>


@endsection
