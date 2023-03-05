# Sistema de gestión de stock para BikeShop

Una aplicación web para la gestión del stock de productos asociados al negocio en cuestión. Con operaciones para llevar el control de productos, categorías, clientes, ventas y más.

## Tecnologías involucradas
- PHP - CodeIgniter 4
- PostgreSQL
- HTML
- CSS / Bootstrap
- JavaScript / JQuery
- Ajax
- WAPP

## Instalación

Es necesario tener instalado previamente PHP y un servidor Apache (o una pila como WAPP o XAMPP). Algunos comandos útiles:
```bash
  git clone https://github.com/ggallardo97/BikeShop-System
  cd Quizzer-System
```

En segundo lugar, modificar el archivo .env con la información para la conección a la base de datos:
- database.default.hostname = localhost
- database.default.database = nombredelabasededatos
- database.default.username = postgres
- database.default.password = contraseñadelusuario
- database.default.DBDriver = postgre
- database.default.port     = 5432

Finalmente, crear la base de datos y ejecutar el seeder que contiene una cuenta de tipo administrador:
```bash
  php spark db:create yourdbname
  php spark migrate
  php spark db:seed UserSeeder
  php spark db:seed ClienteSeeder
```

## Uso

Para cada sección del sistema, se permiten operaciones para crear, leer, editar y eliminar(bajas lógicas) la información de los registros, según corresponda. La navegación del sistema ofrece:
- Productos
- Categorías
- Historial de ventas
- Clientes
- Cierres
- Estadísticas

Para registrar las ventas del día, es necesario "iniciar la jornada" con el botón de encendido (ubicado en la parte superior derecha de la página), y luego, al finalizarla, se debe cerrar dicha jornada con el mismo botón. De esta forma se guardará la información asociada a las ventas durante el periodo que dure la jornada (al usar cookies, tiene una duración máxima de 3 días, pero lo ideal es hacerlo cada día).
Al registrar una venta, puede elegir guardar los datos del cliente o no, como así también registrar el tipo de pago efectuado. 

