# BackendProyectoMascotas
Backend en laravel con login, logout y crud de modelo mascota

Para correrlo se debe correr los siguientes comandos dentro de la carpeta del proyecto:

Se debe tener instalado 
php": "^7.1.3"
Manejador Composer: https://getcomposer.org/
Para la base de datos: Mysql:  https://www.mysql.com/

En la carpeta del proyecto correr los comandos:
composer install
npm install

Luego se deben configurar los datos de la base de datos en el archivo
.env
colocando los datos correspondientes en:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravelangularpro
DB_USERNAME=root
DB_PASSWORD=123

Luego levantar el proyecto con el comando:
php artisan serve

Lo cual por defecto lo corre en:

http://localhost:8000/

