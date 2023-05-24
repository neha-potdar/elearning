<html>
<head>
<title> USER INfO </title>
<style>
body
{
 background-color:white;
}
table, th, td
{
	border:2px solid black;
	width:1100px;
	background-color:#ddd;
}
.btn
{
	width:10%;
	height:5%;
	font-size:22px;
	padding:0px;
}
#title-header {
  background-color: rgb(0, 67, 200); 
  border-bottom: 1px solid #ddd; 
  height: 130px;  
  padding: 10px 0px;
  text-align: center;
  color: #fff;
  font-size: 18px;
}
.section-title{
  font-family:Monotype Corsiva;
  font-size:80px; 
  color:orange;
}
 
</style>
</head>
<body>
<section id="title-header">
  <div class="title">  
    <img class="logo" src="images/techtree.png" style="width="50px" height="35px">TECH TREE.. <br>LET'S CRACK IT
      <p class="subtitle"> COMPUTER AND VARIOUS KNOWLEDGE</p> 
  </div>
</section> 
  <center>
  <h1 class="section-title"><b>USER LOGIN DETAILS</h1>
  
   <div class="container">
   <!-- <form action="#"   method="GET">
     <input type="text"  name="ID" class="btn" placeholder="Enter Id">
	 <input type="Submit"  name="Search" class="btn" value="SEARCH BY">
   
   </form>-->
<?php
 error_reporting(0);
 // $id=$_GET['ID'];
  $servername="localhost";
  $username="root";
  $password="";
  $dbname="kids";
  
  $con= new mysqli($servername,$username,$password,$dbname);
  $q=$con->query("SELECT * FROM `user_info`");
  echo"<table border=2>";
  echo"<tr><th>Name</th>
	    <th>E-Mail</th> 
		<th>Password</th>
		<th>Confirm Password</th></tr>";
	
	while($row=$q->fetch_assoc())
	{
		echo"<tr>";
	    echo"<td align='center'>".$row["Name"]."</td>";
		echo"<td align='center'>".$row["E-mail"]."</td>";
		echo"<td align='center'>".$row["Password"]."</td>";
		echo"<td align='center'>".$row["C_password"]."</td>";
        echo"</tr>";
	}
	echo"</table>";
	
	$con->close();

?> 
<br>
<a href = "download.php"><input type="submit" name="b1" value = "Back"></a></b>     
</div>
   </center>
   </body>
   </html>
    