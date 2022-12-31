<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class RecordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('records')->insert([
            'user_id'=> 1,
            'plan_id'=> 1,
            'body'=> 'first record',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ]);
    }
}
