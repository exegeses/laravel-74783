# Seeders

> los Seeders son clases que nos van a servir para insertar datos dentro de tablas
> para crear un Seeder tenemos un comando make

    php artisan make:seeder nombre

> Es importante cuando le demos nombre al Seeder que tenga el nombre según la orientación a objetos y además el sufijo Seeder
> en la orientación a objetos cuando creamos una clase el nombre en mayúscula y en singular 
> por lo tanto para crear un Seeder para la tabla marcas el comando será:

    php artisan make:seeder MarcaSeeder  

> esto nos creará el seeder con el método run()
> en este método generaremos el código para insertar los datos que necesitemos

## correr seeders

> si queremos correr un seeder tenemos el comando

    php artisan db:seed  

> éste comando estaría corriendo el seeder llamado "DabaseSeeder"  

> si en cambio nosotros queremos correr un seeder en particular el comando será:

    php artisan db:seed --class=MarcaSeeder  

