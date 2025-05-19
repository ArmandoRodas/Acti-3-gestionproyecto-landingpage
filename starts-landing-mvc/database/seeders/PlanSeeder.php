<?php

namespace Database\Seeders;
use App\Models\Plan;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       Plan::insert([
            ['name'=>'Basic',        'price'=>9.00,  'max_users'=>5,  'storage'=>'2GB'],
            ['name'=>'Professional', 'price'=>29.00, 'max_users'=>20, 'storage'=>'10GB'],
            ['name'=>'Premium',      'price'=>99.00, 'max_users'=>0,  'storage'=>'Unlimited'],
        ]);
    }
}
