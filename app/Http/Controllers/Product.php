<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Product extends Controller
{
    public function single($id)
    {
        $products = DB::table('products')
            ->where('id', $id)
            ->first();

            $size = $products->size;
    	$product_size = explode(',', $size);	
        return view('product_details', compact('products','product_size'));
    }

    public function store(Request $request)
    {
        Order::insert([
            'size' => $request->size,
   
            'created_at' => Carbon::now(),
        ]);
        return Redirect()->back()->with('success', 'Order Size Added');
    }
}
