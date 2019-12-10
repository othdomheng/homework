<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * composer dump-autoload
     * php artisan db:seed
     * php artisan db:seed --class=UsersTableSeeder
     * 
     * @return void
     */
    public function run()
    {
        User::firstOrCreate([
                'name' => 'Heng Othdom',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('12345678')
            ]
    );
    }
}
