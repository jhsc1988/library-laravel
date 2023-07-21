<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    // Show All Listings
    public function index()
    {
        return view('listings.index', [
            'listings' => Listing::latest()->paginate(6)

        ]);
    }
}
