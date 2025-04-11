# Controllers

> Los controladores son clases adonde vamos a generar toda la lógica de negocios
> Podemos generar la lógica de negocios en el enrutador; pero el Enrutador no está pensado para eso

> podemos crear un controlador con el siguiente comando

    php artisan make:controller NombreController

> El nombre será el nombre del modelo asociado
> controller es un sufijo que asignamos

    php artisan make:controller PruebaController  

> generalmente solemos utilizar un modificador para que nos genere los métodos estándar

    php artisan make:controller MarcaController -r  
