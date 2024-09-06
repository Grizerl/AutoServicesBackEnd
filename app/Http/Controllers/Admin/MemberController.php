<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Members;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $members=Members::all();
        return view('admin.members.index',[
            'members'=>$members,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.members.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $members= new Members();
        $members->name=$request->name;
        $members->img=$request->img;
        $members->role=$request->role;
        $members->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Members $members)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Members $members)
{
    return view('admin.members.edit',[
        'members' => $members,
    ]);
}
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Members $members)
    {
        $members->name=$request->name;
        $members->img=$request->img;
        $members->role=$request->role;
        $members->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Members $members)
    {
        $members->delete();
        return redirect()->back();
    }
}
