<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Members;
use App\Models\Post;
use App\Models\repair;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $post=Post::count();
        $client=Client::count();
        $members=Members::count();
        $repair=repair::count();
        return view('admin.index',[
            'post'=>$post,
            'client'=>$client,
            'members'=>$members,
            'repair'=>$repair,
        ]);
    }
}
