<?php 
$titulo = $_POST['titulo'];
$mensaje = $_POST['mensaje'];
// $fecha = date("Y-m-d H:i:s");

// ======= CONECTAR BASE DE DATOS =======
require_once('conectardb.php');


$tema_sql = "INSERT INTO temas_foro (titulo_tema, mensaje_tema, fecha_creacion) VALUES ('$titulo','$mensaje',NOW())";
// $tema_sql = "INSERT INTO 'temas_foro' (titulo_tema, mensaje_tema, fecha_creacion) VALUES ('hola', 'mensaje', 'null')";

mysqli_query($conectarbd, $tema_sql);



// $var = htmlentities($_SESSION['NumCedula'],ENT_QUOTES,'utf-8')

require_once('cerrar_conexion.php');

echo '<p>Tu tema ha sido creado</p> 
<p><a href="javascript:history.go(-1)>Volver al foro</a></p>';

 ?>