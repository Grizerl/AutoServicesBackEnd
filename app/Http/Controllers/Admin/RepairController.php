<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\repair;
use Illuminate\Http\Request;

class RepairController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $repair=repair::all();
        return view('admin.repair.index',[
            'repair'=>$repair,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $valid=$request->validate([
            'name'=>['required'],
            'phone'=>['required'],
            'car'=>['required'],
            'comment'=>['required','min:6','max:100']
        ]);
        $repair=new repair();
        $repair->name=$request->name;
        $repair->telephone=$request->phone;
        $repair->car=$request->car;
        $repair->comment=$request->comment;
        $repair->save();
        return redirect()->back();

    }

    /**
     * Display the specified resource.
     */
    public function show(repair $repair)
    {

        return view('admin.repair.view',[
            'repair'=>$repair,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(repair $repair)
    {
        return view('admin.repair.edit',[
            'repair'=>$repair
        ]);
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, repair $repair)
    {
        $repair->name=$request->name;
        $repair->car=$request->car;
        $repair->comment=$request->problem;
        $repair->done=$request->done;
        $repair->price=$request->price;
        $repair->save();
        return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(repair $repair)
    {
        $repair->delete();
        return redirect()->back();
    }
}
