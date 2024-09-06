<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AdminPanel
{
    public function index()
    {
        $users = Auth::user()->name; 
        return [
            'users'=>$users,
        ];
    }
}