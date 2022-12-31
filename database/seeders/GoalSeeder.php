<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class GoalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('goals')->insert([
            'user_id'=> 1,
            'deadline'=>'2023-1-1',
            'body'=> '宅建の資格取得',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            
            ]);
    }
}
