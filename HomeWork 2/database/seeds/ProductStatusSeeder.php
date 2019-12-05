<?php

use Illuminate\Database\Seeder;
use App\Models\ProductStatus;

class ProductStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductStatus::firstOrCreate(['name' => 'Draft']);
        ProductStatus::firstOrCreate(['name' => 'Public']);
    }
}
