<?php

namespace App\Http\Controllers\Auto;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('auto.pages.offer');
    }
    public function plan()
    {
        return view('auto.pages.plan');
    }
    public function partners()
    {
        return view('auto.pages.partners');
    }
}
