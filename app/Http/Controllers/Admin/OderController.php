<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Orders;

class OderController extends Controller
{

    public function index()
    {
        $orders = Orders::all();

        return view('admin.oder.index', compact('orders'));
    }

}
