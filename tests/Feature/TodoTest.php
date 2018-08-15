<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class TodoTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function can_get_all_the_todos()
    {
        $todos = factory('App\Todo', 3)->create();

        $this->get('/todos')
            ->assertStatus(200)
            ->assertJson($todos->toArray());
    }
}
