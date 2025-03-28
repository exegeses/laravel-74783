# Peticiones + Rutas + Vistas

> Laravel funciona como cualquier otro servicio en la nube.
> Utiliza el sistema de pediciones HTTP

> nosotros hacemos un Request y recibimos un Response

> los métodos estándar HTTP son

1. get
2. post
3. put
4. patch
5. delete


> Cuando nosotros hacemos peticiones a un proyecto de Laravel, 
> estamos pidiéndole al enrutador que nos devuelva un recurso

> qué es el enrutador? 
> Éste es un software que recibe peticiones y decide cómo responder

> El enrutador es una clase llamada "Route" que recibe peticiones
> específicamente es el archivo "web.php"

    Route::get('/peticion', acción); 

