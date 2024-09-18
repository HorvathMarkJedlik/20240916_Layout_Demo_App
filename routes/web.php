<?php

use App\Models\Job;
use Illuminate\Support\Facades\Route;
  
Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contacts', function() {
    return view('contacts');
});

Route::get('/jobs', function() {
    return view('jobs', ['jobs'=> Job::all()]);
});

Route::get('/jobs/{id}', function($id) {
    //dd($id);
    $job = Job::find($id);
    if(!$job){
        return abort(404);
    }
    return view('job', ['job' => $job]);
});