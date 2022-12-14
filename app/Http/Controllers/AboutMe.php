<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutMe extends Controller
{
    //
    public function getAboutMe()
    {
        return view('admin.aboutme.aboutme');
    }
}
