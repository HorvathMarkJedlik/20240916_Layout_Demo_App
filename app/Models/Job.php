<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Job
{
    private static $listOfJobs = [
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

    public static function all(){
        return self::$listOfJobs;
    }


    public static function find($id){
        // foreach (self::$listOfJobs as $job){
        //     if($job['id'] == $id)
        //     return $job;
        // }
        // return null;
        return Arr::first(self::$listOfJobs, function ($job) use ($id){
           return $job['id'] == $id;
        });
    }

}