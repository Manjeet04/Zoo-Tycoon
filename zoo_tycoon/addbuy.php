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
				$animal = $_POST['anibuy'];
				$count = $_POST['count'];

				$con=mysqli_connect($servername,$username,$password,$database);
				$sql1 = "SELECT * FROM animals where animals.Name ='$animal'";
				$sql = "UPDATE animals SET Count= Count - '$count'  where Name='$animal'";
				$result = $con->query($sql1);
				mysqli_query($con, $sql);
								
								
				if ($result->num_rows > 0) {
									
					$row = $result->fetch_assoc();
					
					$tcost = $count * $row['Cost'];

					echo "<span style = \"color:red; font-family: \"Comic Sans MS\", cursive, sans-seri\"><div align = \"center\"><h1> PURCHASE SUCCESS!! </h1></div></span>";
					echo "<font size=\"5\"><span style = \"color:aqua; text-shadow : 4px 4px 8px red ; font-family: \"Comic Sans MS\", cursive, sans-seri\"><br>&emsp;&emsp;Animal purchased : &emsp;</span> <span style = \"color:red; font-family: \"Comic Sans MS\", cursive, sans-seri\">" .$animal." </span></font>";
					
					echo "<font size=\"5\"><span style = \"color:aqua; text-shadow : 4px 4px 8px red ; font-family: \"Comic Sans MS\", cursive, sans-seri\"><br><br>&emsp;&emsp;Quantity Purcahsed : &emsp;</span> <span style = \"color:red; font-family: \"Comic Sans MS\", cursive, sans-seri\">" .$count." </span></font>";

					echo "<font size=\"5\"><span style = \"color:aqua; text-shadow : 4px 4px 8px red ; font-family: \"Comic Sans MS\", cursive, sans-seri\"><br><br>&emsp;&emsp;Cost per quantity : &emsp;</span> <span style = \"color:red; font-family: \"Comic Sans MS\", cursive, sans-seri\">" .$row['Cost']." </span></font>";

					echo "<font size=\"5\"><span style = \"color:aqua; text-shadow : 4px 4px 8px red ; font-family: \"Comic Sans MS\", cursive, sans-seri\"><br><br>&emsp;&emsp;Total Cost Incurred : &emsp;</span> <span style = \"color:red; font-family: \"Comic Sans MS\", cursive, sans-seri\">" .$tcost." </span></font>";

					echo "<font size=\"5\"><span style = \"color:aqua; text-shadow : 4px 4px 8px red ; font-family: \"Comic Sans MS\", cursive, sans-seri\"><br><br>&emsp;&emsp;</span> <span style = \"color:red; font-family: \"Comic Sans MS\", cursive, sans-seri\">" .$count."&emsp;".$animal."&emsp;has been decreased from Zoo </span></font>";



					echo "<font size=\"6\"><center><span style = \"color:lime; text-shadow : 4px 4px 8px red ; font-family: \"Comic Sans MS\", cursive, sans-seri\"><br>&emsp;&emsp;HappY Shopping!! Hope You VisiT Again :) &emsp;</span></center></font>";


									
				}
				
				$con->close();
									
								
								
								
								
			?>
			
		
	</body>

</html>