<?php

namespace App\Http\Controllers;
use Rs\JsonLines; 
use Illuminate\Http\Request;
use App\Helpers\Stream;
use App\ShippingAddress;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        Stream::dataSync("https://s3-ap-southeast-2.amazonaws.com/catch-code-challenge/challenge-1-in.jsonl");
        return view('welcome');
        
    }

    public function showMap($customerId) {
        $shippingAddress = ShippingAddress::find($customerId);
        $url = "https://maps.googleapis.com/maps/api/geocode/json?address=".$shippingAddress->postcode."&key=AIzaSyBndZ6dcgB5okrA7U2CmaRhUmNvsYRgbOo&sensor=false";
        $details = file_get_contents($url);
        $result = json_decode($details,true);
        $lat = 0;
        $lon = 0;
        if($result['status'] !== "ZERO_RESULTS") {
            $lat = $result['results'][0]['geometry']['location']['lat'];
            $lon = $result['results'][0]['geometry']['location']['lng'];
        }
        return view('showMap', compact("shippingAddress", "lat", "lon")); 
    }

}
