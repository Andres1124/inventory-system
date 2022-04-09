La base de datos se encuentra en BD->invenotryBD.sql

Importar base de datos al gestor de base de datos de su preferencia

Configurar conexión con base de datos en el archivo app->config->config.php:

define("DB_HOST", "localhost"); -> definir su host
define("DB_NAME", "inventory"); -> definir nombre de la base de datos
define("DB_USER", "root"); -> definir usuario
define("DB_PASSWORD", "qwerty"); -> definir contraseña

Este sistema está construido con el patron de diseño MVC (Modelo Vista Controlador).

Las consultas de los productos con más stock y lo más vendidos están en el archivo BD->consultas.sql

Guardar carpeta del proyecto en Xampp->htdocs (Recomendado)



