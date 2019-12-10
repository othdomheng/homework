<?php

use Illuminate\Database\Seeder;
use App\Models\Zone;

class ZoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * 
     * composer dump-autoload
     * 
     *
     * @return void
     */
    public function run()
    {
        Zone::firstOrCreate(
            [
                'name' => 'Zone A', 'created_by' => 1, 'updated_by' => 1
            ]
        );
    }
}
