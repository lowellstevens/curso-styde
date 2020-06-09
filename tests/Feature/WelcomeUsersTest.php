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
        $this->get('saludo/pepe/hola')
            ->assertStatus(200)
            ->assertSee('Bienvenido pepe, tu apodo es hola');
    }

    /** @test */
    function it_welcomes_users_without_nickname()
    {
        $this->get('saludo/pepe/')
            ->assertStatus(200)
            ->assertSee('Bienvenido pepe, no tienes apodo');
    }
}
