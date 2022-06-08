<?php

namespace App\Http\Controllers;

use App\Models\stock_in;
use App\Models\stock_out;
use App\Models\products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class stock extends Controller
{

  public function add(){
   
    $products = products::all();

    return view('add',  compact('products'));
  }

  public function store(Request $request)
  {
    $request->validate([
      'product_id' => 'required',
      'date'      => 'required',
      'qty'     => 'required'
    ]);
    $data = products::where('id', $request->product_id)->first();
    $product_qty = $data['stock_available'];
    $product = $data['product'];
    $data_in = new stock_in();
    $data_in->product_id = $request->product_id;
    $data_in->product = $product;
    $data_in->date = $request->date;
    $data_in->in_qty = $request->qty;
    $data_in->save();
    if($data_in){
      $ttl_qty = $product_qty + $request->qty ;
      $products = products::find($request->product_id);
      $products->stock_available = $ttl_qty;
      $products->save();
      return back()->with('success', "Successfully Added!");
    } else{
      return back()->with('error', "Failed Added!");
    }
  }

  
  public function out(){
   
    $products = products::all();

    return view('out',  compact('products'));
  }


  public function release(Request $request)
  {
    $request->validate([
      'product_id' => 'required',
      'date'     => 'required',
      'qty'     => 'required'
    ]);
    $data = products::where('id', $request->product_id)->first();
    $product_qty = $data['stock_available'];
    $product = $data['product'];

    if($product_qty >= $request->qty){
      $data_out = new stock_out();
      $data_out->product_id = $request->product_id;
      $data_out->product = $product;
      $data_out->date = $request->date;
      $data_out->out_qty = $request->qty;
      $data_out->save();
        if($data_out){
          $ttl_qty = $product_qty - $request->qty ;
          $products = products::find($request->product_id);
          $products->stock_available = $ttl_qty;
          $products->save();
          return back()->with('success', "Successfully Soled!");
      }else{
        return back()->with('error', "Failed Soled!");
      }
    }else{
      return back()->with('error', "Quantity heigher than total stock!");
    }
  }

  // public function release(Request $request)
  // {
  //   $request->validate([
  //     'product' => 'required',
  //     'out'      => 'required',
  //     'qty'     => 'required'
  //   ]);


  //   $stockOut          = new stock_out();
  //   $product = $request->product;
  

  //   $stockIn = stock_in::select()
  //               ->where("stock_ins.product", $product)
  //               ->sum('stock_ins.qty');
  //   if (!empty($stockIn)) {
     
  //       if ($request->qty <= $stockIn) {
  //           $stockOut->product = $request->product;
  //           $stockOut->date     = $request->out;
  //           $stockOut->Qty     = $request->qty;
  //           $stockOut->save();
  //           if($stockOut){
  //               return back()->with('success', "Successfully Added!");
  //           }else{
  //               return back()->with('error', "insert Failed");
  //           }
            
  //       } else {
  //       return back()->with('error', "Quantity is heigher than total product quantity");
  //     }
  //   } else {
  //     return back()->with('error', "No Product there..");
  //   }
  // }

  public function report_list(Request $request)
  {
    $request->validate([
      'from_date' => 'required',
      'to_date' => 'required'
    ]);
    $from =$request->from_date;
    $to = $request->to_date;
    $report_in = stock_in::whereBetween('date', [$from, $to])
              ->get();
    $report_out = stock_out::whereBetween('date', [$from, $to])
    ->get();

   return view('list', compact('report_in', 'report_out'));
  }
}
