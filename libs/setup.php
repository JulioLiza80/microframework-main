<?php
// Obtiene la instancia del objeto que guarda los datos de configuración
$config = Config::singleton();

// Carpetas para los Controladores, los Modelos y las Vistas
$config->set('controllersFolder', 'controllers/');
$config->set('modelsFolder', 'models/');
$config->set('viewsFolder', 'views/');

// Parámetros de conexión a la BD
// Parámetros de conexión a la BD
//$config->set('dbhost', 'localhost');
//$config->set('dbname', 'test');
//$config->set('dbuser', 'root');
//$config->set('dbpass', '');


$config->set('dbhost', 'roundhouse.proxy.rlwy.net:30813');
$config->set('dbname', 'railway');
$config->set('dbuser', 'root');
$config->set('dbpass', '1152HGedEAhG3cEcFGABDAd-1B1dC61G');

//mysql://root:MReAICGr5qPiqK6JHE9C@containers-us-west-179.railway.app:5845/railway
//mysql://root:1152HGedEAhG3cEcFGABDAd-1B1dC61G@roundhouse.proxy.rlwy.net:30813/railway
//1152HGedEAhG3cEcFGABDAd-1B1dC61G
?>