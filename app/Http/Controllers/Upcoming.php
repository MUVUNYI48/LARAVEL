<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;


class Upcoming extends Controller
{
    
    public function index()
    {
        $apiEndpoint = 'https://api.themoviedb.org/3/movie/upcoming';
        $apiKey = '1a23a57e0040fdf1ba9ea488474ffa12'; // Replace with your actual API key

        $client = new Client();

        try {
            $response = $client->get($apiEndpoint, [
                'query' => [
                    'api_key' => $apiKey,
                ],
            ]);

            $data = json_decode($response->getBody(), true);

            return view('upcoming', ['upcomingMovies' => $data['results']]);
        } catch (\Exception $e) {
            return view('error', ['error' => 'Error fetching data from the API']);
        }
    }
    
}