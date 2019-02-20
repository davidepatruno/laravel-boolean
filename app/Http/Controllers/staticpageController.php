<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class staticpageController extends Controller
{
    public function aboutUs()
    {
      return view('static_page.about_us');
    }
}
