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


$config->set('dbhost', '1152HGedEAhG3cEcFGABDAd-1B1dC61G@roundhouse.proxy.rlwy.net:30813/railway');
$config->set('dbname', 'railway');
$config->set('dbuser', 'root');
$config->set('dbpass', 'HcB4gF2AaB5d6Cabc6-2bDBEFB1dhdFG');

//HcB4gF2AaB5d6Cabc6-2bDBEFB1dhdFG
//mysql://root:1152HGedEAhG3cEcFGABDAd-1B1dC61G@roundhouse.proxy.rlwy.net:30813/railway
?>