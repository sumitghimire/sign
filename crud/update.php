<?php
$con = mysqli_connect('127.0.0.1','root','','crud');
if(isset($_POST['update']))
{
	$id = $_GET['id'];
	$name = $_POST['fullname'];
	$user = $_POST['username'];
	$roll = $_POST['rollno'];
	$class = $_POST['class'];
	$dist = $_POST['district'];
	$city = $_POST['city'];
	$parents = $_POST['parents'];
	$occup = $_POST['occuption'];
	$school = $_POST['school'];
	$bus = $_POST['bus'];

$q = "UPDATE back  set fullname='$name', username='$user', rollno='$roll', class='$class', district='$dist', city='$city', parents='$parents',occuption='$occup', school='$school', bus= $bus where id = $id;

$query = mysqli_query($con,$q);

header('location:view.php');
}
?>
<html>
<body>
<center>
<form action="update.php" method="POST">
	<h1> UPDATE TABLE </h1>
		
		<div>fullname<input type="text" name="fullname"></div>
		<div>username<input type="text" name="username"></div>
		<div>roll no<input type="text" name="rollno"></div>
		<div>class<input type="text" name="class"></div>
		<div>district<input type="text" name="district"></div>
		<div>city<input type="text" name="city"></div>
		<div>parents<input type ="text" name="parents"></div>
		<div>occuption<input type="text" name="occuption"></div>
		<div>school<input type="text" name="school"></div>
		<div>Bus no<input type="number" name="bus"></div>
		<div><input type="submit" name="update"></div>
	</form>
	</center>
</body>
</html>