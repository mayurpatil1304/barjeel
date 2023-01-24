<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class login extends Controller
{
    public function login_index()
    {
        return view('navigation_bar\login\login_main');
    }

    public function login_customer()
    {
        return view('navigation_bar\login\customer_care_login');
    }

    public function login_dgcx()
    {
        return view('navigation_bar\login\dgcx_login');
    }

    public function login_trade()
    {
        return view('navigation_bar\login\trade_login');
    }
}
