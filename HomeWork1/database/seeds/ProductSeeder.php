<?php

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // if (!DB::table('categories')->where('name', 'rent_price', 'list_price', 'sale_price', 'sole_price', 'profile', 'galleries', '')->exists())
        // {

        // }

        DB::table('products')->insert([
            ['name' => 'Iphone XS Max', 'rent_price' => 1000.00, 'list_price' => 1000.00, 'sale_price' => 1100.00, 
            'sole_price' => 1500.00, 'profile' => 'IphoneXSMax', 'galleries' => 'sfjfjdfnjkfnsdjknfew.jpg', 'created_by' => 1,
            'updated_by' => 1], 
            ['name' => 'Iphone XS Max', 'rent_price' => 1000.00, 'list_price' => 1000.00, 'sale_price' => 1100.00, 
            'sole_price' => 1500.00, 'profile' => 'IphoneXSMax', 'galleries' => 'sfjfjdfnjkfnsdjknfew.jpg', 'created_by' => 1,
            'updated_by' => 1], 
            ['name' => 'Iphone XS Max', 'rent_price' => 1000.00, 'list_price' => 1000.00, 'sale_price' => 1100.00, 
            'sole_price' => 1500.00, 'profile' => 'IphoneXSMax', 'galleries' => 'sfjfjdfnjkfnsdjknfew.jpg', 'created_by' => 1,
            'updated_by' => 1]
        ]);
        
        // $product = 
        // [
        //     ['name' => 'Iphone XS Max', 'rent_price' => 1000.00, 'list_price' => 1000.00, 'sale_price' => 1100.00, 
        //     'sole_price' => 1500.00, 'profile' => 'IphoneXSMax', 'galleries' => 'sfjfjdfnjkfnsdjknfew.jpg', 'created_by' => 1,
        //     'updated_by' => 1], 
        //     ['name' => 'Iphone XS Max', 'rent_price' => 1000.00, 'list_price' => 1000.00, 'sale_price' => 1100.00, 
        //     'sole_price' => 1500.00, 'profile' => 'IphoneXSMax', 'galleries' => 'sfjfjdfnjkfnsdjknfew.jpg', 'created_by' => 1,
        //     'updated_by' => 1], 
        //     ['name' => 'Iphone XS Max', 'rent_price' => 1000.00, 'list_price' => 1000.00, 'sale_price' => 1100.00, 
        //     'sole_price' => 1500.00, 'profile' => 'IphoneXSMax', 'galleries' => 'sfjfjdfnjkfnsdjknfew.jpg', 'created_by' => 1,
        //     'updated_by' => 1]
        // ];

        // Product::create($product);

        // Product::firstOrCreate(['name' => 'Iphone XS Max']);
        // Product::firstOrCreate(['rent_price' => 1000.00]);
        // Product::firstOrCreate(['list_price' => 1000.00]);
        // Product::firstOrCreate(['sale_price' => 1100.00]);
        // Product::firstOrCreate(['sole_price' => 1500.00]);
        // Product::firstOrCreate(['profile' => 'IphoneXSMax']);
        // Product::firstOrCreate(['galleries' => 'sfjfjdfnjkfnsdjknfew.jpg']);
        // Product::firstOrCreate(['created_by' => 001]);
        // Product::firstOrCreate(['updated_by' => 001]);

        // Product::firstOrCreate(['name' => 'Iphone XS Max']);
        // Product::firstOrCreate(['rent_price' => 1000.00]);
        // Product::firstOrCreate(['list_price' => 1000.00]);
        // Product::firstOrCreate(['sale_price' => 1100.00]);
        // Product::firstOrCreate(['sole_price' => 1500.00]);
        // Product::firstOrCreate(['profile' => 'IphoneXSMax']);
        // Product::firstOrCreate(['galleries' => 'sfjfjdfnjkfnsdjknfew.jpg']);
        // Product::firstOrCreate(['created_by' => 001]);
        // Product::firstOrCreate(['updated_by' => 001]);

        // Product::firstOrCreate(['name' => 'Iphone XS Max']);
        // Product::firstOrCreate(['rent_price' => 1000.00]);
        // Product::firstOrCreate(['list_price' => 1000.00]);
        // Product::firstOrCreate(['sale_price' => 1100.00]);
        // Product::firstOrCreate(['sole_price' => 1500.00]);
        // Product::firstOrCreate(['profile' => 'IphoneXSMax']);
        // Product::firstOrCreate(['galleries' => 'sfjfjdfnjkfnsdjknfew.jpg']);
        // Product::firstOrCreate(['created_by' => 001]);
        // Product::firstOrCreate(['updated_by' => 001]);
    }
}
