<?php

    
use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', function () {
     return view('home');
});

Route::get('/jobs.index', function ()  {
    $jobs = Job::with('employer')->paginate(10);
   
    return view('jobs.index', [
        'jobs' => $jobs
    ]);
});

Route::get('/jobs/create', function () {
    return view('jobs.create');
});

Route::get('/jobs/{id}', function ($id) {
    $job = Job::find($id);
       
    return view('jobs.show', ['job' => $job]);
});

Route::get('/contact', function () {
    return view('contact');
});

//jobs.blade.php was changed to index.blade.php
//job.blade.php was changed to show.blade.php