
<html >
	<head>
		<style type="text/css">
	
	body{

		background-image: url("Zoo-TV-Series-Pictures.jpg");
background-size: 1280px 450px;
}
</style>
		
		<title>Login</title>
		

	</head>


	<body>
		
								
							


		<?php
				$servername = "localhost";
				$username = "root";
				$password = "";
				$dbname = "test";
				$contact = $_POST['contact'];
				$name = $_POST['Name'];
				$route = $_POST['route'];
				$count = $_POST['count'];
				$hour = $_POST['hour'];
								
				$conn = mysqli_connect($servername, $username, $password, $dbname);
				// Check connection
				
				if (!$conn) {
					die("Connection failed: " . mysqli_connect_error());
					}

				$sql = "INSERT INTO guest (Name,Contact,Route,Number1,hour_in)
				VALUES ('$name','$contact','$route','$count','$hour')";

                $flag=0;
				if (mysqli_query($conn, $sql)) {
					$flag=1;
					echo "<span style = \"color:red; font-family: \"Comic Sans MS\", cursive, sans-seri\"><div align = \"center\"><h1> YOU HAVE SUCCESSFULLY CHECKED IN!! </h1></div></span>";
					
					
					} 
				else {
					echo "Error: " . $sql . "<br>" . mysqli_error($conn);
					}
				$sql1 = "SELECT * FROM guest where guest.Name='$name'";
				$result = $conn->query($sql1);
				if ($flag==1)
				{
                     $row = $result->fetch_assoc();
                     echo "<font size=\"6\"><span style = \"color:aqua; text-shadow : 4px 4px 8px red ; font-family: \"Comic Sans MS\", cursive, sans-seri\"><br>&emsp;&emsp;Your reference ID is : &emsp; ".$row['ID']."</span></font>";
                     echo "<font size=\"3\"><span style = \"color:aqua; text-shadow : 4px 4px 8px red ; font-family: \"Comic Sans MS\", cursive, sans-seri\"><br>&emsp;&emsp;Please remember reference ID for Check-Out process. &emsp;</span></font>";
                     echo "<font size=\"6\"><span style = \"color:aqua; text-shadow : 4px 4px 8px red ; font-family: \"Comic Sans MS\", cursive, sans-seri\"><br><br><br>&emsp;&emsp;Your Start hour is : &emsp; ".$row['hour_in']."</span></font>";
                     echo "<font size=\"6\"><center><span style = \"color:lime; text-shadow : 4px 4px 8px red ; font-family: \"Comic Sans MS\", cursive, sans-seri\"><br>&emsp;&emsp;HappY JourneY :) &emsp;</span></center></font>";



				}
									
				mysqli_close($conn);
		?>
								

		
	</body>

</html>