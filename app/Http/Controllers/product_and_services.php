<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class product_and_services extends Controller
{
    public function equites_view()
    {
        return view('navigation_bar.product_and_services.equites');
    }

    public function mutual_fund_view()
    {
        return view('navigation_bar.product_and_services.mutual_fund');
    }

    public function derivatives_view()
    {
        return view('navigation_bar.product_and_services.derivatives');
    }


}
