# Models

> los modelos son clases para interactuar directamente con una tabla
> en los modelos como en cualquier clase podemos tener métodos y atributos

## creación: 

> para crear un modelo tenemos un comando make

    php artisan make:model Nombre  

> por ejemplo un Model para la tabla marcas sería

    php artisan make:model Marca  

## atributos

> cuando queríamos un motel vamos a necesitar configurar algunos atributos específicos que tienen que ver con cada una de las tablas
> Laravel asume que cada una de las tablas es el nombre del Model en  minúscula y en plural 

    protected $table ='nombre_tabla';
 
> por ejemplo Laravel asume que cada una de las tablas tiene un primary key llamado "id"


## métodos

