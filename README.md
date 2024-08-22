# Backend my-app

## Configuración del proyecto

1. Primero, clona el proyecto

Con HTTPS:

```sh
git clone https://github.com/josemcj/my-brand-backend.git
```

Con SSH:

```sh
git git@github.com:josemcj/my-brand-backend.git
```

2. Abre la carpeta raíz del proyecto

```sh
cd my-brand-backend
```

3. Copia el archivo `.env.example`

```sh
cp .env.example .env
```

4. Modifica el archivo `.env` para colocar tus credenciales de acceso a la base de datos. Por defecto, se ejecuta en el puerto 3306. Funciona con MySQL y MariaDB.

```
DB_DATABASE=<nombre de la base de datos>
DB_USERNAME=<usuario>
DB_PASSWORD=<contraseña>
```

5. Instala las dependencias

```sh
composer install
```

6. Ejecuta las migraciones

```sh
php artisan migrate
```

7. Ejecuta el proyecto

```sh
php artisan serve
```
