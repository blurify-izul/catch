<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Customers;
use App\Order;
use App\OrderItem;
use App\Product;
use App\ProductBrand;
use App\ShippingAddress;

class DataMasterController extends Controller
{    
    public function __construct()
    {
    }

    public function productBrand()
    {
       
       return view('grid.gridProductBrand');
    }

    public function getProductBrand()
    {
        $result = ProductBrand::All();
        $records = array(
                        "draw" => 0, 
                        "recordsTotal" => count($result), 
                        "recordsFiltered" => count($result), 
                        "data" => $result
                    );        
        return response()->json($records);   
    }

    public function product()
    {
       
       return view('grid.gridProduct');
    }

    public function getProduct()
    {
        $result = Product::with('brand')->get();
        $records = array(
                        "draw" => 0, 
                        "recordsTotal" => count($result), 
                        "recordsFiltered" => count($result), 
                        "data" => $result
                    );        
        return response()->json($records);   
    }

    public function customer()
    {
       
       return view('grid.gridCustomer');
    }

    public function getCustomer()
    {
        $result = Customers::All();
        $records = array(
                        "draw" => 0, 
                        "recordsTotal" => count($result), 
                        "recordsFiltered" => count($result), 
                        "data" => $result
                    );        
        return response()->json($records);   
    }

    public function shippingAddress()
    {
       
       return view('grid.gridShippingAddress');
    }

    public function getShippingAddress()
    {
        $result = ShippingAddress::with('customer')->get();
        $records = array(
                        "draw" => 0, 
                        "recordsTotal" => count($result), 
                        "recordsFiltered" => count($result), 
                        "data" => $result
                    );        
        return response()->json($records);   
    }


    
}
