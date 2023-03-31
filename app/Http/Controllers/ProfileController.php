<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Profiler\Profile;

class ProfileController extends Controller
{
    public function index() 
    {
        $profile = User::all();
        return view('profile', compact('profile'));
    } 

    public function show($id)
    {
        $user = User::where('id', $id)->first();
        return view('profile', compact('user'));
    }
}
