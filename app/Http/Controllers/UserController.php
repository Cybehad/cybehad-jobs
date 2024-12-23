<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('auth.login');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    public function login(Request $request): RedirectResponse
    {
        $request = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string|min:8|max:20',
        ]);
        if (!Auth::attempt($request)) {
            return redirect()->back()->withErrors(['email' => 'Login credentials not valid']);
        }
        session()->regenerate();
        return redirect()->route('home')->with('success', 'You are logged in');
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
    public function destroy()
    {
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Login first to access this page');
        }
        session()->invalidate();
        session()->regenerate();
        return redirect()->route('home')->with('success', 'You are logged out');
    }
}
