<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to `the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).
`
## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## Seeders del Proyecto

**Estructura de los Seeders:**


Se estructuraron y ajustaron los seeders para poblar la base de datos con datos relevantes al funcionamiento de la aplicación. Se crearon/modificaron los siguientes archivos:

AdminSeeder.php: Se crearon 2 usuarios con rol de administrador.

ClientSeeder.php: Se crearon 3 usuarios con rol de cliente.

CategorySeeder.php: Hay 3 categorías base.

ProductSeeder.php: Crea 10 productos con datos falsos.


**Datos Generados por los Seeders**

- 2 Usuarios Admin

- 3 Usuarios Cliente

- 3 Categorías (asignadas aleatoriamente a productos)

**10 Productos:**

- Nombre y descripción generados con Faker.

- Existencias entre 6 y 9 unidades.

- Precios entre 30 y 60.

- Imagen por defecto: images/products/default.jpg.

- Categoría aleatoria entre las 3 existentes.

Validación Manual

Se realizaron las siguientes pruebas para verificar la correcta funcionalidad de los datos generados:

- Visualización de productos: Se accedió a la página de productos y se muestran correctamente los 10 productos creados con sus respectivas categorías.

- Login funcional: El inicio de sesión funciona correctamente tanto para usuarios Admin como Cliente creados desde el seeder.

Restricción por roles:

- El usuario Admin puede acceder sin problemas a la ruta de gestión de productos.

- El usuario Cliente al intentar acceder a esa misma ruta recibe un error apropiado, lo que confirma que la protección por rol se encuentra activa.

## Capturas de pantalla

Tabla Product en la base de datos

<img src="images/imagen2.jpg" width="600" alt="Productos listados">

Datos de los seeders del listado de productos
<img src="images/imagen4.jpg" width="600" alt="Productos listados">


Seeders que se agregaron y modificaron
<img src="images/imagen1.jpg" width="600" alt="Productos listados">

Historial de commits

<img src="images/imagen5.jpg" width="600" alt="Productos listados">
<img src="images/imagen6.jpg" width="600" alt="Productos listados">


