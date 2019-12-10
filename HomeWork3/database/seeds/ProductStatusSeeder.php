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
        ProductStatus::firstOrCreate(
            [
                'name' => 'Large', 'created_by' => 1, 'updated_by' => 1
            ]
        );
    }
}
