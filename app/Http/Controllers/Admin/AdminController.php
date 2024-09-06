<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\repair;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $repair=repair::count();
        return view('admin.index',[
            'repair'=>$repair,
        ]);
    }
}
