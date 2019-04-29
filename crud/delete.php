<?php
$con = mysqli_connect('127.0.0.1','root','','crud');

$id = $_GET['id'];
$q = $con->query("DELETE FROM back where id = $id");

header('location:location:view.php');

?>