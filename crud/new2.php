<?php
	$con = mysqli_connect('127.0.0.1','root','','crud');
	if($con)
	{
		echo"connection";
	}
	else
	{
		echo "database not selected";
	}
	if(isset($_POST['submit']))
{
	$name = $_POST['fullname'];
	$passwd = $_POST['username'];
	$roll = $_POST['rollno'];
	$class = $_POST['class'];
	$dist = $_POST['district'];
	$city = $_POST['city'];
	$parents = $_POST['parents'];
	$occup = $_POST['occuption'];
	$school = $_POST['school'];
	$bus = $_POST['busno'];

	$sql = $con->query ("INSERT INTO back (fullname, username, rollno, class, district, city, parents, occuption, school, busno) VALUES ('$name', '$passwd', '$roll', '$class', '$dist', '$city', '$parents', '$occup', '$school', $bus)");
}
	?>
<html>
<head>
	<style>
		.container{
			width:50%;
			height:50%;
		}
		div
		{
			padding:10px;
			margin:20px;
			border:2px;
		
		}
</style>
</head>
<body>
<center>
<div class="container">
<form action="new2.php" method="POST">
	<h1> INSERT TABLE </h1>
		<div>fullname<input type="text" name="fullname"></div>
		<div>username<input type="text" name="username"></div>
		<div>roll no<input type="text" name="rollno"></div>
		<div>class<input type="text" name="class"></div>
		<div>district<input type="text" name="district"></div>
		<div>city<input type="text" name="city"></div>
		<div>parents<input type ="text" name="parents"></div>
		<div>occuption<input type="text" name="occuption"></div>
		<div>school<input type="text" name="school"></div>
		<div>Bus no<input type="number" name="busno"></div>
		<div><input type="submit" name="submit" value="Submit"></div>
	</form>
	</center>
</div>
</body>
</html>