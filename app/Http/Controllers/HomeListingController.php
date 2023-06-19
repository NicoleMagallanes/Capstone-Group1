<?php

namespace App\Http\Controllers;

use App\Models\HomeListing;
use App\Http\Requests\StoreHomeListingRequest;
use App\Http\Requests\UpdateHomeListingRequest;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\Redirect;
use App\Http\Controllers\Request;
use App\Http\Controllers\ModelsImageUpload;
use App\Http\Controllers\Auth;

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
        // Retrieve the validated data from the request
        $validatedData = $request->validated();

        // Create a new Article instance with the validated data
        $homeListing = new HomeListing($validatedData);

        // Save the article
        $homeListing->save();

        // Redirect to the appropriate page (modify the route as per your requirements)
        return redirect()->route('home-listing.index')->with('status', 'Home Listing has been created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(HomeListing $homeListing)
    {
        return $this->reserve($homeListing);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(HomeListing $homeListing)
    {
        $error = [];
        info($homeListing);
        if ($homeListing->canEditRecord('home-listing.index')) {
            return view('console/home-listing/edit', compact('error', 'homeListing'));
        }

        abort(401);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateHomeListingRequest $request, HomeListing $homeListing)
    {
        if ($homeListing->canEditRecord('home-listing.index')) {
            //
        }

        abort(401);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(HomeListing $homeListing)
    {
        if ($homeListing->canDeleteRecord('home-listing.index')) {
            $homeListing->delete();

            return Redirect::route('home-listing.index')->with('status', 'Record has been deleted.');
        }

        abort(401);
    }
    public function fileCreate()
    {
        return view('imageupload');
    }
    public function fileStore(Request $request)
    {
        $image = $request->file('file');
        $imageName = $image->getClientOriginalName();
        $image->move(public_path('images'), $imageName);

        $imageUpload = new ModelsImageUpload();
        $imageUpload->filename = $imageName;
        $imageUpload->created_by = Auth::user()->id;
        $imageUpload->save();
        return response()->json(['success' => $imageName]);
    }
    public function fileDestroy(Request $request)
    {
        $filename =  $request->get('filename');
        ModelsImageUpload::where('filename', $filename)->delete();
        $path = public_path() . '/images/' . $filename;
        if (file_exists($path)) {
            unlink($path);
        }
        return $filename;
    }
    public function reserve(HomeListing $homeListing)
    {
        $error = [];
        info($homeListing);
        if ($homeListing->canReserve('home-listing.index')) {
            return view('console/home-listing/reserve', compact('error', 'homeListing'));
        }

        abort(401);
    }

}
