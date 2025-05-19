<?php

namespace Database\Seeders;
use App\Models\Testimonial;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Testimonial::insert([
            ['name'=>'Juan Pérez','role'=>'CEO, Empresa 1','photo_url'=>'https://via.placeholder.com/64','quote'=>'FakeProduct ha transformado nuestra forma de trabajar. Las mejoras en eficiencia son notables.'],
            ['name'=>'María García','role'=>'CTO, Empresa 2','photo_url'=>'https://via.placeholder.com/64','quote'=>'La mejor inversión que hemos hecho para nuestro equipo. El soporte es excepcional.'],
            ['name'=>'Carlos Rodríguez','role'=>'Director, Empresa 3','photo_url'=>'https://via.placeholder.com/64','quote'=>'Increíblemente fácil de usar. Ha mejorado nuestra productividad en un 200%.'],
        ]);
    }
}
