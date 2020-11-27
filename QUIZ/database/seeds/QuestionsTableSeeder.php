<?php

use Illuminate\Database\Seeder;

class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        
        for ($i = 0; $i < 50; $i++) {
            DB::table('questions')->insert([
                'title' => Str::random(5),
                'question' => Str::random(15)
            ]);
        }
    }
}
