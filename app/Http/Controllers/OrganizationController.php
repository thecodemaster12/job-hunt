<?php

namespace App\Http\Controllers;

use App\Models\Organization;
use Illuminate\Http\Request;

class OrganizationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orgs = Organization::latest()->get();
        return view('organization.index', compact('orgs'));
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('organization.create');
    }
    
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:organizations|min:6',
            'email' => 'required|unique:organizations|email',
        ]);
        $org = new Organization();
        $org->name = $request->name;
        $org->email = $request->email;
        $org->address = $request->address;
        $org->save();
        return redirect()->route('org.index');
    }
    
    /**
     * Display the specified resource.
     */
    public function show(Organization $id)
    {
        return view('organization.show', compact('id'));
    }
    
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Organization $id)
    {
        return view('organization.edit', compact('id'));
    }
    
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Organization $id)
    {
        $id->name = $request->name;
        $id->email = $request->email;
        $id->address = $request->address;
        $id->save();
        $id = $id->id; 
        return redirect()->route('org.show', compact('id'));
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Organization $id)
    {
        $id->delete();
        return redirect()->route('org.index');
    }
}
