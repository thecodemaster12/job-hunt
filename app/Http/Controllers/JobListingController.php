<?php

namespace App\Http\Controllers;

use App\Models\JobListing;
use App\Models\Organization;
use Illuminate\Http\Request;

class JobListingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jobs = JobListing::latest()->paginate(10);
        return view('jobs.index', compact('jobs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $orgs = Organization::all();
        return view('jobs.create', compact('orgs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $job = new JobListing();
        $job->title = $request->title;
        $job->body = $request->body;
        $job->address = $request->address;
        $job->organization_id = $request->organization_id;
        $job->salary = $request->salary;
        $job->deadline = $request->deadline;
        $job->publish = '0';
        $job->save();
        return redirect()->route('job.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(JobListing $job)
    {
        return view('jobs.show', compact('job'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(JobListing $job)
    {
        $orgs = Organization::all();
        return view('jobs.edit', compact('job', 'orgs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, JobListing $job)
    {
        $job->title = $request->title;
        $job->body = $request->body;
        $job->address = $request->address;
        $job->organization_id = $request->organization_id;
        $job->salary = $request->salary;
        $job->deadline = $request->deadline;
        $job->save();
        return redirect()->route('job.index');
        // dd($request->all());
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(JobListing $jobListing)
    {
        //
    }
    
    public function publish(JobListing $job) {
        if ($job->publish == '1') {
            $job->publish = 0;
            $job->save();
        }
        else{
            $job->publish = 1;
            $job->save();
        }
        return redirect()->route('job.index');
    }
}
