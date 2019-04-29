
<html>
<head>
<style>
	h1{
		padding-left:500px;
	}
		table{
			width:100%;
			text-align:center;
			font-family:arial;
			background-color: gray;
		}
	.button{
		border-radius:100%;
		background-color: gray;
	}
	.button2{
		border-radius:100%;
		background-color: gray;

	}
</style>
<h1> DISPLAY ALL DATA </h1>
	</head>
<body>
<table border="3">
<tr>
		<th>id</th>	
		<th>fullname</th>
		<th>username</th>
		<th>rollno</th>
		<th>class</th>
		<th>district</th>
		<th>city</th>
		<th>parents</th>
		<th>occuption</th>
		<th>school</th>
		<th>busno</th>
		<th>Delete</th>
		<th>Update</th>
</tr>
  	<?php
			$con = mysqli_connect('127.0.0.1','root','','crud');
 			$query =$con->query ("SELECT * FROM back");
 			while($res=mysqli_fetch_array($query))
 			{
	 			echo '
	 			<tr>
	 				<td>'.$res['id'].'</td>
					<td>'.$res['fullname'].'</td>
					<td>'.$res['username'].'</td>
					<td>'.$res['rollno'].'</td>
					<td>'.$res['class'].'</td>
					<td>'.$res['district'].'</td>
					<td>'.$res['city'].'</td>
					<td>'.$res['parents'].'</td>
					<td>'.$res['occuption'].'</td>
					<td>'.$res['school'].'</td>
					<td>'.$res['busno'].'</td>
					<td><button class="button"><a href="delete.php?id='.$res['id'].'">Delete</a></button></td>
					<td><button class="button2"><a href="update.php?id='.$res['id'].'">Update</a></button></td>
				</tr>';
			}
?>
</body>
</html>