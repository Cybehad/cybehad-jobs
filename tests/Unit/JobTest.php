<?php

use App\Models\Employer;
use App\Models\Job;

it('belongs to employer', function () {
    //Arange
    $employer = Employer::factory()->create();

    $job = Job::factory()->create([
        'employer_id' => $employer->id
    ]);
    //Act
    //Assert
    expect($job->employer->is($employer))->toBeTrue();
});


it('can have tags', function(){
    $job = Job::factory()->create();

    $job->tag('Front-end');

    expect($job->tags)->toHaveCount(1);
});