<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ViewTest extends TestCase
{
    /**
     * A basic feature test home.
     *
     * @return void
     */
    public function test__pag_home()
    {
        $response = $this->get('/home');

        $response->assertStatus(200);
    }

    public function test_pag_teste()
    {
        $response = $this->get('/teste');

        $response->assertStatus(200);
    }
}
