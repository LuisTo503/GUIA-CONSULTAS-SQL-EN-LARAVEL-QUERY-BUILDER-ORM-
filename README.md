<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Actividad 2
#### Coach:     Kenia Paíz
#### Estudiante:Luis Rolando Tobar Moreno
#### Bootcamp:  FSJ24-A

## Proyecto Laravel Query Builder y ORM

El objetivo de esta actividad es adquirir un dominio completo en el uso de Query Builder y ORM en 
Laravel para realizar consultas SQL a una base de datos. 

## Requisitos

- PHP 8.2.12
- Composer
- MySQL
- Laravel 11.4

## Instalación

Sigue estos pasos para configurar y ejecutar el proyecto en tu entorno local:

1. Clona el repositorio:

    ```sh
    git clone https://github.com/tu-usuario/tu-repositorio.git
    cd tu-repositorio
    ```

2. Instala las dependencias de Composer:

    ```sh
    composer install
    ```

3. Copia el archivo de entorno de ejemplo y configura tu base de datos:

    ```sh
    cp .env.example .env
    ```

    Edita el archivo `.env` y configura los detalles de tu base de datos:

    ```env
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=queryB
    DB_USERNAME=root
    DB_PASSWORD=
    ```

4. Genera la clave de la aplicación:

    ```sh
    php artisan key:generate
    ```

5. Ejecuta las migraciones para crear las tablas en la base de datos:

    ```sh
    php artisan migrate
    ```

6. Ejecuta los seeders para insertar datos de ejemplo en las tablas:

    ```sh
    php artisan db:seed
    ```

7. Inicia el servidor de desarrollo de Laravel:

    ```sh
    php artisan serve
    ```

    La aplicación estará disponible en `http://localhost:8000`.

## Uso

### Rutas disponibles

- `GET /usuarios`: Listar todos los usuarios.
![usuarios](https://github.com/user-attachments/assets/6f42036d-ad53-400b-a25e-c3b22ab4fcef)

- `GET /pedidos-usuario-2`: Recuperar todos los pedidos asociados al usuario con ID 2.
- ![pedidos-usuario-2](https://github.com/user-attachments/assets/4beac1d6-c0d0-4dc6-9d22-d390a8ac4c75)

- `GET /pedidos-con-usuarios`: Obtener la información detallada de los pedidos, incluyendo el nombre y correo electrónico de los usuarios.
- `GET /pedidos-en-rango`: Recuperar todos los pedidos cuyo total esté en el rango de $100 a $250.
- `GET /usuarios-con-r`: Encontrar todos los usuarios cuyos nombres comiencen con la letra "R".
- `GET /total-pedidos-usuario-5`: Calcular el total de registros en la tabla de pedidos para el usuario con ID 5.
- `GET /pedidos-ordenados`: Recuperar todos los pedidos junto con la información de los usuarios, ordenándolos de forma descendente según el total del pedido.
- `GET /suma-total-pedidos`: Obtener la suma total del campo "total" en la tabla de pedidos.
- `GET /pedido-mas-economico`: Encontrar el pedido más económico, junto con el nombre del usuario asociado.
- `GET /pedidos-agrupados-por-usuario`: Obtener el producto, la cantidad y el total de cada pedido, agrupándolos por usuario.

## Contribuciones

Las contribuciones son bienvenidas. Si deseas contribuir, por favor abre un issue o envía un pull request.
