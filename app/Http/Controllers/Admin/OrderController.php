<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Orders;

class OrderController extends Controller
{

    public function index()
    {
        $orders = Orders::all();

        return view('admin.order.index', compact('orders'));
    }



}
