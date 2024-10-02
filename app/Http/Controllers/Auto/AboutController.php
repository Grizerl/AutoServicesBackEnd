<?php

namespace App\Http\Controllers\Auto;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        return view('auto.about.vision');
    }
    public function history()
    {
        return view('auto.about.history');
    }
}
