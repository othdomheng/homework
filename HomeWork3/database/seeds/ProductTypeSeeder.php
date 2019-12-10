<?php

use Illuminate\Database\Seeder;
use App\Models\ProductType;

class ProductTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * 
     * composer dump-autoload
     * php artisan db:seed --class=UsersTableSeeder
     *
     * @return void
     */
    public function run()
    {
      
        ProductType::firstOrCreate(
                [
                    'name' => 'Phone', 
                    'created_by' => 1, 
                    'updated_by' => 1
                ]
        );
     
    }
}
