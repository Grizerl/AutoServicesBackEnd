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
        $post = Post::all();

        $client = Client::all()->map(function ($item) {
            $item->formatted_date = $item->created_at->format('Y-m-d');
            return $item;
        });

        $members = Members::all();

        if ($post->isEmpty() || $client->isEmpty() || $members->isEmpty()) {
            return back()->with('error', 'No data found');
        }
        
        return view('auto.index', [
            'post' => $post,
            'client' => $client,
            'members' => $members,
        ]);
    }        

}
