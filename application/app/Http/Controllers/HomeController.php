<?php

namespace App\Http\Controllers;
use Rs\JsonLines; 
use Illuminate\Http\Request;
use App\Helpers\Stream;
use App\ShippingAddress;
use App\Geolocation;

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
        $geolocation = Geolocation::where('postcode', $shippingAddress->postcode)->where('suburb',  $shippingAddress->suburb)->get();       
        
        $lat = 0;
        $lon = 0;
        if($geolocation) {
            $lat = $geolocation[0]->lat;
            $lon = $geolocation[0]->lon;
        }
        return view('showMap', compact("shippingAddress", "lat", "lon")); 
    }

}
