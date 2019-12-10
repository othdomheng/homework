<?php

use Illuminate\Database\Seeder;
use App\Models\Shape;

class ShapeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Shape::firstOrCreate(
            [
                'name' => 'Big', 'created_by' => 1, 'updated_by' => 1
            ]
        );
    }
}
