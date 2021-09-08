<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trip;

class TripController extends Controller
{
    public function index() {
        $trips = Trip::Paginate(5);
    
        return view('index', compact('trips'));
    }

    public function show($key) {
        $trip = Trip::where('id', $key)->first();
        
        return view('dettagli', compact('trip'));
    }
}
