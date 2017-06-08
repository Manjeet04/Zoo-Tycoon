<?php session_start(); ?>
<html >
	<head>
		
		
	<title>Login</title>
		

	</head>


	<body>
		

	<?php
		// Check if session is not registered, redirect back to main page. 
		
		if(!isset($_SESSION['username'])) {
		header("location:login.html");
		}
	?>

	
								
								
	

								
	<center>							
	Welcome <?php 
								
				$servername="localhost";
				$username="root";
				$password="";
				$database="demo";
				$var = $_SESSION['username'];
				$con=mysqli_connect($servername,$username,$password,$database);
				$sql1 = "SELECT * FROM users where users.username='$var'";
				$result = $con->query($sql1);
								
								
				if ($result->num_rows > 0) {
									
					$row = $result->fetch_assoc();
					echo $row["name"]."<br>"."<b>Password:</b>".$row["password"]."<br>"."<b>Contact:</b>".$row["phone"]."<br>"."<b>Age:</b>".$row["age"];
									
				}
				$con->close();
									
								
								
								
								
			?></center>
	<div>
	<p align="left"><a href="logout.php"><input type="button" value="LOGOUT"></a></p></div>
	<div>
	<p align="center"><a href="updateform.php"><input type="button" value="UPDATE"></a></p></div>
	
	<div>
	<p align="right"><a href="thanku.php"><input type="button" value="DELETE ACCOUNT"></a></p><br><br></div>
			
		
	</body>

</html>