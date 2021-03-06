<?php

namespace Tests\Unit\App\Models;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\ProductStatus;

class ProductStatusTest extends TestCase
{
    /**
     * A basic unit test example.
     * vendor/bin/phpunit --filter 'Tests\\Unit\\App\\Models\\ProductTypeTest'
     * 
     * 
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }

    public function testAccessorProductStatus()
    {
        $statusid = new ProductStatus(
            [
                'id' => 1
            ]
        );

        $this->assertEquals('001', $statusid->IdFormat);
    }
}
