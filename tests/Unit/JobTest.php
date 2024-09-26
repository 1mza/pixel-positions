<?php

use App\Models\Employer;
use App\Models\Job;

it('it belongs to an employer', function () {
    //Arrange
    $employer = Employer::factory()->create([]);
    $job = Job::factory()->create([
        'employer_id' => $employer->id,
    ]);
    //Act And Asset "Often they are separate"
    expect($job->employer->is($employer))->toBeTrue;
    //Assert (AAA)
});

it('can have tags', function () {
    //AAA
    $job = Job::factory()->create();

    //Act
    $job->tag('frontend');

    //Assert
    expect($job->tags)->toHaveCount(1);
});

