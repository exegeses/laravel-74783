# Models

> los modelos son clases para interactuar directamente con una tabla
> en los modelos como en cualquier clase podemos tener métodos y atributos

## creación: 

> para crear un modelo tenemos un comando make

    php artisan make:model Nombre  

> por ejemplo un Model para la tabla marcas sería

    php artisan make:model Marca  

## atributos

> cuando queríamos un model vamos a necesitar configurar algunos atributos específicos que tienen que ver con cada una de las tablas
> Laravel asume que cada una de las tablas es el nombre del Model en  minúscula y en plural 

    protected $table ='nombre_tabla';
 
> Por ejemplo Laravel asume que cada una de las tablas tiene un primary key llamado "id"
> si necesitamos modificar el nombre del primary key lo podemos hacer mediante el atributo protegido "$primaryKey"

    protected $primaryKey = 'idMarca';  


> Laravel asume que cada una de nuestras tablas tienen dos atributos relacionados a fecha de creación (created_at) y fecha de modificación (updated_at)
> Si nosotros no vamos a usar estos atributos los desactivamos con el método público 'timestamps'

    public $timestamps = false;  


## métodos

