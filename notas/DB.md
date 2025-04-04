# Capas para interactuar con un servidor de base de datos base de datos documentales

> Laravel utiliza de Factory PDO y la configuración base está en el archivo de configuración general .env
> Arriba de esta capa utiliza dos capas más que siguen un patrón de diseño: el patrón Façade

> el patrón Façade (fachada) es simplemente una clase que te va a dar una serie de métodos para simplificar el trabajo

## métodos en raw SQL

    DB::select()  
    DB::insert()  
    DB::update()  
    DB::delete()  

> dentro de los paréntesis sólo se puede escribir el SQL para la tarea que queremos llevar a cabo

## métodos en Fluent Query Builder

    DB::table('nTabla')->get()  
    DB::table('nTabla')->select('columnas')  
    DB::table('nTabla')->where()->first()

    DB::table('nTabla')->insert([])

    DB::table('nTabla')->update([])

    DB::table('nTabla')->delete()  