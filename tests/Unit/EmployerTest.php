<?php

use App\Models\Employer;
use App\Models\User;

it('belongs to user', function () {
    $user = User::factory()->create();
    $employer = Employer::factory()->create([
        'user_id'=>$user->id,
    ]);

    expect($employer->user->is($user))->toBeTrue();
});
