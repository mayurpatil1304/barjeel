<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class knowledge_center extends Controller
{
    public function blog_view()
    {
        return view ('navigation_bar.knowledge_center.blog');
    }

    public function faq_view()
    {
        return view ('navigation_bar.knowledge_center.faq');
    }

    public function webinars_view()
    {
        return view ('navigation_bar.knowledge_center.webinars');
    }
}
