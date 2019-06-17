<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class WelcomeUsersTest extends TestCase
{
    /** @test */
    function it_welcomes_users_with_nickname()
    {
        $this->get('/saludo/mauricio/Mauroper88')
            ->assertStatus(200)
            ->assertSee('Bienvenido Mauricio, tu apodo es Mauroper88');
    }

    /** @test */
    function it_welcomes_users_without_nickname()
    {
        $this->get('/saludo/mauricio')
            ->assertStatus(200)
            ->assertSee('Bienvenido Mauricio');
    }
}
