<!--<h1><?php echo $title;?></h1>-->
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">

<title>Candidate Details</title>
		<meta charset="utf-8">
		<meta name = "format-detection" content = "telephone=no" />
		<link rel="icon" href="images/favicon.ico">
		<link rel="shortcut icon" href="images/favicon.ico" />
		<link rel="stylesheet" href="fonts/css/style.css">
		<script src="fonts/js/jquery.js"></script>
		<script src="fonts/js/jquery-migrate-1.2.1.js"></script>
		<script src="fonts/js/script.js"></script>
		<script src="fonts/js/superfish.js"></script>
		<script src="fonts/js/jquery.ui.totop.js"></script>
		<script src="fonts/js/jquery.equalheights.js"></script>
		<script src="fonts/js/jquery.mobilemenu.js"></script>
		<script src="fonts/js/jquery.easing.1.3.js"></script>
		<script>
			$(document).ready(function(){
				$().UItoTop({ easingType: 'easeOutQuart' });
			});
		</script>


<!-- Bootstrap core CSS -->
<link href="<?php echo web_root; ?>css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo web_root; ?>css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
<link href="<?php echo web_root; ?>css/dataTables.bootstrap.css" rel="stylesheet" media="screen"> <link href="<?php echo web_root; ?>css/kcctc.css" rel="stylesheet" media="screen">  
<link href="<?php echo web_root; ?>fonts/font-awesome.min.css" rel="stylesheet" media="screen">  
<link rel="stylesheet" type="text/css" href="<?php echo web_root; ?>loginregister.css">  
<link rel="stylesheet" href="<?php echo web_root; ?>assets/iCheck/flat/blue.css">
<!-- bootstrap wysihtml5 - text editor -->
<link rel="stylesheet" href="<?php echo web_root; ?>assets/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
<link rel="stylesheet" href="<?php echo web_root; ?>css/jquery-ui.css">




 
 <style type="text/css"> 
 body
{
 background-color:grey;
}
table, th, td
{
	border:2px solid black;
	width:1100px;
	background-color:white;
}
.btn
{
	width:10%;
	height:5%;
	font-size:22px;
	padding:0px;
}
 #content {
  min-height: 550px;
  margin: 0;
  width: 100%;
}
#footer > div {
  background-color: #fff;
  min-height: 200px;
  padding: 10px 50px;
  margin-top: 30px;
  border-top: 1px solid #ddd;

}
.footer-links { 
  /*margin-left: 5px;*/
}
#footer > footer { 
    background-color: rgb(0, 67, 200);
  min-height: 50px;
  padding: 10px; 
  border-top: 1px solid #ddd;
  color:#fff;

}
.navbar-nav {
  float: right;
}
@media only screen and (max-width: 768px){
 .navbar-nav {
  float: none;
 }

}
#content { 
  margin-right: 0px;
  margin-left: 90px;
  width:90%;
}

#content:before,
#content:after {
  display: table;
  content: "";
}

#content:after {
  clear: both;
}

#content:before,
#content:after {
  display: table;
  content: "";
}

#content:after {
clear: both;
}

#mySidenav a {
    position: absolute;
    left: -130px;
    transition: 0.3s;
    padding: 20px;
    width: 190px;
    text-decoration: none;
    font-size: 25px;
    color: white;
    border-radius: 0 5px 5px 0;
}

#mySidenav a:hover {
    left: 0;
}

#lesson {
    top: 180px;
    background-color: rgb(0, 67, 200)
}

#exercise {
    top:260px;
    background-color: rgb(0, 81, 242);
}

#download {
    top: 340px;
    background-color: rgb(33, 107, 255);
}

#about {
    top: 420px;
    background-color: rgb(79, 138, 255);
}
#login {
    top: 500px;
    background-color: rgb(137, 176, 255);
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
.section-title{font-family:Monotype Corsiva; font-size:80px; color:orange;}
 

 </style>
 

<body>
<section id="title-header">
  <div class="title">  
     <img class="logo" src="register.svg">TECH TREE.. <br>LET'S CRACK IT
      <p class="subtitle"> COMPUTER AND VARIOUS KNOWLEDGE</p> 
  </div>
</section>

 <center>
   <h1> USER LOGIN DETAILS</h1>
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
	    <th>Address</th>
	    <th>E-Mail</th> 
		<th>Mobile Number</th>
		<th>Date Of Birth</th>
		<th>Gender</th>
	    <th>Username</th>
		<th>Password</th>
		<th>Confirm Password</th></tr>";
	
	while($row=$q->fetch_assoc())
	{
		echo"<tr>";
	    echo"<td align='center'>".$row["Name"]."</td>";
		echo"<td align='center'>".$row["Address"]."</td>";
		echo"<td align='center'>".$row["E-mail"]."</td>";
		echo"<td align='center'>".$row["Mobile_no"]."</td>";
		echo"<td align='center'>".$row["DOB"]."</td>";
		echo"<td align='center'>".$row["Gender"]."</td>";
		echo"<td align='center'>".$row["Username"]."</td>";
		echo"<td align='center'>".$row["Password"]."</td>";
		echo"<td align='center'>".$row["C_password"]."</td>";
        echo"</tr>";
	}
	echo"</table>";
	
	$con->close();

?> 
<br>
<a href = "admin_menu.php"><input type="submit" name="b1" value = "Back"></a></b>     
</div>
   </center>
   
<section id="content"> 
<?php error_reporting(0);
check_message(); ?> 
  <div class="container"> 
    <?php require_once $content; ?> 
  </div>  
</section>



<section id="footer"> 
<!--      <div > 

</div>   -->
<footer  >
    <p align="left">&copy; TECH TREE... LET'S CRACK IT</p>
</footer>

</section>
  <script type="text/javascript" language="javascript" src="<?php echo web_root; ?>jquery/jquery.min.js"></script>
  <script src="<?php echo web_root; ?>js/bootstrap.min.js"></script> 
  <script type="text/javascript" src="<?php echo web_root; ?>js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
  <script type="text/javascript" src="<?php echo web_root; ?>js/locales/bootstrap-datetimepicker.uk.js" charset="UTF-8"></script>
  <script type="text/javascript" language="javascript" src="<?php echo web_root; ?>js/jquery.dataTables.js"></script> 
  <script src="<?php echo web_root;?>assets/iCheck/icheck.min.js"></script>
  <!-- Bootstrap WYSIHTML5 -->
  <script type="text/javascript" src="<?php echo web_root; ?>js/jquery-ui.js"></script> 
  <script type="text/javascript" src="<?php echo web_root; ?>js/autofunc.js"></script> 
  <script src="<?php echo web_root;?>assets/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Page Script -->
<script>
 
  $(function () {
    //Add text editor
    $("#compose-textarea").wysihtml5();
  });
</script>
<script type="text/javascript" charset="utf-8">

$(document).ready(function() {
    var t = $('#example').DataTable( {
      "bSort": false,
        "columnDefs": [ {
            "searchable": false,
            "orderable": false,
            "targets": 0
        } ],

          //vertical scroll
         // "scrollY":        "300px",
        "scrollCollapse": true,

        //ordering start at column 1
        "order": [[ 1, 'desc' ]]
    } );
 
    t.on( 'order.dt search.dt', function () {
        t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
            cell.innerHTML = i+1;
        } );
    } ).draw();
} );
$(document).ready(function() {
    var t = $('#example2').DataTable( {
      "bSort": false,
        "columnDefs": [ {
            "searchable": false,
            "orderable": false,
            "targets": 0
        } ],

          //vertical scroll
         // "scrollY":        "300px",
        "scrollCollapse": true,

        //ordering start at column 1
        "order": [[ 1, 'desc' ]]
    } );
 
    t.on( 'order.dt search.dt', function () {
        t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
            cell.innerHTML = i+1;
        } );
    } ).draw();
} );

</script>  

<script type="text/javascript"> 

$('#date_picker').datetimepicker({
  format: 'mm/dd/yyyy',
    language:  'en',
    weekStart: 1,
    todayBtn:  1,
    autoclose: 1,
    todayHighlight: 1,
    startView: 2,
    minView: 2,
    forceParse: 0
});

  
</script>
<script>
  function checkall(selector)
  {
    if(document.getElementById('chkall').checked==true)
    {
      var chkelement=document.getElementsByName(selector);
      for(var i=0;i<chkelement.length;i++)
      {
        chkelement.item(i).checked=true;
      }
    }
    else
    {
      var chkelement=document.getElementsByName(selector);
      for(var i=0;i<chkelement.length;i++)
      {
        chkelement.item(i).checked=false;
      }
    }
  }
   function checkNumber(textBox){
        while (textBox.value.length > 0 && isNaN(textBox.value)) {
          textBox.value = textBox.value.substring(0, textBox.value.length - 1)
        }
        textBox.value = trim(textBox.value);
      }
      //
      function checkText(textBox)
      {
        var alphaExp = /^[a-zA-Z]+$/;
        while (textBox.value.length > 0 && !textBox.value.match(alphaExp)) {
          textBox.value = textBox.value.substring(0, textBox.value.length - 1)
        }
        textBox.value = trim(textBox.value);
      }
 

  $(document).on("change",".radios",function(){

    var exerciseid = $(this).data('id');
    var value = $(this).val();

       // alert(value);
       if ($(this).is(':checked'))
        {
            $.ajax({
            type : "POST",
            url : "validation.php",
            dataType: "text",
            data: {ExerciseID:exerciseid,Value:value},
            success : function(data){
              // alert(data)
            }
           });
        }
 });
 </script> 