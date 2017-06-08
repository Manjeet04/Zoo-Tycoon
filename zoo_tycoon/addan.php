<?php

	session_start();
?>
<html >
	<head>
		
<style type="text/css">
	
	body{

		background-image: url("Zoo-TV-Series-Pictures.jpg");
background-size: 1280px 450px;
	}
</style>
		
		<title>login</title>
		

	</head>


	<body>
		
								
							


		<?php
		
		
				$servername = "localhost";
				$username = "root";
				$password = "";
				$dbname = "test";
				$animals = $_POST['animals'];
				$count = $_POST['a_count'];
				
				
				
			
								
				$conn = mysqli_connect($servername, $username, $password, $dbname);
				// Check connection
				if (!$conn) {
					die("Connection failed: " . mysqli_connect_error());
					}

				$sql = "UPDATE animals SET Count= Count + '$count'  where animals.Name='$animals'";
				$sql1 = "SELECT * FROM animals where animals.Name='$animals'";
				mysqli_query($conn, $sql);
				    $result = $conn->query($sql1);

				if (mysqli_query($conn, $sql1)) {
					
					
				    $row = $result->fetch_assoc();
				    

				    echo "<span style = \"color:red; font-family: \"Comic Sans MS\", cursive, sans-seri\"><div align = \"center\"><h1> ANIMAL UPDATE SUCCESS!! </h1></div></span>";
				    echo "<font size=\"6\"><span style = \"color:aqua; text-shadow : 4px 4px 8px red ; font-family: \"Comic Sans MS\", cursive, sans-seri\"><br>&emsp;&emsp;The animal you selected is : &emsp; ".$row['Name']."</span></font>";
				    echo "<font size=\"6\"><span style = \"color:aqua; text-shadow : 4px 4px 8px red ; font-family: \"Comic Sans MS\", cursive, sans-seri\"><br>&emsp;&emsp;The updated animal count is : &emsp;".$row['Count']."</span></font>";
					} 
				else {
					echo "Error: " . $sql . "<br>" . mysqli_error($conn);
					}
									
				mysqli_close($conn);
		?>
								

		
	</body>

</html>