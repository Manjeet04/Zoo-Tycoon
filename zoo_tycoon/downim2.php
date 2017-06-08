<!DOCTYPE html>
<html>
<style>

.floating-box {
    display: inline-block;
    width: 150px;
    height: 55px;
    background-image: url("tigerst.jpg");
    border: 3px solid lime;  
}
.button2:hover {
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}

.black
{
   background-color : black;


}
input[type=submit]{
                 width: 70px;
                 position: absolute;

                 
                 background: #09c;
                 color: #fff;
                 font-family: tahoma,geneva,algerian;
                 height: 30px;
                 -webkit-border-radius: 15px;
                 -moz-border-radius: 15px;
                 border-radius: 15px;
                 border: 1px solid #999;
             }
select
{

   
   height: 29px;
   overflow: hidden;
   background-color: white; 
   width: 240px;
   -webkit-border-radius: 20px;
   -moz-border-radius: 20px;
   border-radius: 20px;



}

input[type=text]:focus {


    background-color: lightblue;
    border: 2px solid red;
    border-radius: 4px;
}
body {font-family: "Lato", sans-serif;
background-image: url("Zoo-TV-Series-Pictures.jpg");
background-size: 1280px 450px;}

ul.tab {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-image: url("tigerst.jpg")
}

/* Float the list items side by side */
ul.tab li {float: left;}

/* Style the links inside the list items */
ul.tab li a {
    display: inline-block;
    color:white;
    text-align: center;
    padding: 8px 8px;
    text-decoration: none;
    transition: 0.3s;
    font-size: 17px;
}

/* Change background color of links on hover */
ul.tab li a:hover {
    background-color: red;
}

/* Create an active/current tablink class */
ul.tab li a:focus, .active {
    background-color: green;
}

/* Style the tab content */
.tabcontent {
    display: none;
   
  
}

.topright {
 float: right;
 cursor: pointer;
 font-size: 20px;
}

.topright:hover {color: green;}
</style>
<body>

<ul class="tab">
  <li><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'Animal Info.')" id="defaultOpen">Animal Info.</a></li>
  <li><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'Show Animal Details')" >Show Animal Details</a></li>
  <li><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'Route Info.')" >Route Info. </a></li>
  <li><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'Check In')" >Check In</a></li>
  <li><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'Check Out')" >Check Out</a></li>
  <li><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'Contact')" >Contact</a></li>

</ul>

<div id="Animal Info." class="tabcontent" >

<button class = "floating-box button2 "> <br><div align = "center"> <a href = "tigers.html"><b><p style="color:white;">Tiger</p></b></a></div></button> <span style="color:red"><font size="6">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<b>ZOO</b></font></span>
<br>
<button class = "floating-box button2 "> <br><div align = "center"> <a href = "lions.html"><b><p style="color:white;">Lion</p></b></a></div></button><span style="color:aqua">&nbsp;A zoo (short for zoological garden or zoological park, and also called an animal park or menagerie) is a facility in which animals are confined within enclosures, displayed 

</span>
<br>
<button class = "floating-box button2 "> <br><div align = "center"> <a href = "giraffes.html"><b><p style="color:white;">Giraffe</p></b></a></div></button><span style="color:aqua"> to the public, and in which they may also breed.</span>
<br>
<button class = "floating-box button2 "> <br><div align = "center"> <a href = "hippopotamuss.html"><b><p style="color:white;">Hippopotamus</p></b></a></div></button><span style="color:aqua">&nbsp;The term "zoological garden" refers to zoology, the study of animals, a term deriving from the Greek zōon (ζῷον, 'animal') and lógos (λóγος, ‘study’). The abbreviation </span>
<br>
<button class = "floating-box button2 "> <br><div align = "center"> <a href = "crocodiles.html"><b><p style="color:white;">Crocodile</p></b></a></div></button><span style="color:aqua">&nbsp;'zoo' was first used of the London Zoological Gardens, which was opened for scientific study in 1828 and to the public in 1857.The number of major animal collections</span>
<br>
<button class = "floating-box button2 "> <br><div align = "center"> <a href = "zebras.html"><b><p style="color:white;">Zebra</p></b></a></div></button><span style="color:aqua">&nbsp;open to the public around the world now exceeds to 1,000, around 80 percent of them are in cities. In the United States of America alone, zoos are visited by &nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;over 180 million people annually. </span>

</div>
<div id="Show Animal Details" class="tabcontent" >
<font size="4"><div align="center"><h1><span style = "color:lime; text-shadow : 4px 4px 8px red;">ANIMALS- AT A GLANCE</span></h1></div></font>
<br>

<form action="addans.php" method="post">
<font size="4"><span style = "color:aqua; text-shadow : 4px 4px 8px red ; font-family: "Comic Sans MS", cursive, sans-serif">&emsp;&emsp;Select the animal whose info. you need : </span></font><select name="animalsa">
    <option value="Lion">Lion</option>
    <option value="Tiger">Tiger</option>
    <option value="Giraffe">Giraffe</option>
    <option value="Hippopotamus">Hippopotamus</option>
    <option value="Crocodile">Crocodile</option>
    <option value="Zebra">Zebra</option>
  </select>
  <br><br>
   &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<input type="submit">
</form>
<br>

</div>
<div id="Route Info." class="tabcontent" >
<font size="4"><div align="center"><h1><span style = "color:lime; text-shadow : 4px 4px 8px red;">ROUTE INFORMATION</span></h1></div></font>
<br>

<form action="addros.php" method="post">
<font size="4"><span style = "color:aqua; text-shadow : 4px 4px 8px red ; font-family: "Comic Sans MS", cursive, sans-serif">&emsp;&emsp;Select the Route whose info. you require : </span></font><select name="rot">
    <option value=111>111</option>
    <option value=112>112</option>
    <option value=113>113</option>
    <option value=114>114</option>
  </select>
  <br><br>
   &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<input type="submit">
</form>
<br>

</div>
<div id="Check In" class="tabcontent" >
<font size="6"><div align="center"><span style = "color:lime; text-shadow : 4px 4px 8px red;">PLEASE FILL CHECK-IN FORM</span></div></font>
<br>
<form name='register' action="checkin.php" method="post">  
  <font size="2"><span style = "color:aqua; text-shadow : 4px 4px 8px red ; font-family: "Comic Sans MS", cursive, sans-serif">&emsp;&emsp;Enter Name :&emsp;&emsp;&emsp;&emsp;  </span></font>
  <input type="text" name="Name" required/><br><br>
   <font size="2"><span style = "color:aqua; text-shadow : 4px 4px 8px red ; font-family: "Comic Sans MS", cursive, sans-serif">&emsp;&emsp;Enter Contact Number :  </span></font>
   <input value="+91" size="1"disabled><input type="text" name="contact" size="12" maxlength="10" pattern="[0-9-']+" required/>   <br><br>
   <font size="2"><span style = "color:aqua; text-shadow : 4px 4px 8px red ; font-family: "Comic Sans MS", cursive, sans-serif">&emsp;&emsp;
   Select Route desired :  </span></font>
   <select name="route">
    <option value=111>111</option>
    <option value=112>112</option>
    <option value=113>113</option>
    <option value=114>114</option>
  </select>
  <br><br>
  <font size="2"><span style = "color:aqua; text-shadow : 4px 4px 8px red ; font-family: "Comic Sans MS", cursive, sans-serif">&emsp;&emsp;
   Select Ticket Count :&emsp;  </span></font>
   <input type="number" name="count" size="7" pattern="[0-9-']+" />   <br><br>
  <font size="2"><span style = "color:aqua; text-shadow : 4px 4px 8px red ; font-family: "Comic Sans MS", cursive, sans-serif">&emsp;&emsp;
   Select Hour-In (24 hour format) :&emsp;  </span></font>
   <input type="number" name="hour" size="7" pattern="[0-9-']+" />   <br><br>

   &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
  <input type="submit" name="submit" value="Submit" /> 
  </form>


</div>
<div id="Check Out" class="tabcontent" >
<font size="6"><div align="center"><span style = "color:lime; text-shadow : 4px 4px 8px red;">LETS CHECK-OUT !!</span></div></font>
<br>
<form name='register1' action="checkout.php" method="post">  
<font size="3"><span style = "color:aqua; text-shadow : 4px 4px 8px red ; font-family: "Comic Sans MS", cursive, sans-serif">&emsp;&emsp;Enter your reference ID :&emsp;&emsp;&emsp;&emsp;  </span></font>
<input type="number" name="ID" size="7" pattern="[0-9-']+" />   <br><br>
<font size="3"><span style = "color:aqua; text-shadow : 4px 4px 8px red ; font-family: "Comic Sans MS", cursive, sans-serif">&emsp;&emsp;Enter your Exit Hour :&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;  </span></font>
<input type="number" name="hour" size="7" pattern="[0-9-']+" />   <br><br>
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
  <input type="submit" name="submit" value=" Submit " /> 

</form>
</div>
<div id="Contact" class="tabcontent" >
<font size="4"><div align="center"><h1><span style = "color:lime; text-shadow : 4px 4px 8px red;">CONTACT ADMINS!!</span></h1></div></font>
<br>
<font size="3"><span style = "color:lime; text-shadow : 4px 4px 8px red;">Manjeet Singh&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Shambhavi Singh&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Mohit Gupta&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Mohd.Naeem Khan</span></font>
<br>
<font size="3"><span style = "color:red; text-shadow : 4px 4px 8px lime;">9540886248&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;9616762666&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;9958346945&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;9717875326</span></font>
<br>
<font size="3"><span style = "color:red; text-shadow : 4px 4px 8px lime;">manjeet.04.singh@gmail.com&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;shambhavisingh15@gmail.com&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;mohitatjammu@gmail.com&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;ineffableverve@gmail.com</span></font>
<br>
</div>


<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
     
</body>
</html>

