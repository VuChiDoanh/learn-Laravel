<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CustommerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DB::table('custommer')->insert([
        //     'name' => 'Test User',
        //     'email' => 'congvc@gmail.com',
        //     'birthday' => '2003-02-12',
        //     'gender' => 0,

        // ]);

        $test = [];
        for ($i = 1; $i < 100; $i++) {
            $test[] = [
                'name' => 'Test User',
                'email' => "congvc" . $i . "@gmail.com",
                'birthday' => '2003-02-12',
                'gender' => 0
            ];
        };
        DB::table('custommer')->insert($test);
    }
}
