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
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_acceuil()
    {
        $response = $this->get('/');

        $response -> assertSee('<h1>The Office</h1>' , false);
        $response -> assertSee('<a href="/salles">Accéder à la liste</a>' , false);
    }
}
