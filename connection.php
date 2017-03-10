<?php
$connection = mysqli_connect('localhost','root','') or die("connection error");
mysqli_select_db($connection,'formtask') or die('db error');

?>