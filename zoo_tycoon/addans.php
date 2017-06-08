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
		
		<title>logins</title>
		

	</head>


	<body>
		
								
							


		<?php
		
		
				$servername = "localhost";
				$username = "root";
				$password = "";
				$dbname = "test";
				$animals = $_POST['animalsa'];
				
				
				
				
			
								
				$conn = mysqli_connect($servername, $username, $password, $dbname);
				// Check connection
				if (!$conn) {
					die("Connection failed: " . mysqli_connect_error());
					}

				
				$sql1 = "SELECT * FROM animals where animals.Name='$animals'";
				    $result = $conn->query($sql1);

				if (mysqli_query($conn, $sql1)) {
					
					
				    $row = $result->fetch_assoc();

				    echo "<span style = \"color:red; font-family: \"Comic Sans MS\", cursive, sans-seri\"><div align = \"center\"><h1> ANIMAL INFORMATION </h1></div></span>";
				    echo "<font size=\"6\"><span style = \"color:aqua; text-shadow : 4px 4px 8px red ; font-family: \"Comic Sans MS\", cursive, sans-seri\"><br>&emsp;&emsp;The animal you selected is : &emsp;</span> <span style = \"color:red; font-family: \"Comic Sans MS\", cursive, sans-seri\">" .$row['Name']." </span></font>";
				    echo "<font size=\"6\"><span style = \"color:aqua; text-shadow : 4px 4px 8px red ; font-family: \"Comic Sans MS\", cursive, sans-seri\"><br>&emsp;&emsp;The animal ID is : &emsp;&emsp;&emsp;&emsp;&emsp;" .$row['ID']. "</span></font>";
				    echo "<font size=\"6\"><span style = \"color:aqua; text-shadow : 4px 4px 8px red ; font-family: \"Comic Sans MS\", cursive, sans-seri\"><br>&emsp;&emsp;The animal count is :&nbsp;&emsp;&emsp; &emsp;" .$row['Count']. "</span></font>";
				    echo "<font size=\"6\"><span style = \"color:aqua; text-shadow : 4px 4px 8px red ; font-family: \"Comic Sans MS\", cursive, sans-seri\"><br>&emsp;&emsp;The animal cage number is : &emsp;" .$row['Cage_no']. "</span></font>";
				    echo "<font size=\"6\"><span style = \"color:aqua; text-shadow : 4px 4px 8px red ; font-family: \"Comic Sans MS\", cursive, sans-seri\"><br>&emsp;&emsp;The animal diet is :&emsp;&nbsp;&nbsp;&emsp;&emsp; &emsp;" .$row['Diet']. "</span></font>";
				    echo "<font size=\"6\"><span style = \"color:aqua; text-shadow : 4px 4px 8px red ; font-family: \"Comic Sans MS\", cursive, sans-seri\"><br>&emsp;&emsp;The animal Cost(in Rs.) is :&emsp;&nbsp;&nbsp;&emsp;&emsp; &emsp;" .$row['Cost']. "</span></font>";

					} 
				else {
					echo "Error: " . $sql1 . "<br>" . mysqli_error($conn);
					}
									
				mysqli_close($conn);
		?>
								

		
	</body>

</html>