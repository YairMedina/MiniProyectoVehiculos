@extends('layouts.app')

@section('content')
<div class="container">
<div class="container my-5">
        <div class="row">
            <div class="col-md-12">
                <div class="image-text-section">
                <h2 class="display-3 text-center">"VEHICLE MODELS"</h2><br>
                    <div class="text-content">
                        
                        <p class="lead">
                        A Vehicle Models Module is a specific section within a vehicle rental management system that handles all the information related to the different vehicle models available for rental. This module facilitates the organization, visualization, and management of the vehicles offered on the platform.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <h1 class="text-center">LIST OF MODELS</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Year</th>
                <th>Color</th>
                <th>cylinders</th>
            </tr>
        </thead>
        <tbody>
            @foreach($models as $model )
            <tr>
                <th>{{ $model->id }}</th>
                <th>{{ $model->name }}</th>
                <th>{{ $model->year }}</th>
                <th>{{ $model->color }}</th>
                <th>{{ $model->cylinders }}</th>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
