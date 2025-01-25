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

#### En base a este diagrama Entidad-Relación se deberá crear la base de datos y las migraciones tomando en cuenta el nombre y los campos de cada tabla. 
  ![grafico](https://github.com/user-attachments/assets/7d2be29f-450c-48f8-97ff-b046ad1acb22)
#### Diagrama ER  
  ![entidad-relacion](https://github.com/user-attachments/assets/9ebf217b-9eab-494d-976c-d16d95cea249)
#### Diagrama de Routas  
  ![Query](https://github.com/user-attachments/assets/c32f2d30-96c2-43ca-9e25-544388f2a034)


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
- <img width="575" alt="pedidos-con-usuarios" src="https://github.com/user-attachments/assets/85d64e2d-7ae6-4546-8c7d-a3718438d595" />

- `GET /pedidos-en-rango`: Recuperar todos los pedidos cuyo total esté en el rango de $100 a $250.
- <img width="575" alt="pedidos-en-rango" src="https://github.com/user-attachments/assets/32c17daa-e247-48e3-98bb-7a7ed7df95b6" />

- `GET /usuarios-con-r`: Encontrar todos los usuarios cuyos nombres comiencen con la letra "R".
- <img width="575" alt="usuarios-con-r" src="https://github.com/user-attachments/assets/fb92fc68-f6f2-4932-964f-6d25a614f6d2" />

- `GET /total-pedidos-usuario-5`: Calcular el total de registros en la tabla de pedidos para el usuario con ID 5.
- <img width="575" alt="total-pedidos-usuario-5" src="https://github.com/user-attachments/assets/42a2b5e0-4aae-4dc2-b35e-9dddf56ebf84" />

- `GET /pedidos-ordenados`: Recuperar todos los pedidos junto con la información de los usuarios, ordenándolos de forma descendente según el total del pedido.
- <img width="575" alt="pedidos-ordenados" src="https://github.com/user-attachments/assets/9690c085-5648-4b75-9fe9-6b29138ec6ea" />

- `GET /suma-total-pedidos`: Obtener la suma total del campo "total" en la tabla de pedidos.
- <img width="575" alt="suma-total-pedidos" src="https://github.com/user-attachments/assets/5359fbd7-8eb7-412f-b0eb-8d3637313d9e" />

- `GET /pedido-mas-economico`: Encontrar el pedido más económico, junto con el nombre del usuario asociado.
- <img width="575" alt="pedidos-mas-economico" src="https://github.com/user-attachments/assets/751c0ad0-0d21-4549-8e75-f49abd90d123" />

- `GET /pedidos-agrupados-por-usuario`: Obtener el producto, la cantidad y el total de cada pedido, agrupándolos por usuario.
- <img width="575" alt="pedidos-agrupados-por-usuario" src="https://github.com/user-attachments/assets/ef17390e-c828-4480-815d-434cf8e029f6" />


## Contribuciones

Las contribuciones son bienvenidas. Si deseas contribuir, por favor abre un issue o envía un pull request.
