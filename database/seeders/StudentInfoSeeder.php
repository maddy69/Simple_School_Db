<?php

namespace Database\Seeders;
use Carbon\Carbon;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentInfoSeeder extends Seeder
{
    public function run()
    {
        DB::table('student_info')->insert([
            ['name' => 'John Doe', 'address' => '123 Main St', 'phone' => '123-456-7890', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Jane Smith', 'address' => '456 Elm St', 'phone' => '234-567-8901', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Alice Johnson', 'address' => '789 Maple Dr', 'phone' => '345-678-9012', 'created_at' => now(), 'updated_at' => now()],
        ]);                      
    }
}
