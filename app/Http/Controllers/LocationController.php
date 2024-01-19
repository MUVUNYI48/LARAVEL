<?php

namespace App\Http\Controllers;

use App\Models\siteLocation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function showChooseLocationForm()
    {
        return view('choose_location');
    }

    /**
     * Choose a location and store it in the database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function chooseLocation(Request $request)
    {
        // Validate the form data
       $location=$request->validate([
            'location' => 'required|string',
        ]);

        // Get the authenticated user
        $user = Auth::user();

        // Store the user's selected location in the database
        siteLocation::create([
            'user_id' => $user->id,
            'selected_location' => $request->input('location'),
        ]);

        // Redirect or perform additional actions as needed
        return redirect('/')->with('success', 'Location selected successfully!');
    }
}