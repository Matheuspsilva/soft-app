<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ClimaController extends Controller
{
    public function index()
    {
        $response = Http::get('https://api.hgbrasil.com/weather?city_name=Campinas,SP');
        $response = json_decode($response);
        return view('clima.index')->with('response', $response);
    }

}
