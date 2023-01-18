<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Footer_Links extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {

    }
    public function about_us()
    {
        return view('footer-links.about-us');
    }
    public function career()
    {
        return view('footer-links.career');
    }
    public function awards()
    {
        return view('footer-links.awards');
    }
    public function press_release()
    {
        return view('footer-links.press-release');
    }
    public function privacy_policy()
    {
        return view('footer-links.privacy_policy');
    }
    public function disclaimer()
    {
        return view('footer-links.disclaimer');
    }
    public function archives_market_digest()
    {
        return view('footer-links.archives-market-digest');
    }
    public function investor_grievance()
    {
        return view('footer-links.investor_grievance');
    }
}
