<?php

use Illuminate\Database\Seeder;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => Str::random(7).'@gmail.com',
            'password' => 'admin_first'
        ]);
    }
}
