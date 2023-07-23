<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{

    public function index()
    {
        $reservations = Reservation::with('user', 'listing')->get();
        return view('reservations.index', compact('reservations'));
    }

    public function reserve(Request $request, Listing $listing)
    {
        $user = auth()->user();
        if ($user->reservations->contains($listing)) {
            return redirect()->back()->with('message', 'Knjiga je već rezervirana.');
        }
        $availableCopies = $listing->amount - $listing->reservations->count();
        if ($availableCopies <= 0) {
            return redirect()->back()->with('message', 'Nema više knjiga dostupnih za rezervaciju.');
        }
        $user->reservations()->attach($listing->id);
        return redirect()->back()->with('message', 'Knjiga je rezervirana!');
    }

    public function myReservations()
    {
        $user = Auth::user();
        $reservations = Reservation::with('listing')->where('user_id', $user->id)->get();
        return view('reservations.my-reservations', compact('reservations'));
    }
    public function destroy(Reservation $reservation)
    {
        $reservation->delete();
        return redirect()->back()->with('message', 'Rezervacija obrisana.');
    }
}
