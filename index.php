<?php 
include('includes/head.php'); 
include('includes/nav.php'); 


// MAIN LOOP
// $page = $_GET{'id'};

if(isset($_GET['id'])){
	switch ($_GET['id']) {
		case 'foro':
			include('includes/foro.php');
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
	}
}


include('includes/footer.php'); ?>

