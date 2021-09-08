@extends('layouts.app')

@section('title', 'trip')

@section('content')

    <div class="container">
        <div class="card">
            <h5 class="card-header">{{$trip->depart_place}} - {{$trip->arrive_place}}</h5>
            <div class="card-body">
              <h5 class="card-title">{{ $trip->price}}</h5>
              <p class="card-text"></p>

            </div>
          </div>         

        {{-- <div>
            {{ $houses->links() }}
        </div> --}}
        
    </div>    
@endsection