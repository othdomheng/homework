<?php

namespace Tests\Unit\App\Models;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Shape;

class ShapeTest extends TestCase
{
    /**
     * A basic unit test example.
     * vendor/bin/phpunit --filter 'Tests\\Unit\\App\\Models\\ShapeTest'
     * 
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }

    public function testAccessorShape()
    {
        $shape = new Shape(
            ['id' => 1]
        );
        $this->assertEquals('001', $shape->IdFormat);
       
    }
}
