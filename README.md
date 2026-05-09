API EN LARAVEL


Requisitos:
PHP 8.2 o superior
Composer
MySQL o MariaDB
Servidor APACHE


Configuracion de BD:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=

PASOS PARA DESPLEGAR EL SISTEMA:
Ingresa al sistema abre terminal (ctrl+ñ)
    composer intall
    php artisan key:generate
    php artisan migrate
    php artisan serve

rutas:
GET: /productos
POST: /productos
PUT: /productos/{producto}
DELETE: /productos/{producto}

recomendacion usar POSTMAN

PARA INGRESAR ALGUN DATO POST EJEMPLO:
POST->raw->JSON:

{
  "nombre": "Laptop Lenovo",
  "descripcion": "RTX 4060",
  "precio": 3500,
  "stock": 15
}