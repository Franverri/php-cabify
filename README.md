# Laravel Cabify

## Crear el proyecto

```console
git clone https://github.com/Franverri/php-cabify.git webapp
```

## Instalar Laradock

```console
cd webapp
git submodule add https://github.com/LaraDock/laradock.git
```
### Configurar LaraDock

Abrimos el archivo `docker-compose.yml` y buscamos INSTALL_XDEBUG para poner esta variable a true (Hay 2 apariciones).

## Configurar el .env de Laravel

```console
cp env-example .env
```

Dicho archivo es a modo de ejemplo y será necesario modificar el mail asignado para que funcionen correctamente el envío de los mismos. Para ello es necesario setear un mail y contraseña válidos de gmail y adicionalmente activar la opción de `acceso de apps menos seguras` en la cuenta.

## Configurar y ejecutar workspace en LaraDock

```console
cd laradock
cp env-example .env
docker-compose run workspace bash
composer install
php artisan key:generate
```

## Correr contenedores con Docker-compose

Desde la carpeta de laradock:

```console
docker-compose up -d nginx mysql
```

## MySQL

Crear la base de datos `dockerapp` y dentro de ella la tabla `prospects` para almacenar los datos de los usuarios:

```console
docker-compose exec mysql bash
mysql -u root -p
create database dockerapp;
use dockerapp;
CREATE TABLE IF NOT EXISTS `prospects` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
```

## Localhost

Ingresar a [http://localhost/](http://localhost/) para empezar a utilizar la aplicación.
