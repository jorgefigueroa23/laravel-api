# API REST - Gestión de Productos

Backend desarrollado con Laravel para la gestión de productos mediante API REST.

---

# Tecnologías utilizadas

- PHP 8.2+
- Laravel
- MySQL / MariaDB
- Composer
- Apache

---

# Requisitos del sistema

Antes de ejecutar el proyecto, asegúrese de tener instalado:

- PHP 8.2 o superior
- Composer
- MySQL o MariaDB
- Servidor Apache
- Postman (recomendado para pruebas)

---

# Configuración de base de datos

Configurar el archivo `.env` con sus credenciales:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=
```

---

# Pasos para desplegar el sistema

## 1. Ingresar al proyecto

Abrir terminal dentro de la carpeta del proyecto.

---

## 2. Instalar dependencias

```bash
composer install
```

---

## 3. Generar clave de aplicación

```bash
php artisan key:generate
```

---

## 4. Ejecutar migraciones

```bash
php artisan migrate
```

---

## 5. Limpiar caché (recomendado)

```bash
php artisan optimize:clear
```

---

## 6. Levantar servidor

```bash
php artisan serve
```

Servidor disponible en:

```bash
http://127.0.0.1:8000
```

---

# Endpoints disponibles

## Obtener productos

```http
GET /api/productos
```

---

## Registrar producto

```http
POST /api/productos
```

---

## Actualizar producto

```http
PUT /api/productos/{producto}
```

Ejemplo:

```http
PUT /api/productos/1
```

---

## Eliminar producto

```http
DELETE /api/productos/{producto}
```

Ejemplo:

```http
DELETE /api/productos/1
```

---

# Pruebas con Postman

Se recomienda utilizar Postman para consumir y probar los endpoints.

## Ejemplo petición POST

### Método:
```http
POST
```

### URL:
```http
http://127.0.0.1:8000/api/productos
```

### Headers:

```http
Content-Type: application/json
Accept: application/json
```

### Body → raw → JSON

```json
{
  "nombre": "Laptop Lenovo",
  "descripcion": "RTX 4060",
  "precio": 3500,
  "stock": 15
}
```

---

# Comandos útiles

## Limpiar caché

```bash
php artisan optimize:clear
```

---

## Ver rutas registradas

```bash
php artisan route:list
```

---

# Estructura API REST

La API devuelve respuestas en formato JSON y está preparada para ser consumida desde aplicaciones frontend como:

- Vue.js
- React
- Aplicaciones móviles
- Clientes HTTP externos
