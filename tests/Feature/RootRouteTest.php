<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RootRouteTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_root_route()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
