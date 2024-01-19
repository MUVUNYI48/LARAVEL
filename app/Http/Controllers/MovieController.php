<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;


class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function fetchPopularMovies()
    {
        $apiEndpoint = 'https://api.themoviedb.org/3/movie/popular';
        $apiKey = '1a23a57e0040fdf1ba9ea488474ffa12';

        $client = new Client();

        try {
            $response = $client->get($apiEndpoint, [
                'query' => [
                    'api_key' => $apiKey,
                ],
            ]);

            $data = json_decode($response->getBody(), true);

            return view('popular', ['movies' => $data['results']]);
            //  return view('test', ['movies' => $data['results']]);
        } catch (\Exception $e) {
            return view('error', ['error' => 'Error fetching data from the API']);
        }
    }

    public function upcoming()
    {
        $apiEndpoint1 ='https://api.themoviedb.org/3/movie/upcoming';
        $apiKey1 = '1a23a57e0040fdf1ba9ea488474ffa12';

        $client = new Client();

        try {
            $response1 = $client->get($apiEndpoint1, [
                'query' => [
                    'api_key' => $apiKey1,
                ],
            ]);

            $data1 = json_decode($response1->getBody(), true);

            return view('upcoming', [' $upcomingMovies' => $data1['results']]);
        } catch (\Exception $e) {
            return view('error', ['error' => 'Error fetching data from the API']);
        }
    }
    /**
     * Show the form for creating a new resource.
     */

//this for the movies
public function index()
    {
        // API URLs
      // Fetch top rated movies
      $topRatedMovies = Http::get('https://api.themoviedb.org/3/movie/top_rated', [
        'api_key' => '1a23a57e0040fdf1ba9ea488474ffa12'
    ])->json()['results'];

    // Fetch trending movies
    $trendingMovies = Http::get('https://api.themoviedb.org/3/trending/movie/day', [
        'api_key' => '1a23a57e0040fdf1ba9ea488474ffa12'
    ])->json()['results'];

    return view('movies', compact('topRatedMovies', 'trendingMovies'));
    }

    // private function fetchData($url)
    // {
    //     $response = Http::get($url);
    //     return $response->json()['results'];
    // }

     
    public function create()
    {
        //
    
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        
    }

    /**
     * Display the specified resource.
     */
    public function show(Movie $movie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Movie $movie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Movie $movie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Movie $movie)
    {
        //
    }
}