
<html >
	<head>
		
		
		<title>Login</title>
		

	</head>


	<body>
		
								
							


		<?php
				$servername = "localhost";
				$username = "root";
				$password = "";
				$dbname = "demo";
				$uid = $_POST['userid'];
				$pass = $_POST['passid'];
				$name = $_POST['username'];
				$age = $_POST['age'];
				$cont = $_POST['contact'];
								
				$conn = mysqli_connect($servername, $username, $password, $dbname);
				// Check connection
				if (!$conn) {
					die("Connection failed: " . mysqli_connect_error());
					}

				$sql = "INSERT INTO users (username,password,name,phone,age)
				VALUES ('$uid', '$pass', '$name','$cont', '$age')";

				if (mysqli_query($conn, $sql)) {
					echo "Your account has been created successfully<br>Redirecting to login page in 3 seconds<br>";
					header("refresh:3; url=login.html");
					} 
				else {
					echo "Error: " . $sql . "<br>" . mysqli_error($conn);
					}
									
				mysqli_close($conn);
		?>
								

		
	</body>

</html>