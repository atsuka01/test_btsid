<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shopping;
use App\StockShopping;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
        
        $stock = \DB::table('stock_shoppings')
            ->join('shoppings', 'shoppings.id', '=', 'stock_shoppings.id_shopping')
           
        ->sum('stock');
        
      $data['stock'] = $stock;
        return view('home', $data);
    }
}
