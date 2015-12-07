<?php

namespace App\Http\Controllers;

use App\OrderProduct;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Orders;
use App\Product;

class CheckoutController extends Controller
{

    public function checkout1(Request $request)
    {

        if (session('cart')) {
            $items = $request->session()->get('cart');
        } else {
            $items = [];
        }

        $totalqty = 0;
        $total = 0;
        foreach ( $items as $item ) {
            $totalqty += $item['qty'];
            $total += $item['price']*$item['qty'];
        }

        return view('frontend.checkout.checkout1', compact('items','total'));
    }

    public function address( Request $request) {

//dd($request);
    $order = new Orders();
    $order->sity            = $request->sity;
    $order->province        = $request->province;
    $order->postcode        = $request->postcode;
    $order->street1         = $request->street1;
    $order->street2         = $request->street2;
    $order->firstname       = $request->firstname;
    $order->lastname        = $request->lastname;
    $order->phone           = $request->phone;
    $order->email           = $request->email;
    $order->shipping_method  = $request->shipping_method;
    $order->payment         = $request->payment;
    $order->total_price     = $request->total_order;
//        dd($request->product);
    $order->save();

    $order_id = $order->id;
    $product_id = $request->product;
    foreach ($product_id as $id) {
        $orderproduct = new OrderProduct();
        $orderproduct->orders_id = $order_id;
        $orderproduct->product_id = $id;
        $orderproduct->save();
    }

    $request->session()->forget('cart');

    return redirect()->route('home');
    }

}
