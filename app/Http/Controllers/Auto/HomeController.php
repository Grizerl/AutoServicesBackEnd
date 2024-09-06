<?php

namespace App\Http\Controllers\Auto;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {   $client=Client::all();
        return view('auto.index',[
            'client'=>$client,
        ]);
    }

}
