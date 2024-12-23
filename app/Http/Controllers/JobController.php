<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Http\Requests\StoreJobRequest;
use App\Http\Requests\UpdateJobRequest;
use App\Models\Tag;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Js;
use Ramsey\Uuid\Uuid;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $featuredJobs = Job::with('tags', 'employer')
            ->where('featured', true)
            ->orderBy('created_at', 'desc')
            ->take(6)->get();
        $jobs = Job::with('tags', 'employer')
            ->orderBy('created_at', 'desc')
            ->paginate(12);
        $tags = Tag::all();
        return view('jobs.index', ['featuredJobs' => $featuredJobs, 'jobs' => $jobs, 'tags' => $tags]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Application|Factory|View
    {
        return view('jobs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreJobRequest $request): RedirectResponse
    {
        $request['featured'] = $request->has('featured');
        $request['identifier'] = Uuid::uuid4()->toString();

//        $job = Auth::user()
//            ->employer
//            ->jobs()
//            ->create(Arr::except($request, 'tags'));
//        dd(Auth::user()->employer);
        $request['employer_id'] = Auth::user()->employer->id;
        $job = Job::create($request->all());
        if ($request['tags'] ?? false) {
            foreach (explode(',', $request['tags']) as $tag) {
                $job->tag($tag);
            }
        }
        return redirect(route('home'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Job $job)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Job $job)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateJobRequest $request, Job $job)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Job $job)
    {
        //
    }
}
