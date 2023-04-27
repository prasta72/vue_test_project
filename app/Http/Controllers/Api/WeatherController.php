<?php

namespace App\Http\Controllers\Api;

use Zttp\Zttp;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WeatherController extends Controller
{
    /**
     * Get the data for the given weather.
     *
     * @param  int  $id
     * @return View
     */
    public function __invoke()
    {
        $apiKey = config('services.darksky.key');
        $lat = request('lat');
        $lng = request('lng');

        $response = Zttp::get("https://api.darksky.net/forecast/$apiKey/$lat,$lng?units=ca");

        return $response->json();
    }
}
