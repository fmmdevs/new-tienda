## Instrucciones puesta en marcha en local
Clonamos el projecto
```bash
git clone https://github.com/fmmdevs/new-tienda.git
```
Nos situamos en el directorio del proyecto
```sh
cd new-tienda
```
Instalamos dependencias
```undefined
composer install
```
Copiamos el archivo .env.example con las variables de entorno, renombrandolo a .env
```bash
cp .env.example .env
```
Generamos key
```vbnet
php artisan key:generate
```
Agregamos informacion al archivo .env
conexion bbdd
```ini
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=tienda
DB_USERNAME= TU USUARIO
DB_PASSWORD= TU CONTRASEÑA
```
email
```ini
MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=465
MAIL_USERNAME=TU EMAIL GMAIL
MAIL_PASSWORD=TU APP PASSWORD
MAIL_ENCRYPTION=ssl
MAIL_FROM_ADDRESS= TU EMAIL GMAIL
MAIL_FROM_NAME="Minimal T-Shirts"

```
Para que cuando creemos productos se guarde y cargue la image, crear en enlace simbolico(un acceso directo) a la carpeta storage dentro de /public
```bash
php artisan storage:link
```
Hacemos las migraciones para que se nos creen las tablas de las bases de datos . --seed ejecuta los seeders, añade contenido a las tablas
```lua
php artisan migrate --seed
```

Para que las imagenes de los productos de los seeders se vean hay que copiar la carpeta public/img/seeders a public/storage/img/
Desde la carpeta del proyecto:
```bash
cp -r --parents public/img/seeds storage/app  
```

Para servir el proyecto :
```undefined
npm install
npm run dev
```
Dejamos esta consola funcionando y abrimos otra
```undefined
php artisan serve
```

Los datos de acceso del usuario admin
```ini
 'email' => 'admin@admin.com',
 'password' => 'admin',
```
(en database/seeders vienen todos las categorias, productos y usuarios que hemos añadido)