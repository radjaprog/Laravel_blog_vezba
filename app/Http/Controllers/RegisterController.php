<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\CreateUserRequest;

class RegisterController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest');
    }

    public function create()
    {
        return view('auth.register');
    }

    public function store(CreateUserRequest $request)
    {
        $validated = $request->validated();
        $user = new User;

        $user->name = $validated['name'];
        $user->email = $validated['email'];
        $user->password = bcrypt($validated['password']);

        $user->save();

        // objasnjenje za sesije:
        // $session = ['flash' => [
        //  'message' = 'Registration is successfull   
        //       ]]

        auth()->login($user);
        session()->flash('message', 'Registration is successful');

        return redirect('/posts');
    }
}
