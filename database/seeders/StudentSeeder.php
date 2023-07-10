<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $fakedata = [];
        for ($i = 1; $i <= 20; $i++) {
            $fakedata[] = [
                'name' => 'Nguyen Van A',
                'email' => 'test' . $i . '@example.com',
                'address' => 'Hà Nội',
                'status' => 1,
            ];
        }
        DB::table('student')->insert($fakedata);
    }
}
