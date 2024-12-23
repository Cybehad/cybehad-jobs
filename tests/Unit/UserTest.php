<?php

use App\Models\User;
use App\Models\UserProfile;

it('can have profile', function () {
    $user = User::factory()->create();
    $profile = UserProfile::factory()->create([
        'user_id' => $user->id
    ]);

    expect($profile->user->is($user))->toBeTrue();
});
