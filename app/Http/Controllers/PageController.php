<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class PageController extends Controller
{
    // Show All Listings
    public function index()
    {
        return view('pages.index', [
        ]);
    }
}
