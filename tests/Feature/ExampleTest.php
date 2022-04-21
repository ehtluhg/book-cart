<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
<<<<<<< HEAD
    public function test_the_application_returns_a_successful_response()
=======
    public function test_example()
>>>>>>> 4a96824 (Lab Exercise 8)
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
