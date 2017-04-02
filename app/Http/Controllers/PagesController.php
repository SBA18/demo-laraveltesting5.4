<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    

    public function aboutMe()
    {
    	return view('pages.aboutMe');
    }

    public function contactMe()
    {
    	return view('pages.contactMe');
    }
}
