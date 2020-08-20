<?php

namespace App\Http\Controllers;

use App\Listing;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ListingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index()
    {
        $listings = Listing::latest()->paginate(5);
        return view('frontend.listings.index',compact('listings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create()
    {
        return view('frontend.listings.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:191',
            'type' => 'required|max:191',
            'rooms' => 'required|integer',
            'price' => 'required',
            'status' => 'required|max:191',
            'image'  => 'required|max:191',
        ]);

        Listing::create($request->all());

        return redirect()->route('listings.index')
            ->with('success','Listing created successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Listing  $listing
     * @return View
     */
    public function edit(Listing $listing)
    {
        return view('frontend.listings.edit', compact('listing'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Listing  $listing
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Listing $listing)
    {
        $request->validate([
            'name' => 'required|max:191',
            'type' => 'required|max:191',
            'rooms' => 'required|integer',
            'price' => 'required',
            'status' => 'required|max:191',
            'image'  => 'required|max:191',
        ]);

        $listing->update($request->all());

        return redirect()->route('listings.index')
            ->with('success','Listing updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Listing  $listing
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Listing $listing)
    {
        $listing->delete();

        return redirect()->route('listings.index')
            ->with('success','Listing deleted successfully');
    }
}
