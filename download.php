<!--<h1><?php echo $title;?></h1>-->
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">

<title>INFORMATION</title>
		<meta charset="utf-8">
		<meta name = "format-detection" content = "telephone=no" />
		<link rel="icon" href="images/favicon.ico">
		<link rel="shortcut icon" href="images/favicon.ico" />
		<link rel="stylesheet" href="fonts/css/style.css">
		<!-- Load Font Awesome Icon Library -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
<link href="<?php error_reporting(0); echo web_root; ?>css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo web_root; ?>css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
<link href="<?php echo web_root; ?>css/dataTables.bootstrap.css" rel="stylesheet" media="screen"> <link href="<?php echo web_root; ?>css/kcctc.css" rel="stylesheet" media="screen">  
<link href="<?php echo web_root; ?>fonts/font-awesome.min.css" rel="stylesheet" media="screen">  
<link rel="stylesheet" type="text/css" href="<?php echo web_root; ?>loginregister.css">  
<link rel="stylesheet" href="<?php echo web_root; ?>assets/iCheck/flat/blue.css">
<!-- bootstrap wysihtml5 - text editor -->
<link rel="stylesheet" href="<?php echo web_root; ?>assets/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
<link rel="stylesheet" href="<?php echo web_root; ?>css/jquery-ui.css">




 
 <style type="text/css"> 
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

  /* Create two equal columns that floats next to each other */
.column {
  float: none;
  width: 20%;
  padding: 10px;
  display: inline-block;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
} 
 

 </style>
 

<body>
<section id="title-header">
  <div class="title">  
     <img class="logo" src="images/techtree.png" style="width="50px" height="35px">TECH TREE.. <br>LET'S CRACK IT
      <p class="subtitle"> COMPUTER AND VARIOUS KNOWLEDGE</p> 
  </div>
</section>

<section id="navigation">
  <div id="mySidenav" class="sidenav">
    <!--<a href="<?php echo web_root; ?>menu.php?q=Lesson" id="lesson">Lesson <i class="fa fa-home pull-right"></i></a> 
    <a href="<?php echo web_root; ?>menu.php?q=exercises" id="exercise">Exercises <i class="fa fa-pencil pull-right"></i></a>
    <a href="<?php echo web_root; ?>menu.php?q=download" id="download">Download <i class="fa fa-download pull-right"></i></a>
    <a href="<?php echo web_root; ?>menu.php?q=about" id="about">About Us <i class="fa fa-info-circle pull-right"></i></a>  -->
     <a href="admin_menu.php" id="lesson">Home &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/home.png" alt=""   style="width="50px" height="35px"></a> 
	 <a href="course_ad.html" id="exercise">Lesson&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/pen.jpg" alt=""   style="width="50px" height="35px"></a> 
	 <a href="Download.php" id="download"> User Info &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/down.jpg" alt=""   style="width="50px" height="35px"></a> 
	 <a href="About_us.html" id="about">About Us &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/i.jpg" alt=""   style="width="50px" height="35px"></a> 
	 <a href="admin_login.html" id="login">Logout &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/logout.jpg" alt=""   style="width="50px" height="35px"></a>  
  </div>
</section> 


<div class="col-lg-6">
<section id="category" class="section-bg">
      <div class="container">
        <div class="section-header"> <br> <br> <br> <br>
<center>     <h1 class="section-title"><b>SYSTEM INFORMATION</h1>
          <span class="section-divider"></span>
        </div>
		
<br><br><br><br><br><br><br>
<center>

<div class="row">
  <div class="column" style="background-color:#aaa;">
    <h2><img src="images/ab.jpg" alt=""   style="width="50px" height="35px"> REGISTRATION </h2><br>
    <a href="candidate_details.php" id="reg">Candidate Who login ..</a>
  </div>
  <div class="column" style="background-color:#bbb;">
    <h2><img src="images/pen.jpg" alt=""   style="width="50px" height="35px">COURSE TEST</h2><br>
    <a href="candidate_Test.php" id="reg">Candidate who gave the test..</a>
  </div>
</div>

<div class="row">
  <div class="column" style="background-color:#ccc;">
    <h2><img src="images/qa5.png" alt=""   style="width="50px" height="35px">CANDIDATE RESULT</h2><br>
    <a href="Progress.php" id="reg">All test marks..</a>
  </div>
  <div class="column" style="background-color:#ddd;">
    <h2><img src="images/qa1.jpg" alt=""   style="width="50px" height="35px">COURSES</h2><br>
    <a href="lesson.html" id="reg">Courses which in the system..</a>
  </div>
</div>

<script>
// Get the elements with class="column"
var elements = document.getElementsByClassName("column");

// Declare a loop variable
var i;

// List View
function listView() {
  for (i = 0; i < elements.length; i++) {
    elements[i].style.width = "100%";
  }
}

// Grid View
function gridView() {
  for (i = 0; i < elements.length; i++) {
    elements[i].style.width = "50%";
  }
} 
</script>

</body>
</html>


