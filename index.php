<?php 
include('includes/head.php'); 
include('includes/nav.php'); 


// MAIN LOOP
// $page = $_GET{'id'};

if(isset($_GET['id'])){
	$id=$_GET['id'];
	include('includes/'.$id.'.php');
}


if(isset($_GET['p'])){
	$p=$_GET['p'];
	include('includes/'.$p.'.php');
}

include('includes/footer.php'); ?>


<!-- 	switch ($_GET['id']) {
		case 'foro':
	break;
		case 'grupos':
			include('includes/grupos.php');
			break;
		case 'faq':
			include('includes/faq.php');
			break;
		default:
			include('includes/portada.php');
			break;
 -->
