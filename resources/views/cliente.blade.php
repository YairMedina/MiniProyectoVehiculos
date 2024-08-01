@extends('layouts.app')

@section('content')

<div class="container">
    
<div class="container">
<div class="container my-5">
        <div class="row">
            <div class="col-md-12">
                <div class="image-text-section">
                <h2 class="display-3 text-center">"HISTORIAL DE CLIENTES"</h2><br>
                    <div class="text-content">
                        
                        <p class="lead">
                        Un Módulo de Clientes en una plataforma de renta de vehículos es una sección especializada del sistema que gestiona toda la información y las interacciones relacionadas con los clientes que utilizan el servicio de alquiler de vehículos. Este módulo es fundamental para proporcionar un buen servicio al cliente, organizar la gestión de reservas y mantener un registro detallado de las transacciones.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <h1 class="text-center">Listado de Clientes</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Telefono</th>
                <th>Sexo</th>
                <th>RFC</th>
            </tr>
        </thead>
        <tbody>
            @foreach($clients as $client )
            <tr>
                <th>{{ $client->id }}</th>
                <th>{{ $client->nombre }}</th>
                <th>{{ $client->telefono }}</th>
                <th>{{ $client->sexo }}</th>
                <th>{{ $client->rfc }}</th>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection