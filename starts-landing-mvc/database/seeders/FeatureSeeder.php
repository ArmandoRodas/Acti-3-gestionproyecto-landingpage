<?php

namespace Database\Seeders;
use App\Models\Feature;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Feature::insert([
            ['icon_class'=>'bi-shield-check','title'=>'Secure Platform','description'=>'Enterprise-grade security to protect your data and privacy at all times.'],
            ['icon_class'=>'bi-rocket-takeoff','title'=>'Fast Performance','description'=>'Lightning-fast speeds ensure your work flows smoothly without interruption.'],
            ['icon_class'=>'bi-lightning','title'=>'Easy Integration','description'=>'Seamlessly connects with your existing tools and workflows.'],
        ]);
    }
}
