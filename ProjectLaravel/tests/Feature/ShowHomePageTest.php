<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ShowHomePageTest extends TestCase
{
    /** @test */
    public function ShowHomePageRendered()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
    /** @test */
    public function show_about_page_rendered()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
