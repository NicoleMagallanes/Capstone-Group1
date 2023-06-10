<?php

namespace App\Http\Controllers;

use App\Models\HomeListing;
use App\Http\Requests\StoreHomeListingRequest;
use App\Http\Requests\UpdateHomeListingRequest;
use Illuminate\Support\Facades\Http;

class HomeListingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $homeListingQuery = HomeListing::where('id', '>', 0);
        $homeListing = $homeListingQuery->paginate(config('constants.RECORD_PER_PAGE'));

        $response = Http::get('https://api.unsplash.com/photos/random', [
            'count' => $homeListing->count(), // Number of random photos to fetch, same as the number of articles
            'client_id' => 'NDFwFidV0oPEUM7Kw5mjCRZ-rU9Pw4hlsRc50dQyies', // Replace with your actual Unsplash Access Key
            'query' => 'hotel',
        ]);

        $photos = $response->json();

        return view('console/home-listing/index', compact('homeListing', 'photos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreHomeListingRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(HomeListing $homeListing)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(HomeListing $homeListing)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateHomeListingRequest $request, HomeListing $homeListing)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(HomeListing $homeListing)
    {
        //
    }
}
