<?php

namespace Tests\Unit\App\Models;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\ProductType;

class ProductTypeTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * vendor/bin/phpunit --filter 'Tests\\Unit\\App\\Models\\ProductTypeTest'
     * 
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }

    public function testAccessorProductType()
    {
        $type = new ProductType(
            ['id' => 1]
        );
        $this->assertEquals('001', $type->IdFormat);
       
    }

    
}
