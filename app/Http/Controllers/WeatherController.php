<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class WeatherController extends Controller
{
    public function index() {
        
        $cityName = 'Tokyo';
        $apiKey = '10ce5de76e295447fba694a2167d4bc6';
        $url = "http://api.openweathermap.org/data/2.5/forecast?units=metric&lang=ja&q=$cityName&appid=$apiKey";
       
        $method = "GET";

        $client = new Client();

        $response = $client->request($method, $url);

        $data = $response->getBody();
        $data = json_decode($data, true);
        // $weather=JSON.parse(response.getContentText());
        dd($data);
        
        return response()->json($data);
    }
}
