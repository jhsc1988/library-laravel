<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ListingController extends Controller
{
    // Show All Listings
    public function index()
    {
        return view('listings.index', [
            'listings' => Listing::latest()->filter(request(['search']))->paginate(6)

        ]);
    }

    // Single Listing
    public function show(Listing $listing)
    {
        $reservationsCount = $listing->reservations()->count();
        $availableAmount = max(0, $listing->amount - $reservationsCount);

        return view('listings.show', [
            'listing' => $listing,
            'availableAmount' => $availableAmount,
        ]);
    }

    // Show Create Form
    public function create()
    {
        return view('listings.create');
    }

    //Store Listing Data
    public function store(Request $request)
    {

        $formFields = $request->validate([
            'title' => ['required', Rule::unique('listings', 'title')],
            'author' => 'required',
            'publisher' => 'required',
            'language' => 'required',
            'annotation' => 'required',
            'isbn' => 'required',
            'amount' => 'required',
            'cover' => 'required',
        ]);

        // dirty fix
        if ($request->hasFile('cover')) {
            $filePath = $request->file('cover')->store('public/covers');
            $formFields['cover'] = 'storage/' . substr($filePath, 7); // Remove 'public/' from the path
        }

        Listing::create($formFields);

        return redirect('/')->with('message', 'Knjiga je kreirana!');
    }

    //Show Edit Form
    public function edit(Listing $listing)
    {
        return view('listings.edit', ['listing' => $listing]);
    }

    // Update Listing Data
    public function update(Request $request, Listing $listing)
    {
        if (auth()->user()->role !== 'admin') {
            abort(403, 'Unauthorized Action');
        }

        $formFields = $request->validate([
            'title' => 'required',
            'author' => 'required',
            'publisher' => 'required',
            'language' => 'required',
            'annotation' => 'required',
            'isbn' => 'required',
            'amount' => 'required',
        ]);

        if ($request->hasFile('cover')) {
            $formFields['cover'] = $request->file('cover')->store('covers', 'public');
        }

        $listing->update($formFields);

        return back()->with('message', 'Knjiga je promijenjena!');
    }

    // Delete Listing
    public function destroy(Listing $listing)
    {
        if (auth()->user()->role !== 'admin') {
            abort(403, 'Unauthorized Action');
        }

        $listing->delete();
        return redirect('/')->with('message', 'Knjiga je obrisana!');
    }
}
