<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ActionStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('action_statuses')->insert([
            ['name' => 'Pending', 'color' => 'bg-warning'],
            ['name' => 'In-progress', 'color' => 'bg-blue'],
            ['name' => 'Completed', 'color' => 'bg-green'],
           ]);
    }
}
