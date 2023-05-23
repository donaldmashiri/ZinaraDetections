<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VideoDetectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vehicles = Vehicle::where('user_id', Auth::user()->id)->get();
        return view('videodetects.index', compact('vehicles'));

//        return view('videodetects.index');
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
//        $cmd = 'start cmd /k "python main.py"';
//        exec($cmd);
//        return "opened ";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'upload_video' => 'required|file|mimes:mp4,mov|max:5000', // Adjust the validation rules as needed
        ]);

        $file = $request->input('file');

        $cmd = 'start cmd /k "python main.py"';
        exec($cmd);
        return redirect()->back()->with('success', 'Camera View detection Uploaded.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
