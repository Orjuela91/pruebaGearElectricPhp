Lenguaje: PHP 7.2.5
framework: Laravel 7.29
Base de datos: mysql 15.1 

1) despues de clonar el reposotirop si esta trabajando con visual studio code abrir una terminal y ejecutar composer install, si no, abrir una terminal en la carpeta del proyecto y ejecutar el mismo comando.
2) se necesita crear una base de datos local (localhost) mysql con nombre gearelectric, puerto de acceso 3306, DB_USERNAME=root y DB_PASSWORD=admin.
3) si esta trabajando con visual studio code abrir una terminal y ejecutar php artisan migrate, si no, abrir una terminal en la carpeta del proyecto y ejecutar el mismo comando.
4) despues de que laravel cree las migraciones ejecutamos el comando php artisan serve y con esto el proyecto ya esta arriba.

Nota: para que el comando composer install pueda funcionar y se carguen correctamente las librerias de laravel es necesario tener instalado el manejador de dependias Composer https://getcomposer.org/
