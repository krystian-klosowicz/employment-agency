<?php

namespace App\Http\Controllers;

use App\Models\Job_category;
use Illuminate\Support\Facades\DB;
use App\Models\Job;

use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index()
    {
        $jobs = Job::paginate(10);
        $categories = Job_category::all();
        return view('index', ['jobs' => $jobs], ['categories' => $categories]);
    }

    public function search(Request $request)
    {
        $name = $request->input('name');
        $job_category = $request->input('job_category');
        if ($name == null) {
            $jobs = Job::where('job_category_id', 'LIKE', "%{$job_category}%")
                ->paginate(10);
        } else {
            $jobs = Job::where('name', 'LIKE', "%{$name}%")
                ->where('job_category_id', 'LIKE', "%{$job_category}%")
                ->paginate(10);
        }


        $categories = Job_category::all();
        return view('index', ['jobs' => $jobs], ['categories' => $categories]);
    }

    public function show($id = null)
    {
        if ($id == null) return view('jobs.details', ['id' => "Status 404"]);
        $job = Job::find($id);
        return view('jobs.details', ['job' => $job]);
    }

    public function showAllOffers()
    {
        $joboffers = Job::paginate(10);
        return view('admin.alljobs', ['offers' => $joboffers]);
    }

    public function delete(Job $job)
    {
        $job->delete();
        return back();
    }

    public function create()
    {
        $categories = Job_category::all();
        return view('admin.create', ['categories' => $categories]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'location' => 'required',
            'company' => 'required',
            'salary' => 'required|regex:/^[0-9]+$/|min:3',
            'tel' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:9',
            'email' => 'required|email',
            'job_category_id' => 'required'
        ]);
        $job = new Job([
            'name' => $request->name,
            'description' => $request->description,
            'company' => $request->company,
            'salary' => $request->salary,
            'location' => $request->location,
            'job_category_id' => $request->job_category_id,
            'email' => $request->email,
            'tel' => $request->tel,
        ]);
        $job->save();
        return redirect(route('all.offers'));
    }

    public function edit(Job $job)
    {
        $categories = Job_category::all();
        return view('admin.edit', ['categories' => $categories, 'job' => $job]);
    }

    public function update(Request $request, Job $job)
    {
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'location' => 'required',
            'company' => 'required',
            'salary' => 'required|regex:/^[0-9]+$/|min:3',
            'tel' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:9',
            'email' => 'required|email',
            'job_category_id' => 'required'
        ]);
        $job->fill($request->all());
        $job->updateOrFail();

        return redirect(route('all.offers'));
    }
}
