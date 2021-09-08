<!-- collegamento a layouts con header e footer pre-impostati -->
@extends('layouts.app')
<!-- aggiunta titolo -->
@section('title','trips')
<!-- aggiunta main -->
@section('content')
<main>
    @foreach($trips as $trip)
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">volo: {{$trip->id}}</h5>
            <h6 class="card-subtitle mb-2 text-muted">{{$trip->depart_place}} - {{$trip->arrive_place}}</h6>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="{{ route('dettagli', ['key' => $trip->id ]) }}" class="card-link">trip link</a>
        </div>
    </div>

    @endforeach
</main>
@endsection