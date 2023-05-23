<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('users.index')->with('users', User::all());
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
        $role = 'vehicle';
        User::create([
            "role" => $role,
            "name" => request('name'),
            "email" => request('email'),
            "national_id" => request('national_id'),
            "dob" => request('dob'),
            ]);

        return redirect()->back()->with('success', 'Driver Successfully added.');

//        session()->flash('success', 'Driver Successfully added.');
//
//        return view('users.index')->with('users', User::all());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = \DB::table('users')->where('id', $id)->first();
        $vehicles = \DB::table('vehicles')->where('id', $id)->get();

        return view('users.show')
            ->with('user', $user)
            ->with('vehicles', $vehicles);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
