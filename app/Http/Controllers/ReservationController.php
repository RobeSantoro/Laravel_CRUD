<?php

namespace App\Http\Controllers;

use App\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ReservationRequest;
use App\User;

class ReservationController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $reservations = Reservation::all();
        /* dd($reservation); */
        return view('reservations.index', compact('reservations'));
    }

    public function create()
    {
        return view('reservations.create');
    }

    public function store(ReservationRequest $request)
    {
        $reservation = Reservation::create($request->validated());
        $reservation->user_id = Auth::id();
        $reservation->save();
        return redirect()->back()->with('message','Complimenti hai prenotato il tuo appuntamento con successo');
    }

    public function show(Reservation $reservation)
    {
        $reservation = Reservation::find($reservation);
        return view('reservations.show',compact('reservation'));
    }

    public function edit(Reservation $reservation)
    {
        $reservation = Reservation::find($reservation)->first();
        return view('reservations.edit', compact('reservation'));
    }

    public function update(ReservationRequest $request, Reservation $reservation)
    {
        $reservation->update($request->validated());
        return redirect()->back()->with('message','Complimenti hai modificato la prenotazione');
    }

    public function destroy(Reservation $reservation)
    {
        $reservation->delete('user_id');
        return redirect()->back()->with('message', 'Complimenti hai cancellato la prenotazione');
    }
}
