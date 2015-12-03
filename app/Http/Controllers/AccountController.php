<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AccountController extends Controller
{
    protected function create($data)
    {

    }

    public function index() {
        return view('account.login');
    }

}
