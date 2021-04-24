
<?php
/*========================================================================
 * 
 * Bloque de requerimiento de controladores y modelos en la ruta principal
 * 
 *========================================================================*/
require_once __DIR__."/controllers/TempleteControlador.php";
require_once __DIR__."/controllers/UsuarioControlador.php";
require_once __DIR__."/controllers/ReporteControlador.php";

require_once __DIR__."/models/Usuario.php";
require_once __DIR__."/models/Reporte.php";

//Se instancia la clase del controlador que devuelve una vista principal
$templete = new TempleteControlador();
$templete-> index();