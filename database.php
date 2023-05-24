<?php
//$url='127.0.0.1:3306';
//$username='root';
//$password='';
//$conn=mysqli_connect($url,$username,$password,"crud");

  $servername="localhost";
  $username="root";
  $password="";
  $dbname="e_learning";
  
  $con= new mysqli($servername,$username,$password,$dbname);
  if(!$con)
  {
  die('Could not Connect My Sql:' .mysql_error());
  }
  
?>