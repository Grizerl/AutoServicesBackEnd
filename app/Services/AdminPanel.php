<?php

namespace App\Services;

use App\Models\Client;
use App\Models\Members;
use App\Models\repair;
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
    public function show()
    {
        $amount=Client::count()+Members::count()+repair::count();
        $client=Client::count();
        $members=Members::count();
        $repair=repair::count();
        return [
            'amount'=>$amount,
            'client'=>$client,
            'members'=>$members,
            'repair'=>$repair,
        ];
    }
}