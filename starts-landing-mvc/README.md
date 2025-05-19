STARTS Guatemalan Landing Page MVC

Este proyecto es la adaptación de una landing page estática a una arquitectura MVC con Laravel 10 sobre PHP 8.2, usando Bootstrap 5 y JS. Permite gestionar dinámicamente las secciones de Features, Pricing y Testimonials desde la base de datos.

Tecnologías

-- PHP 8.2

-- Laravel 10

-- Bootstrap 5

-- Blade Templates

-- MySQL (o PostgreSQL/SQLite)

-- Node.js & npm (para assets)

-- Composer

-- Git

Qué se hizo

Proyecto Laravel 10: creado con composer create-project --prefer-dist laravel/laravel:^10.0 starts-landing-mvc.

Modelos y migraciones: Feature, Plan y Testimonial con sus respectivas tablas.

Seeders: FeatureSeeder, PlanSeeder y TestimonialSeeder para poblar la BD con datos de ejemplo.

Controlador: HomeController con método index() que carga todos los registros y los envía a la vista.

Rutas: ruta / apuntando a HomeController@index en routes/web.php.

Vistas Blade:

layouts/app.blade.php: layout principal con includes de Bootstrap y placeholders (@yield).

partials/navbar.blade.php y partials/footer.blade.php: fragmentos reutilizables de navegación y pie.

home.blade.php: vista de la landing con secciones dinámicas (@foreach($features)…).

Assets: compilados con Laravel Mix (npm run dev / npm run build).

Estructura de carpetas
starts-landing-mvc/


├── app/
│   ├── Http/Controllers/HomeController.php
│   └── Models/
│       ├── Feature.php
│       ├── Plan.php
│       └── Testimonial.php
├── database/
│   ├── migrations/
│   └── seeders/
│       ├── FeatureSeeder.php
│       ├── PlanSeeder.php
│       └── TestimonialSeeder.php
├── public/
│   └── index.php
├── resources/
│   ├── views/
│   │   ├── layouts/app.blade.php
│   │   ├── partials/navbar.blade.php
│   │   ├── partials/footer.blade.php
│   │   └── home.blade.php
│   └── js/ & css/
├── routes/web.php
├── package.json
└── composer.json


Instalación y ejecución local

1. Clonar el repositorio y entrar en la carpeta:
git clone https://github.com/ArmandoRodas/Acti-3-gestionproyecto-landingpage

Aqui se encuentra el archivo https://github.com/ArmandoRodas/Acti-3-gestionproyecto-landingpage/tree/main/starts-landing-mvc

cd starts-landing-mvc

Instalar dependencias PHP:
composer install
  
npm install
npm run dev     # modo desarrollo
# npm run build # para producción

Configurar variables de entorno:

cp .env.example .env
php artisan key:generate

Ajusta en .env tu conexión a base de datos.

Crear y poblar la base de datos:
php artisan migrate:fresh --seed

Levantar el servidor local:
php artisan serve

Abrir en el navegador:
http://127.0.0.1:8000

Contribuir

Crear un branch: git checkout -b feature/nombre

Hacer commit: git commit -m "Añade función X"

Enviar pull request.
Licencia

MIT © STARTS Guatemalan

