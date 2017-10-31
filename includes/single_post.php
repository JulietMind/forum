<?php 
if(isset($_GET['id'])){
	$id=$_GET['id'];
	include('includes/'.$id.'.php');
}?>