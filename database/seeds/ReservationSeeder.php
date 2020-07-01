<?php

use App\Doctor;
use App\Reservation;
use Illuminate\Database\Seeder;

class ReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        factory(App\Reservation::class, 5)->create()->each(function ($reservation){

            $doctors = Doctor::all()->random();
            $reservation->doctors()->attach($doctors);

        });
    }
}
