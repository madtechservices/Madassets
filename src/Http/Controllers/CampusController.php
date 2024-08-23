<?php

namespace Madtechservices\MadAssets\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Madtechservices\MadAssets\Models\Campus;

class CampusController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        Campus::create(['name' => $request->name]);

        return redirect()->back()->with('success', 'Campus added successfully!');
    }

    public function index()
    {
        $campuses = Campus::all();
        // return view('madassets.campuses.index', compact('campuses'));
        return view('campuses.index', compact('campuses'));
    }


}
