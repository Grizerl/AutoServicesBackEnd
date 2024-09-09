<?php

namespace App\Http\Controllers\Auto;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Members;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {   
        $post=Post::all();
        $client=Client::all();
        $members=Members::all();
        return view('auto.index',[
            'post'=>$post,
            'client'=>$client,
            'members'=>$members,
        ]);
    }

}
