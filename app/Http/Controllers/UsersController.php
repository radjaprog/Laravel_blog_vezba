<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show($id)
    {
        $user = User::with('posts')->find($id);

        return view('users.show', compact('user'));
    }
}

// <!-- Drugi Laravelov projekat Blog - vezbe -->
