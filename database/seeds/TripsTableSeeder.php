<?php

use Illuminate\Database\Seeder;
use App\Trip;

class TripsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 20; $i++) { 
            $newTrip = new Trip();
            $newTrip-> depart_place = 'venezia';
            $newTrip-> depart_time = '15:30';
            $newTrip-> arrive_place = 'timbuctu';
            $newTrip-> arrive_time = '19:45';
            $newTrip-> stopover = 1;
            $newTrip-> price = 145.50;
            $newTrip-> class = 'business';
            $newTrip-> save();
        }
    }
}
