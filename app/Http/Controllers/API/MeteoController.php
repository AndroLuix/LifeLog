<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MeteoController extends Controller
{
    public function getMeteoData(){
        $response = Http::get("https://api.open-meteo.com/v1/forecast",[
            'latitude' => 52.52,
            'longitude' => 13.41,
            'current' => 'temperature_2m,wind_speed_10m',
            'hourly' => 'temperature_2m,relative_humidity_2m,wind_speed_10m'
            ]);

            $meteoData = $response->json();
            dd($meteoData);

            return response()->json($meteoData);
    }
}
