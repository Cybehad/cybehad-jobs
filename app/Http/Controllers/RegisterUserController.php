<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Ramsey\Uuid\Uuid;

class RegisterUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('auth.register');
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
        $request = $request->validate([
            'username' => 'required|string|unique:users,username',
            'email' => 'required|string|email|unique:users,email',
            'password' => 'required|min:8|confirmed',
            'file' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $user = User::create([
            'username' => $request['username'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'identifier' => Uuid::uuid4()->toString()
        ]);
        if (request()->hasFile('file')) {
            $user->profile()->create([
                'photo' => request('file')->storePublicly('users', 'public'),
                'identifier' => Uuid::uuid4()->toString()
            ]);
        } else {
            $user->profile()->create([
                'identifier' => Uuid::uuid4()->toString(),
            ]);
        }
        Auth::login($user);
        session()->flash('success', 'You have been registered successfully!');
        return redirect()->route('home');
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
