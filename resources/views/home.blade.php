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

<script>


fetch(url, {
  method: 'GET',
  headers: {
    'Content-Type': 'application/json',
    'X-CSRF-TOKEN': '{{ csrf_token() }}'  
  }
})
.then(response => {
  if (response.ok) {
   
    return response.json();  // Para respuesta JSON

  }
  throw new Error('Error in request');
})
.then(data => {
 
  console.log('Answer:', data);
})
.catch(error => {
  
  console.error('Error:', error);
});


</script>
@endsection
