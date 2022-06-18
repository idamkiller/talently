# Talently Challenge

Saludos `Emmanuel` y `Cristian`, esta es mi respuesta al Challenge, es interesante usar `Kahlan` la verdad nunca lo había escuchado.

Fue un reto muy agradable y espero que mi código sea de su agrado.

# Preguntas de conocimiento en Laravel

1. Qué paquete o estrategia utilizarías para levantar un sistema de administración rápidamente? (Autenticación y CRUDs)

    E usado Laravel Voyager para la implementación de un panel administrativo rápidamente, el cual ya integra CRUDs, roles y demás necesidades.
    
    Aunque normalmente lo que hago es usar Laravel Sanctum para autenticarme mediante tokens, Laravel Permissions para controlar los roles y permisos dentro de la aplicación y los CRUDs normalmente a mano ya si demanda algo de rapidez uso Laravel Crud Generator.

2. Una breve explicación de cómo laravel utiliza la injección de dependencias

    Laravel usa el Service Container para administrar en esté las dependencias de clases, permitiendo que este contenedor resuelva las dependencias por nosotros, evitando tener que instanciar los objetos nosotros mismos.

3. En qué casos utilizarías un Query Scope?

    Usaría un Query Scope cuando tenga uno o varios métodos repetitivos en mis consultas. Por ejemplo, si tengo un foro o blog y por requerimientos siempre debe retornar los resultados de los últimos 6 meses, usaría un Query Scope que permita realizar este filtro y así evitar reescribirlo en todas mis consultas.

4. Qué convenciones utilizas en la creación e implementación de migraciones?
    
    •	Si debo crear una tabla lo haría así:
    `create_nombre_tabla_table`
    El nombre de la tabla en plural.
    •	Para agregar un nuevo campo a tabla existente:
    `add_campo_to_tabla`
    •	Para modificar un campo a tabla:
    `edit_campo_to_nullable_to_tabla`
    Donde nullable sería la característica que le agregaría al campo.

