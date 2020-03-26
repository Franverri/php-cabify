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
cp .env.example .env
```

Dicho archivo es a modo de ejemplo y será necesario modificar el mail asignado para que funcionen correctamente el envío de los mismos. Para ello es necesario setear un mail y contraseña válidos de gmail y adicionalmente activar la opción de `acceso de apps menos seguras` en la cuenta.

## Configurar y ejecutar workspace en LaraDock

```console
cd laradock
docker-compose exec workspace bash
cp .env.example .env
composer install
php artisan key:generate
```

## Correr contenedores con Docker-compose

Desde la carpeta de laradock:

```console
docker-compose up -d nginx mysql
```

## Localhost

Ingresar a [http://localhost/](http://localhost/) para empezar a utilizar la aplicación.
