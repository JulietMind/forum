<?php 
// ======= DATOS CONEXION =======
$host = 'localhost';
$based = 'elxlabforum';
$usuario = 'root';
$clave = '';

$tabla_temas = 'temas_foro';
// ======= FIN DATOS CONEXION =======

$conectarbd = mysqli_connect($host, $usuario, $clave, $based) or die ('No se ha podido conectar con la base de datos');
$db = mysqli_select_db($conectarbd, $based) or die ('La base de datos <b>'.$based.'</b> no existe');
?>