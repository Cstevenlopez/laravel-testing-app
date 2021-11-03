<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class InsertionTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $this->withoutExceptionHandling();
        $response = $this->post('/api/tasks/create', [
            'name' => 'Write Article',
            'description' => 'Write and publish an article'
        ]);
        $response->assertStatus(201);
        $this->assertTrue(count(Task::all()) > 1);
    }
}
