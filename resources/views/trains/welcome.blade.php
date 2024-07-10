@extends('layouts.app')

@section('main')

<h1>Pagina Treni</h1>

<div class="row">
    @foreach ($trains as $train)
    <div class="col-4">
        <div class="card">
            <div class="card-header fw-bold">
              Travel with {{ $train->company }}
            </div>
            <div class="card-body">
              <h5 class="card-title">{{ $train->train_code }}</h5>
              <p class="card-text">From: {{ $train->departure_station }} || To: {{ $train->destination_station }}</p>
              <a href="#" class="btn btn-primary">Departure: {{ $train->departure_time }} || Arrival: {{ $train->arrival_time }}</a>
            </div>
          </div>
    </div>
    @endforeach
</div>
    
@endsection