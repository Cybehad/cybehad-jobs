<?php

namespace App\Http\Controllers;

use App\Models\Employer;
use App\Http\Requests\StoreEmployerRequest;
use App\Http\Requests\UpdateEmployerRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Ramsey\Uuid\Uuid;

class EmployerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('employer.index');
    }
    public function create()
    {
        return view('employer.create');
    }
    public function store(StoreEmployerRequest $request)
    {
        Auth::user()->employer()->create([
            'name' => $request['name'],
            'email' => $request['email'],
            'phone_number' => $request['tel'],
            'logo' => request('file')->store('employers', 'public'),
            'website' => $request['url'],
            'location' => $request['location'],
            'identifier' => Uuid::uuid4()->toString(),
        ]);
        return redirect()->route('employers.home', [Auth::user()->employer->identifier])->with('success', 'Employer profile has been created.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Employer $employer)
    {
        return view('employer.show', compact('employer'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employer $employer)
    {
        return view('employer.edit', compact('employer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEmployerRequest $request, Employer $employer)
    {
        $employer->update([
            'name' => $request['name'],
            'email' => $request['email'],
            'phone_number' => $request['tel'],
            'website' => $request['url'],
            'location' => $request['location'],
        ]);
        if ($request->hasFile('file')) {
            File::delete(public_path('storage/' . $employer->logo));
            $employer->update(['logo' => request('file')->store('employers', 'public')]);
        }
        return redirect()->route('employers.home', [$employer->identifier])
            ->with('success', 'Employer profile has been updated.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employer $employer)
    {
        return 123;
        $employer->delete();
        return redirect('home')->with('success', 'Employer profile has been deleted.');
    }
}
