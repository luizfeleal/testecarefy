<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PersonTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->post('http://localhost:8000/api/person');
        //$response = $this->json('post', 'http://localhost:8000/api/auth');
        $response->assertStatus(200);//->assertJsonFragment(["nome"=>"luiz", "cpf"=>"cpf"]);
    }
}
