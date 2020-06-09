<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UsersModuleTest extends TestCase
{
    /** @test */
    function it_loads_the_users_list_page()
    {
        $this->get('/usuarios')
            ->assertStatus(200)
            ->assertSee('Usuarios');
    }


    /** @test */
    function it_loads_the_users_details()
    {
        $this->get('/usuarios/5')
            ->assertStatus(200)
            ->assertSee('Usuario con el id: 5');
    }
}
