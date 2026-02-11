# PRUEBAEFECTIVALE
Prueba técnica de conocimientos
FASE 1
Se clona el proyecto para trabajarlo desde visual code 
$ git clone https://github.com/Estefania-cruz/PRUEBAEFECTIVALE.git
Cloning into 'PRUEBAEFECTIVALE'...
remote: Enumerating objects: 3, done.
remote: Counting objects: 100% (3/3), done.
remote: Compressing objects: 100% (2/2), done.
remote: Total 3 (delta 0), reused 0 (delta 0), pack-reused 0 (from 0)
Receiving objects: 100% (3/3), done.

FASE 2
Se crea el proyecto en laravel 
$ composer create-project laravel/laravel formulario-contacto
Creating a "laravel/laravel" project at "./formulario-contacto"
Installing laravel/laravel (v12.11.2)
  - Downloading laravel/laravel (v12.11.2)
  - Installing laravel/laravel (v12.11.2): Extracting archive
Created project in C:\xampp_new\htdocs\PRUEBAEFECTIVALE\formulario-contacto
> @php -r "file_exists('.env') || copy('.env.example', '.env');"
Loading composer repositories with package information
Updating dependencies
Lock file operations: 111 installs, 0 updates, 0 removals

FASE 3 
Se corre vel serve para ver si la instalacion fue correcta
$ php artisan serve

   INFO  Server running on [http://127.0.0.1:8000].

  Press Ctrl+C to stop the server

  2026-02-11 06:41:12 / .......................................... ~ 509.09ms
  2026-02-11 06:41:12 /favicon.ico ................................. ~ 0.17ms

FASE 4
Se crea el controlador que se va ocupar 
$ php artisan make:controller MensajeController

   INFO  Controller [C:\xampp_new\htdocs\PRUEBAEFECTIVALE\formulario-contacto\ap
p\Http\Controllers\MensajeController.php] created successfully.

FASE 5
Se realizar el codigo y se sube la primera parte que se tiene
$ git add .

$ git commit -m 'primer avance'
[main e22e9d1] primer avance
 59 files changed, 10923 insertions(+)
 create mode 100644 formulario-contacto/.editorconfig
 create mode 100644 formulario-contacto/.env.example
 create mode 100644 formulario-contacto/.gitattributes
 create mode 100644 formulario-contacto/.gitignore
 create mode 100644 formulario-contacto/README.md
 create mode 100644 formulario-contacto/app/Http/Controllers/Controller.php
 create mode 100644 formulario-contacto/app/Http/Controllers/MensajeController.php
 create mode 100644 formulario-contacto/app/Models/User.php
 create mode 100644 formulario-contacto/app/Providers/AppServiceProvider.php
 create mode 100644 formulario-contacto/artisan
 create mode 100644 formulario-contacto/bootstrap/app.php
 create mode 100644 formulario-contacto/bootstrap/cache/.gitignore
 create mode 100644 formulario-contacto/bootstrap/providers.php
 create mode 100644 formulario-contacto/composer.json
 create mode 100644 formulario-contacto/composer.lock
 create mode 100644 formulario-contacto/config/app.php
 create mode 100644 formulario-contacto/config/auth.php
 create mode 100644 formulario-contacto/config/cache.php
 create mode 100644 formulario-contacto/config/database.php
 create mode 100644 formulario-contacto/config/filesystems.php
 create mode 100644 formulario-contacto/config/logging.php
 create mode 100644 formulario-contacto/config/mail.php
 create mode 100644 formulario-contacto/config/queue.php
 create mode 100644 formulario-contacto/config/services.php
 create mode 100644 formulario-contacto/config/session.php
 create mode 100644 formulario-contacto/database/.gitignore
 create mode 100644 formulario-contacto/database/factories/UserFactory.php
 create mode 100644 formulario-contacto/database/migrations/0001_01_01_000000_create_users_table.php
 create mode 100644 formulario-contacto/database/migrations/0001_01_01_000001_create_cache_table.php
 create mode 100644 formulario-contacto/database/migrations/0001_01_01_000002_create_jobs_table.php
 create mode 100644 formulario-contacto/database/seeders/DatabaseSeeder.php
 create mode 100644 formulario-contacto/package.json
 create mode 100644 formulario-contacto/phpunit.xml
 create mode 100644 formulario-contacto/public/.htaccess
 create mode 100644 formulario-contacto/public/favicon.ico
 create mode 100644 formulario-contacto/public/index.php
 create mode 100644 formulario-contacto/public/robots.txt
 create mode 100644 formulario-contacto/resources/css/app.css
 create mode 100644 formulario-contacto/resources/js/app.js
 create mode 100644 formulario-contacto/resources/js/bootstrap.js
 create mode 100644 formulario-contacto/resources/views/index.blade.php
 create mode 100644 formulario-contacto/resources/views/registros.blade.php
 create mode 100644 formulario-contacto/resources/views/welcome.blade.php
 create mode 100644 formulario-contacto/routes/console.php
 create mode 100644 formulario-contacto/routes/web.php
 create mode 100644 formulario-contacto/storage/app/.gitignore
 create mode 100644 formulario-contacto/storage/app/private/.gitignore
 create mode 100644 formulario-contacto/storage/app/public/.gitignore
 create mode 100644 formulario-contacto/storage/framework/.gitignore
 create mode 100644 formulario-contacto/storage/framework/cache/.gitignore
 create mode 100644 formulario-contacto/storage/framework/cache/data/.gitignore
 create mode 100644 formulario-contacto/storage/framework/sessions/.gitignore
 create mode 100644 formulario-contacto/storage/framework/testing/.gitignore
 create mode 100644 formulario-contacto/storage/framework/views/.gitignore
 create mode 100644 formulario-contacto/storage/logs/.gitignore
 create mode 100644 formulario-contacto/tests/Feature/ExampleTest.php
 create mode 100644 formulario-contacto/tests/TestCase.php
 create mode 100644 formulario-contacto/tests/Unit/ExampleTest.php
 create mode 100644 formulario-contacto/vite.config.js

$ git push
info: please complete authentication in your browser...
Enumerating objects: 81, done.
Counting objects: 100% (81/81), done.
Delta compression using up to 16 threads
Compressing objects: 100% (65/65), done.
Writing objects: 100% (80/80), 74.36 KiB | 3.91 MiB/s, done.
Total 80 (delta 2), reused 0 (delta 0), pack-reused 0 (from 0)
remote: Resolving deltas: 100% (2/2), done.
To https://github.com/Estefania-cruz/PRUEBAEFECTIVALE.git
   2f82476..e22e9d1  main -> main

FASE 6
Se corrigen las fallas y se limpia la cache
$ php artisan cache:clear

   INFO  Application cache cleared successfully.
$ php artisan view:clear

   INFO  Compiled views cleared successfully.

$ php artisan config:clear

   INFO  Configuration cache cleared successfully.

FASE 7 
Se realizan las pruebas y se suben los ultimos cambios
<img width="1435" height="254" alt="image" src="https://github.com/user-attachments/assets/c9995470-744c-479e-9d6b-fecac664b3e1" />






