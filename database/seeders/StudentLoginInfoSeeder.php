<?php

namespace Database\Seeders;
use Carbon\Carbon;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentLoginInfoSeeder extends Seeder
{
    public function run()
    {     
        DB::table('student_login_info')->insert([
            ['student_id' => 1, 'username' => 'johndoe', 'password' => bcrypt('password123'),  'created_at' => now(), 'updated_at' => now()],
            ['student_id' => 2, 'username' => 'janesmith', 'password' => bcrypt('password456'),  'created_at' => now(), 'updated_at' => now()],
            ['student_id' => 3, 'username' => 'alicejohnson', 'password' => bcrypt('password789'), 'created_at' => now(), 'updated_at' => now()],
        ]);  
    }
}
