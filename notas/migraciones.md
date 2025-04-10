# Migraciones 

> Las migraciones son clases que nos van a servir para crear nuevas tablas o modificar tablas existentes. También pueden eliminar tablas existentes
> Para crear una migración utilizamos el comando

    php artisan make:migracion nombre

> Para crear una nueva tabla se suele utilizar un prefijo y un sufijo
> El prefijo es 'create'
> El sufijo es 'table'

> Entonces si quiero crear una tabla llamada marcas

    php artisan make:migracion create_marcas_table  

> Una vez creada la tabla nos vamos a encontrar con que tenemos dos métodos. 
> El método 'up()' que es el encargado de crear la nueva tabla
> El método 'down()' que es el encargado de eliminar una tabla

    public function up(): void
    {
        Schema::create('marcas', function (Blueprint $table) {
            $table->tinyIncrements('idMarca');
            $table->string('mkNombre', 45)->unique();
        });
    }


> Dentro de este método vamos a especificar cada una de las columnas con sus características y restricciones
> podemos ver un listado de los tipos de datos y características y restricciones de los campos en la siguiente URL
> https://laravel.com/docs/12.x/migrations#available-column-types

## correr migraciones

    php artisan migrate  

## rollback

> si no se equivocamos o queremos volver hacia atrás en la creación de una tabla podemos invocar a un comando para lograr esto

    php artisan migrate:rollback  

> esto volvera hacia atrás un paso mediante la ejecución del método down() o chequeando en la tabla 'migrations' que migraciones ejecutaron recientemente

## modificación de estructura

> si luego de varias migraciones ejecutadas nos damos cuenta que queremos modificar la estructura de una tabla, no nos conviene volver hacia atrás en varias migraciones.
> en este caso nos conviene generar una nueva migración para modificar esa tabla existente

    php artisan make:migration update_marcas_table

> en este caso el prefijo que vamos usar es "update"
> Y luego simplemente modificamos la estructura de la tabla y corremos la nueva migración
