@extends('layouts.app')

@section('content')

<div class="container">
    
<div class="container">
<div class="container my-5">
        <div class="row">
            <div class="col-md-12">
                <div class="image-text-section">
                <h2 class="display-3 text-center">"CUSTOMER HISTORY"</h2><br>
                    <div class="text-content">
                        
                        <p class="lead">
                        A Customer Module in a vehicle rental platform is a specialized section of the system that manages all information and interactions related to customers using the vehicle rental service. This module is crucial for providing good customer service, organizing reservation management, and maintaining a detailed record of transactions.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <h1 class="text-center">"Customer List"</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Gender</th>
                <th>RFC</th>
            </tr>
        </thead>
        <tbody>
            @foreach($clients as $client )
            <tr>
                <th>{{ $client->id }}</th>
                <th>{{ $client->name }}</th>
                <th>{{ $client->phone }}</th>
                <th>{{ $client->gender }}</th>
                <th>{{ $client->rfc }}</th>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection