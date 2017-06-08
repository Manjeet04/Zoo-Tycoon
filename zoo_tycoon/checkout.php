<?php session_start(); ?>
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
								
				$servername="localhost";
				$username="root";
				$password="";
				$database="test";
				$ID = $_POST['ID'];
				$hour = $_POST['hour'];

				$con=mysqli_connect($servername,$username,$password,$database);
				$sql1 = "SELECT * FROM guest where guest.ID ='$ID'";
				$result = $con->query($sql1);
								
								
				if ($result->num_rows > 0) {
									
					$row = $result->fetch_assoc();
					$dhours = $row['hour_in'];
					$hours = abs($hour - $dhours);
					$route = $row['Route'];
					$sql2 = "SELECT * FROM route,guest where route.ID=guest.Route AND guest.ID = '$ID'"  ;
					$result2 = $con->query($sql2);
					$row1 = $result2->fetch_assoc();
					$tcost = $hours * $row1['Cost'] * $row['Number1'];
					echo "<span style = \"color:red; font-family: \"Comic Sans MS\", cursive, sans-seri\"><div align = \"center\"><h1> BILL SUMMARY </h1></div></span>";
					echo "<font size=\"5\"><span style = \"color:aqua; text-shadow : 4px 4px 8px red ; font-family: \"Comic Sans MS\", cursive, sans-seri\"><br>&emsp;&emsp;Number of hours spent are : &emsp;</span> <span style = \"color:red; font-family: \"Comic Sans MS\", cursive, sans-seri\">" .$hours." </span></font>";
					
					echo "<font size=\"5\"><span style = \"color:aqua; text-shadow : 4px 4px 8px red ; font-family: \"Comic Sans MS\", cursive, sans-seri\"><br><br>&emsp;&emsp;Your route cost (per hour) : &emsp;</span> <span style = \"color:red; font-family: \"Comic Sans MS\", cursive, sans-seri\">" .$row1['Cost']." </span></font>";
					echo "<font size=\"5\"><span style = \"color:aqua; text-shadow : 4px 4px 8px red ; font-family: \"Comic Sans MS\", cursive, sans-seri\"><br><br>&emsp;&emsp;Number of tickets : &emsp;&nbsp;&emsp;&emsp;&emsp;</span> <span style = \"color:red; font-family: \"Comic Sans MS\", cursive, sans-seri\">" .$row['Number1']." </span></font>";

					echo "<font size=\"5\"><span style = \"color:aqua; text-shadow : 4px 4px 8px red ; font-family: \"Comic Sans MS\", cursive, sans-seri\"><br><br>&emsp;&emsp;Total Cost Incurred Rs. : &nbsp;&emsp;</span> <span style = \"color:red; font-family: \"Comic Sans MS\", cursive, sans-seri\"><b></span><span style = \"color:white;text-shadow : 4px 4px 8px red ;\">" .$tcost." </b></span></font>";

					echo "<font size=\"6\"><center><span style = \"color:lime; text-shadow : 4px 4px 8px red ; font-family: \"Comic Sans MS\", cursive, sans-seri\"><br>&emsp;&emsp;Thank U For Vist!! Hope You VisiT Again :) &emsp;</span></center></font>";


									
				}
				else {

                          
                         echo "<font size=\"6\"><center><span style = \"color:lime; text-shadow : 4px 4px 8px red ; font-family: \"Comic Sans MS\", cursive, sans-seri\"><br>&emsp;&emsp;SorrY WronG ID :( &emsp;</span></center></font>";


				}
				
				$con->close();
									
								
								
								
								
			?>
			
		
	</body>

</html>