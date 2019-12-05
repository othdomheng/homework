<?php

use Illuminate\Database\Seeder;
use App\Models\ProductCategory;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * composer dump-autoload
     * php artisan db:seed --class=ProductCategorySeeder
     * 
     * @return void
     */
    public function run()
    {
        ProductCategory::firstOrCreate(['name' => 'Phone']);
        ProductCategory::firstOrCreate(['name' => 'Speaker']);
        ProductCategory::firstOrCreate(['name' => 'Tablet']);
    }
}
