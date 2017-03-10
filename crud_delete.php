<?php
 require 'connection.php';
 require 'function1.php';

 if(isset($_GET['id'])){
 	$id = $_GET['id'];
$var = delete($connection,$id);
if($var['succ']==1){
	header('location:crud_list.php');
}

 }
?>


