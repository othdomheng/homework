<?php

namespace Tests\Unit\App\Models;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\ProductCategory;

class ProductCategoryTest extends TestCase
{
    /**
     * A basic unit test example.
     * 
     * 
     * vendor/bin/phpunit --filter 'Tests\\Unit\\App\\Models\\ProductCategoryTest'
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }

    public function testMutatorName()
    {
        $category = new ProductCategory(
            ['name' => 'sara sampaio']
        );

        $this->assertEquals('SARA SAMPAIO', $category->name);
    }
}
