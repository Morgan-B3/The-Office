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

    public function test_toto()
    {
        $response = $this->get('/hello');

        $response->assertSee('Hello Toto');
        $response->assertSee('<h1>Hello Toto</h1>', false); // le false permet de préciser à Laravel d'interpreter ça comme du HTML et non comme du htmlSpecialChars
    }
}
