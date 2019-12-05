<?php

namespace Tests\Feature\Routes;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class WebTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * vendor/bin/phpunit --filter 'Tests\\Feature\\Routes\\WebTest'
     * 
     * @return void
     */
    public function testExample()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function testIsProductCategoryExists()
    {
        $response = $this->get('/product-categories');

        $response->assertStatus(200);
    }

    public function testIsProductStatusExists()
    {
        $response = $this->get('/product-statuses');

        $response->assertStatus(200);
    }
    // public function testIsProductProductExists()
    // {
    //     $response = $this->get('/product');

    //     $response->assertStatus(200);
    // }
}
