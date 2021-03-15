<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class MyTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/post');

        $response->assertStatus(200);
    }
    public function test_client_id_get_request(){
        $response = $this->get('/post/1');
        $response->assertStatus(200);
    }
    public function test_client_unexisted_client(){
        $response = $this->get('/post/10000');
        $response->assertStatus(404);
    }
    public function test_client_response(){
        $response = $this->get('/post/1');
        $response->assertViewHas('post');
    }
}
