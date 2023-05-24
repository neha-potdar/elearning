<html>
<head>
<title> TEST RESULT </title>
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
  <center>
  <section id="title-header">
  <div class="title">  
<img class="logo" src="images/techtree.png" style="width="50px" height="35px">TECH TREE.. <br>LET'S CRACK IT
      <p class="subtitle"> COMPUTER AND VARIOUS KNOWLEDGE</p> 
  </div>
</section> 
  <center>
     <div class="container">
	 <h1 class="section-title"><b>USER TEST DETAILS</h1>
       <h2> QUANTITATIVE APTITUDE TEST DETAILS </h2>
   <div class="container">
<?php
 error_reporting(0);
 // $id=$_GET['ID'];
  $servername="localhost";
  $username="root";
  $password="";
  $dbname="kids";
  
  //QUANTITATIVE APTITUDE test
  $con= new mysqli($servername,$username,$password,$dbname);
  $q=$con->query("SELECT * FROM `num_test`");
  echo"<table border=2>";
  echo"<tr>
        <th>ID</th>
        <th>Name</th>
	    <th>Marks</th>
	    </tr>";
	
	while($row=$q->fetch_assoc())
	{
		echo"<tr>";
		echo"<td align='center'>".$row["num_id"]."</td>";
	    echo"<td align='center'>".$row["name"]."</td>";
		echo"<td align='center'>".$row["marks"]."</td>";
		
	}
	echo"</table>";
	
	
	//LOGICAL REASONING test
  echo"<h2> LOGICAL REASONING TEST DETAILS</h2>";
  $q1=$con->query("SELECT * FROM `alpha_test`");
  echo"<table border=2>";
  echo"<tr>
        <th>ID</th>
        <th>Name</th>
	    <th>Marks</th>
	    </tr>";
	
	while($row=$q1->fetch_assoc())
	{
		echo"<tr>";
		echo"<td align='center'>".$row["al_id"]."</td>";
	    echo"<td align='center'>".$row["name"]."</td>";
		echo"<td align='center'>".$row["marks"]."</td>";
		
	}
	echo"</table>";
	
	//GENERAL ENGLISH test
  echo"<h2> GENERAL ENGLISH TEST DETAILS</h2>";
  $q1=$con->query("SELECT * FROM `ani_test`");
  echo"<table border=2>";
  echo"<tr>
        <th>ID</th>
        <th>Name</th>
	    <th>Marks</th>
	    </tr>";
	
	while($row=$q1->fetch_assoc())
	{
		echo"<tr>";
		echo"<td align='center'>".$row["ani_id"]."</td>";
	    echo"<td align='center'>".$row["name"]."</td>";
		echo"<td align='center'>".$row["marks"]."</td>";
		
	}
	echo"</table>";
	
	//COMPUTER AWARENESS test
  echo"<h2> COMPUTER AWARENESS TEST DETAILS</h2>";
  $q1=$con->query("SELECT * FROM `col_test`");
  echo"<table border=2>";
  echo"<tr>
        <th>ID</th>
        <th>Name</th>
	    <th>Marks</th>
	    </tr>";
	
	while($row=$q1->fetch_assoc())
	{
		echo"<tr>";
		echo"<td align='center'>".$row["col_id"]."</td>";
	    echo"<td align='center'>".$row["name"]."</td>";
		echo"<td align='center'>".$row["marks"]."</td>";
		
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