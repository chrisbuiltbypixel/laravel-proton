<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    /**
     * set up a user and select a mosque account
     */
    public function actAsUser()
    {
        $user = factory(User::class)->create();

        // log in the user
        return Passport::actingAs(
            $user,
            [],
            'user_api'
        );
    }
}
