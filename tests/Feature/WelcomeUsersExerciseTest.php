<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class WelcomeUsersExerciseTest extends TestCase
{
    /** @test */
    function it_welcomes_users_with_nickname()
    {
        $this->get('/saludo-ejercicio/mauricio/Mauroper88')
            ->assertStatus(200)
            ->assertSee('Bienvenido Mauricio, tu apodo es Mauroper88');
    }

    /** @test */
    function it_welcomes_users_without_nickname()
    {
        $this->get('/saludo-ejercicio/mauricio')
            ->assertStatus(200)
            ->assertSee('Bienvenido Mauricio');
    }
}
