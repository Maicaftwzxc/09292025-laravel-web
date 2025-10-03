<?php

    
use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', function () {
     return view('home');
});

//Route for viewing the job list(index
Route::get('/jobs.index', function ()  {
    $jobs = Job::with('employer')->latest()->paginate(3);
   
    return view('jobs.index', [
        'jobs' => $jobs
    ]);
});

//Route for showing the job creating form
Route::get('/jobs.create', function () {
    return view('jobs.create');
});

//Route for showing a single job
Route::get('/jobs/{id}', function ($id) {
    $job = Job::find($id);
    return view('jobs.show', ['job' => $job]);
});

//Route for storing a job, posting a job
Route::post('/jobs', function () {
    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required'], 
    ]);

    Job::create([
        'title' => request ('title'),
        'salary' => request ('salary'),
        'employer_id' => 1
    ]);

    return redirect('/jobs.index');
});

Route::get('/jobs/{id}/edit', function ($id) {
    $job = Job::find($id);
    return view('jobs.edit', ['job' => $job]);
});


Route::get('/contact', function () {
    return view('contact');
});
