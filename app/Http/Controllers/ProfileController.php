<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ProfileController extends Controller
{
    
    public function __construct()
    {
    	$this->middleware('auth');
    }

    public function show(User $user)
    {
    	return view('users.profile', compact('user'));
    }

    public function edit(User $user)
    {
    	return view('users.edit', compact('user'));
    }

    // public function update(User $user, Request $request)
    // {
        
    //     $user->update($request->all());

    //     return redirect('/home', compact('user'))->with('success', 'Your account has been updated!');

    // }
}
