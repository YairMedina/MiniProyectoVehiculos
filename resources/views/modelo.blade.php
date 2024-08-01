@extends('layouts.app')

@section('content')
<div class="container">
<div class="container my-5">
        <div class="row">
            <div class="col-md-12">
                <div class="image-text-section">
                <h2 class="display-3 text-center">"MODELOS DE VEHICULOS"</h2><br>
                    <div class="text-content">
                        
                        <p class="lead">
                        Un Módulo de Modelos de Vehículos es una sección específica dentro de un sistema de gestión de renta de vehículos que se encarga de manejar toda la información relacionada con los diferentes modelos de vehículos disponibles para alquiler. Este módulo facilita la organización, visualización y gestión de los vehículos ofrecidos en la plataforma.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <h1 class="text-center">Listado de Modelos</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Año</th>
                <th>Color</th>
                <th>Cilindros</th>
            </tr>
        </thead>
        <tbody>
            @foreach($modelos as $modelo )
            <tr>
                <th>{{ $modelo->id }}</th>
                <th>{{ $modelo->nombre }}</th>
                <th>{{ $modelo->año }}</th>
                <th>{{ $modelo->color }}</th>
                <th>{{ $modelo->cilindros }}</th>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
