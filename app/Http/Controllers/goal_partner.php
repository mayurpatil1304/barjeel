<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class goal_partner extends Controller
{
    public function sip_calculator()
    {
        return  view('navigation_bar.goal_partner.sip_calculator');
    }

    public function goal_calculator()
    {
        return  view('navigation_bar.goal_partner.goal_calculator');
    }
}
