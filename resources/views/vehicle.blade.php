@extends('layouts.app')

@section('content')


<div class="container">
<div class="container my-5">
        <div class="row">
            <div class="col-md-12">
                <div class="image-text-section">
                <h2 class="display-3 text-center">"RENTED VEHICLES"</h2><br>
                    <div class="text-content">
                        
                        <p class="lead">
                        Our vehicle rental service allows you to rent cars for your transportation needs, whether for a trip, a special occasion, or everyday use. We offer a variety of vehicles, from compact cars to SUVs and luxury vehicles.
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
                <th>Name</th>
                <th>License Plate</th>
                <th>Phone</th>
                <th>Model</th>
            </tr>
        </thead>
        <tbody>
            @foreach($vehicles as $vehicle )
            <tr>
                <th>{{ $vehicle->id }}</th>
                <th>{{ $vehicle->name }}</th>
                <th>{{ $vehicle->plate }}</th>
                <th>{{ $vehicle->phone }}</th>
                <th>{{ $vehicle->model }}</th>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>


@endsection
