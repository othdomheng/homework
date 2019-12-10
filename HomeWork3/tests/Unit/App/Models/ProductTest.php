<?php

namespace Tests\Unit\App\Models;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Product;

class ProductTest extends TestCase
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

    public function testAccessorRentPrice()
    {
        $rent = new Product(
            [
                'rent_price' => 200.00
            ]
        );

        $this->assertEquals('$200', $rent->RentPriceFormat);
    }

    public function testAccessorSalePrice()
    {
        $sale = new Product(
            [
                'sale_price' => 200.00
            ]
        );
        $this->assertEquals('$200', $sale->SalePriceFormat);
    }

    public function testAccessorListPrice()
    {
        $list = new Product(
            [
                'list_price' => 200.00
            ]
        );
        $this->assertEquals('$200', $list->ListPriceFormat);
    }

    public function testAccessorSoldPrice()
    {
        $sold = new Product(
            [
                'sold_price' => 200.00
            ]
        );

        $this->assertEquals('$200', $sold->SoldPriceFormat);
    }
}
