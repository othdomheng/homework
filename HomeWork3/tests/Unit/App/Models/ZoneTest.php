<?php

namespace Tests\Unit\App\Models;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Zone;

class ZoneTest extends TestCase
{
    /**
     * A basic unit test example.
     * vendor/bin/phpunit --filter 'Tests\\Unit\\App\\Models\\ZoneTest'
     * 
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }

    public function testAccessorZoneTest()
    {
        $zone = new Zone(
            ['id' => 1]
        );

        $this->assertEquals('001', $zone->IdFormat);
    }
}
