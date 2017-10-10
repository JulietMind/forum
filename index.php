<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Forum</title>
</head>
<body>
	
<ul>
	<li><a id="portada" href="?id=portada.php">Portada</a></li>
	<li><a id="foro" href="?id=foro">Foro</a></li>
	<li><a href="?id=grupos">Grupos de trabajo</a></li>
	<li><a href="?id=faq">FAQ</a></li>
</ul>

<?php 


$page = $_GET['id'];
// REQUEST_URI
if (isset($page)){

	switch ($_GET['id']) {
		case 'foro':
			include('foro.php');
			break;

		case 'grupos':
			include('grupos.php');
			break;
		
		case 'faq':
			include('faq.php');
			break;

		default:
			include('portada.php');
			break;
	}
}
?>


</body>
</html>