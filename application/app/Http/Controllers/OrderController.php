<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{    
    public function __construct()
    {
    }

    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
       
       return view('grid.gridOrder');
    }

    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function getOrderData()
    {
        $sqlStmt = "SELECT `order`.`id` AS order_id, `order`.`order_date`, SUM(`order_items`.`unit_price` * `order_items`.`quantity`) AS total_order_value,
                    FORMAT((SUM(`order_items`.`unit_price` * `order_items`.`quantity`) / COUNT(`order_items`.`product_id`)) / SUM(`order_items`.`quantity`), 2) AS average_unit_price,
                    COUNT(DISTINCT(`order_items`.`product_id`)) AS distinct_unit_count, SUM(`order_items`.`quantity`) AS total_units_count,
                    `shipping_address`.`state` AS customer_state
                    FROM `order`
                    JOIN customers ON customers.id=`order`.`customer_id`
                    JOIN order_items ON order_items.`order_id`=`order`.`id`
                    JOIN `shipping_address` ON `shipping_address`.`customer_id`=customers.`id`
                    GROUP BY `order`.`id`
                    ORDER BY `order`.`id` ASC"; 

        $result = DB::select( DB::raw($sqlStmt));
        
        $records = array(
                        "draw" => 0, 
                        "recordsTotal" => count($result), 
                        "recordsFiltered" => count($result), 
                        "data" => $result
                    );        
        return response()->json($records);   
    }

    
}
