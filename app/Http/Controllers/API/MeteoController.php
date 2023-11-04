<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MeteoController extends Controller
{
    
    public function getMeteoData(Request $request){

        $latitude = floatval($request->input('latitude'));
        $longitude = floatval($request->input('longitude'));

        // Assicurati che la latitudine e la longitudine siano nel formato corretto
        if ($latitude < -90 || $latitude > 90 || $longitude < -180 || $longitude > 180) {
            return response()->json(['error' => 'Invalid latitude or longitude'], 400);
        }
        $response = Http::get("https://api.open-meteo.com/v1/forecast",[
            'latitude' => $latitude,
            'longitude' => $longitude,
            'current' => 'temperature_2m,wind_speed_10m',
            'hourly' => 'temperature_2m,relative_humidity_2m,wind_speed_10m'
            ]);

            $meteoData = $response->json();

            return response()->json($meteoData);
    }
}
