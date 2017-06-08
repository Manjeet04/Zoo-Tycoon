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
		
		<title>addemp</title>
		

	</head>


	<body>
		
								
							


		<?php
		
		
				$servername = "localhost";
				$username = "root";
				$password = "";
				$dbname = "test";
				$emp = $_POST['worker'];
				$count = $_POST['e_count'];
				
				
				
			
								
				$conn = mysqli_connect($servername, $username, $password, $dbname);
				// Check connection
				if (!$conn) {
					die("Connection failed: " . mysqli_connect_error());
					}

				$sql = "UPDATE employees SET Count= Count + '$count'  where Designation='$emp'";
				$sql1 = "SELECT * FROM employees where employees.Designation='$emp'";
				    $result = $conn->query($sql1);

				if (mysqli_query($conn, $sql)) {
					
					
				    $row = $result->fetch_assoc();
				    $rowc = $row['Count'] + $count ;

				    echo "<span style = \"color:red; font-family: \"Comic Sans MS\", cursive, sans-seri\"><div align = \"center\"><h1>EMPLOYEE UPDATE SUCCESS!! </h1></div></span>";
				    echo "<font size=\"6\"><span style = \"color:aqua; text-shadow : 4px 4px 8px red ; font-family: \"Comic Sans MS\", cursive, sans-seri\"><br>&emsp;&emsp;The worker you selected is : &emsp; ".$row['Designation']."</span></font>";
				    echo "<font size=\"6\"><span style = \"color:aqua; text-shadow : 4px 4px 8px red ; font-family: \"Comic Sans MS\", cursive, sans-seri\"><br>&emsp;&emsp;The updated worker count is : &emsp;".$rowc."</span></font>";
					} 
				else {
					echo "Error: " . $sql . "<br>" . mysqli_error($conn);
					}
									
				mysqli_close($conn);
		?>
								

		
	</body>

</html>