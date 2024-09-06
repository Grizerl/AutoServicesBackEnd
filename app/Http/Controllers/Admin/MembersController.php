<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Members;
use Illuminate\Http\Request;

class MembersController extends Controller
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
  // MembersController.php

public function edit(Members $member)
{
    return view('admin.members.edit', [
        'member' => $member,
    ]);
}

public function update(Request $request, Members $member)
{
    // Validate the request data
    $request->validate([
        'name' => 'required|string|max:255',
        'img' => 'nullable|string|max:255',
        'role' => 'required|string|max:255',
    ]);

    // Update the member's details
    $member->name = $request->input('name');
    $member->img = $request->input('img');
    $member->role = $request->input('role');
    $member->save();

    // Redirect or return response
    return redirect()->route('members.edit', $member->id)
                     ->with('success', 'Member updated successfully');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Members $member)
    {
        $member->delete();
        return redirect()->route('members.index')->with('success', 'Member deleted successfully');
    }
    
}
