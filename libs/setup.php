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


$config->set('dbhost', 'viaduct.proxy.rlwy.net:31197/railway');
$config->set('dbname', 'railway');
$config->set('dbuser', 'root');
$config->set('dbpass', 'HcB4gF2AaB5d6Cabc6-2bDBEFB1dhdFG');

//HcB4gF2AaB5d6Cabc6-2bDBEFB1dhdFG
//mysql://root:HcB4gF2AaB5d6Cabc6-2bDBEFB1dhdFG@viaduct.proxy.rlwy.net:31197/railway
//viaduct.proxy.rlwy.net
?>