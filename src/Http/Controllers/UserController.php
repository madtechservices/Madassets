<?php

namespace Madtechservices\MadAssets\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Madtechservices\MadAssets\Models\Campus;
use Madtechservices\MadAssets\Models\User;

class UserController extends Controller
{
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->campuses()->sync($request->input('campuses', []));
        // Other update logic
        return redirect()->back()->with('status', 'User updated successfully!');
    }
}