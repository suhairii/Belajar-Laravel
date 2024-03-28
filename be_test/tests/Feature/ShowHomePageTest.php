<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ShowHomePageTest extends TestCase
{
    /**@test */
    public function testShowHomePageRendered()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
