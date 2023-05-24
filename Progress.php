<html>
<head>
<title> CANDIDATE TEST RESULT </title>
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
     <div class="container">
    <form action="#" method="GET">
	 <input type="text"  name="name" class="btn" placeholder="Enter name" autocomplete="off">
	 <input type="Submit"  name="Search" class="btn" value="SEARCH">
   </form>
   
<?php
error_reporting(0);
  $nm = $_GET['name'];
  $servername="localhost";
  $username="root";
  $password="";
  $dbname="kids";
  
  $con= new mysqli($servername,$username,$password,$dbname);
  //QUANTITATIVE APTITUDE
  echo "Helloo ".$nm;
  echo"<h2> QUANTITATIVE APTITUDE TEST DETAILS</h2>";
  $q=$con->query("SELECT * FROM `num_test` WHERE name='$nm'");
  echo"<table border=2>";
  echo"<tr>
         <th>ID</th>
	    <th>NAME</th>
	    <th>MARKS</th> 
		</tr>";
	$t1=0;
	$a1=0;
	while($row=$q->fetch_assoc())
	{
		echo"<tr>";
	    echo"<td align='center'>".$row["num_id"]."</td>";
	    echo"<td align='center'>".$row["name"]."</td>";
		echo"<td align='center'>".$row["marks"]."</td>";
        echo"</tr>";
	    $t1 = $row['marks'];
	}
	echo"</table>";
	
	//LOGICAL REASONING
  echo"<h2> LOGICAL REASONING TEST DETAILS</h2>";
  $q=$con->query("SELECT * FROM `alpha_test` WHERE name='$nm'");
  echo"<table border=2>";
  echo"<tr>
          <th>ID</th>
	      <th>NAME</th>
	      <th>MARKS</th> 
		</tr>";
	$t2=0;
    $a2=0;
	while($row=$q->fetch_assoc())
	{
		echo"<tr>";
	    echo"<td align='center'>".$row["al_id"]."</td>";
	    echo"<td align='center'>".$row["name"]."</td>";
		echo"<td align='center'>".$row["marks"]."</td>";
	    echo"</tr>";
		$t2=$row['marks'];
	}
	echo"</table>";
	
  //GENERAL ENGLISH
  echo"<h2> GENERAL ENGLISH TEST DETAILS</h2>";
  $q=$con->query("SELECT * FROM `ani_test` WHERE name='$nm'");
  echo"<table border=2>";
  echo"<tr>
          <th>ID</th>
	      <th>NAME</th>
	      <th>MARKS</th> 
		</tr>";
	    $t3=0;
		$a3=0;
     while($row=$q->fetch_assoc())
	{
		echo"<tr>";
	    echo"<td align='center'>".$row["ani_id"]."</td>";
	    echo"<td align='center'>".$row["name"]."</td>";
		echo"<td align='center'>".$row["marks"]."</td>";
	    echo"</tr>";
		$t3=$row['marks'];
	}
	echo"</table>";
	
  //COMPUTER AWARENESS
  echo"<h2> COMPUTER AWARENESS TEST DETAILS</h2>";
  $q=$con->query("SELECT * FROM `col_test` WHERE name='$nm'");
  echo"<table border=2>";
  echo"<tr>
         <th>ID</th>
	    <th>NAME</th>
	    <th>MARKS</th> 
		</tr>";
	    $t4=0;
		$a4=0;
    while($row=$q->fetch_assoc())
	{
		echo"<tr>";
	    echo"<td align='center'>".$row["col_id"]."</td>";
	    echo"<td align='center'>".$row["name"]."</td>";
		echo"<td align='center'>".$row["marks"]."</td>";
	    echo"</tr>";
		$t4=$row['marks'];
	}
	echo"</table>";
	
	//ALL user result
	echo"<h2> RESULT </h2>";
	$res = $t1+$t2+$t3+$t4+$t5;
	$ass = $a1+$a2+$a3+$a4+$a5;
	//$total = ($t1+$t2+$t3+$t4+$t5/5);
	$total = $res+$ass;
	$per = ($total*100/80);
	echo"<table border=2>";
    echo"<tr>
	       <th>MARKS</th>
	       <th>AVERAGE</th> 
		</tr>";
		
		echo"<tr>";
	    echo"<td align='center'>".$total." out of 80</td>";
	    echo"<td align='center'>".$per."</td>";
		echo"</tr>";
		
	echo"</table>";
	$con->close();
?>   
<br>
<a href = "download.php"><input type="submit" name="b1" value = "Back"></a></b>   
   </div>
   </center>
   </body>
   </html>     