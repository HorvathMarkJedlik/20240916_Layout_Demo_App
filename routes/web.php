<?php

use Illuminate\Contracts\Queue\Job;
use Illuminate\Support\Facades\Route;

$listOfJobs = [
    [
        'id' => 1,
        'title' => 'director',
        'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eos eveniet eum quibusdam at magni doloremque necessitatibus, ea dicta est ipsum voluptatem blanditiis tempora atque! Corporis vel nesciunt itaque vitae aspernatur!',
        'location' => 'New York'
        ],
        [
        'id' => 2,
        'title' => 'programmer',
        'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eos eveniet eum quibusdam at magni doloremque necessitatibus, ea dicta est ipsum voluptatem blanditiis tempora atque! Corporis vel nesciunt itaque vitae aspernatur!',
        'location' => 'London'
        ], 
        [
        'id' => 3,
        'title' => 'project manager',
        'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eos eveniet eum quibusdam at magni doloremque necessitatibus, ea dicta est ipsum voluptatem blanditiis tempora atque! Corporis vel nesciunt itaque vitae aspernatur!',
        'location' => 'At home'
    ]   
];
    
function searchJobById($id, $jobs){
    foreach ($jobs as $job){
        if($job['id'] == $id)
        return $job;
    }
    return null;
}

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contacts', function() {
    return view('contacts');
});

Route::get('/jobs', function() use($listOfJobs) {
    return view('jobs', ['jobs'=> $listOfJobs]);
});

Route::get('/jobs/{id}', function($id) use($listOfJobs) {
    //dd($id);
    $job = searchJobById($id, $listOfJobs);
    if(!$job){
        return abort(404);
    }
    return view('job', ['job' => $job]);
});