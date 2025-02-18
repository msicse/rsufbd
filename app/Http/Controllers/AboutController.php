<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function mission()
    {
        return view('pages.about.mission');
    }
}
