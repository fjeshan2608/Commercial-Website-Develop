<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Stock;
use App\Models\Stockdetail;

class StockController extends Controller
{
    public function save(Request $req){
        $product = Product::find($req->product_id);
        $now_stock = $product->in_stock;
        $new_stock =  $now_stock + $req->qty;
        $product->in_stock = $new_stock;
        $product->save();

        $stock = Stock::where('product_id',$req->product_id)->first();
        $now_stock = $stock->qty;
        $new_stock =  $now_stock + $req->qty;
        $stock->qty = $new_stock;
        $stock->save();

        $id = $stock->stock_id;

        $stockdetail = new Stockdetail();
        $stockdetail->stock_id = $id;
        $stockdetail->qty = $req->qty;
        $stockdetail->added_on = date('d-m-Y');
        $stockdetail->added_month = date('F');
        $stockdetail->added_year = date('Y');
        $stockdetail->save();

        if($stockdetail){
            $notification = array(
                'message' => 'Stock Added Successfully',
                'alert-type' => 'success'
            );
        }
        else{
            $notification = array(
                'message' => 'Failed To Add!!',
                'alert-type' => 'error'
            );
        }
        return redirect()->back()->with($notification);

    }
}
