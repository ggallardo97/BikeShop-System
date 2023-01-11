# Sistema de gestión de stock para BikeShop

Una aplicación web para la gestión del stock de productos asociados al negocio en cuestión. Con operaciones para llevar el control de productos, categorías, clientes, ventas y más.

## Tecnologías involucradas
- PHP - CodeIgniter 4
- PostgreSQL
- HTML
- CSS / Bootstrap
- JavaScript / JQuery
- WAPP

## Instalación

Es necesario tener instalado previamente PHP y un servidor Apache (o una pila como WAPP o XAMPP). Algunos comandos útiles:
```bash
  git clone Quizzer-System
  cd Quizzer-System
```

En segundo lugar, modificar el archivo .env con la información para la conección a la base de datos:
- database.default.hostname = localhost
- database.default.database = bikeshopdb
- database.default.username = postgres
- database.default.password = tucontraseñaaqui
- database.default.DBDriver = postgre
- database.default.port     = 5432

Finalmente, crear la base de datos y ejecutar el seeder que contiene una cuenta de tipo administrador:
```bash
  php spark db:create yourdbname
  php spark migrate
  php spark db:seed UserSeeder
```

## Uso

With the teacher account you can:
- create, read, edit and delete multiple choices tests
- create, read, edit and delete choices for the tests
- get information of your students' scores and some addtional data

With the student account (you can create one through the register page) you can:
- get all available test
- take tests and get your scores (you have only one try)

