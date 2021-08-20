<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class SendRouteTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_send_route_has_validation()
    {
        $response = $this->post('/send');

        $response->assertStatus(302);
    }
}
