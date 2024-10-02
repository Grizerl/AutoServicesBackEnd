<?php

namespace App\Http\Controllers\Auto;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('auto.contact.contacts');
    }
}
