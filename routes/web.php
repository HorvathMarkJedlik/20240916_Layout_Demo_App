<?php

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
    $listOfJobs = [
    [
        'title' => 'director',
        'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eos eveniet eum quibusdam at magni doloremque necessitatibus, ea dicta est ipsum voluptatem blanditiis tempora atque! Corporis vel nesciunt itaque vitae aspernatur!',
        'location' => 'New York'
        ],
        [
        'title' => 'programmer',
        'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eos eveniet eum quibusdam at magni doloremque necessitatibus, ea dicta est ipsum voluptatem blanditiis tempora atque! Corporis vel nesciunt itaque vitae aspernatur!',
        'location' => 'London'
        ], 
        [
        'title' => 'project manager',
        'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eos eveniet eum quibusdam at magni doloremque necessitatibus, ea dicta est ipsum voluptatem blanditiis tempora atque! Corporis vel nesciunt itaque vitae aspernatur!',
        'location' => 'At home'
        ]   
    ];
    
    return view('jobs', ['jobs'=> $listOfJobs]);
});