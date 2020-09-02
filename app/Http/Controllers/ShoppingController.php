<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shopping;
use App\StockShopping;

class ShoppingController extends Controller
{
    public function index()
    {
        $data['shopping'] = Shopping::all();
        return view('shopping.index', $data);
    }
    public function create()
    {
        return view('shopping.create');
    }
    public function store(Request $req)
    {
        $data = new Shopping;
        $data->name = $req->name;
        $data->save();
        return redirect('shopping');
    }
    public function edit($id)
    {
        $data['shopping'] = Shopping::find($id);
        return view('shopping.edit', $data);
    }
    public function update(Request $req, $id)
    {
      $data  = $req->all();
      $shopping = Shopping::find($id);
      $shopping->update($data);
       return redirect('home');
    }
    public function destroy($id)
    {
        $data = Shopping::find($id);
        $data->delete();
        return redirect('shopping');
    }
    public function stock($id)
    {
        $stock = \DB::table('stock_shoppings')
                        ->join('shoppings', 'shoppings.id', '=', 'stock_shoppings.id_shopping')
                        ->where('id_shopping', $id)
                       ->get();
        $data['stock'] = $stock;
       
        
        $data['shopping'] = Shopping::find($id);
        return view('shopping.stock', $data);
    }
    public function stockstore(Request $req)
    {
        $data = new StockShopping;
        $data->id_shopping = $req->id_shopping;
        $data->stock = $req->stock;
        $data->save();
        return back();
    }
}
