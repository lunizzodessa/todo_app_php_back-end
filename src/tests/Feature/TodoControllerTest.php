<?php

namespace Tests\Feature;

use Illuminate\Support\Facades\Artisan;
use Tests\TestCase;

// Configure new environment for tests with sqlite MEMORY database - Copilot was failed to help with the environment and creation of the Test suite file, file was created manually
// But All the test cases were generated by Copilot, setUp was inserted manually
class TodoControllerTest extends TestCase
{
    public function setUp(): void
    {
        parent::setUp();
        Artisan::call('migrate');
        Artisan::call('db:seed');
    }

    public function testTodoListPage(): void
    {
        $response = $this->get('/todo');

        $response->assertStatus(200);
    }

    public function testTodoCreate(): void
    {
        $response = $this->post('/todo/create', [
            'name' => 'Test todo',
        ]);

        $response->assertStatus(302);
    }

    // Generated by Copilot but with wrong HTTP method (delete instead of put)
    public function testTodoComplete(): void
    {
        $response = $this->get('/todo/complete/1');

        $response->assertStatus(302);
    }

    // Generated by Copilot but with wrong HTTP method (delete instead of get)
    public function testTodoDelete(): void
    {
        $response = $this->get('/todo/delete/1');

        $response->assertStatus(302);
    }

}
