<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class new_investor extends Controller
{
    public function new_investor()
    {
        return view('navigation_bar.new_investor.new_investor_index');
    }
}
