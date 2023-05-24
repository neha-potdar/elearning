<?php
//define the core paths
//Define them as absolute peths to make sure that require_once works as expected

//DIRECTORY_SEPARATOR is a PHP Pre-defined constants:
//(\ for windows, / for Unix)
defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);

defined('SITE_ROOT') ? null : define ('SITE_ROOT', $_SERVER['DOCUMENT_ROOT'].DS.'caiwl');

defined('LIB_PATH') ? null : define ('LIB_PATH',SITE_ROOT.DS.'include');

//load the database configuration first.
require_once(LIB_PATH.DS."config.php");
require_once(LIB_PATH.DS."function.php");
require_once(LIB_PATH.DS."session.php");
require_once(LIB_PATH.DS."accounts.php"); 
require_once(LIB_PATH.DS."lessons.php");
require_once(LIB_PATH.DS."exercises.php"); 
require_once(LIB_PATH.DS."autonumbers.php"); 
require_once(LIB_PATH.DS."students.php"); 
//load the database connection
require_once(LIB_PATH.DS."database.php");
?>

<!-- <h1><?php echo $title;?></h1> -->
<title>Tech Tree</title>
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
 <style type="text/css">		
/**Footer**/

footer {
	display: block;
    padding: 0px 0 60px;
    font-size: 14px;
    color: #aaa;
    line-height: 18px;
    font-family: 'Roboto Condensed', sans-serif;
}

.copy {
    font-family: 'Open Sans', sans-serif;
}

.st1 {
    padding-top: 80px;
    color: #e2e2e2;
    margin-bottom: 8px;
}

.brand {
    position: relative;
    top: -7px;
    font: 30px/18px 'Roboto Condensed', sans-serif;
    display: inline-block;
    font-size: 30px;
}

.f_phone {
    padding-top: 72px;
    font-size: 40px;
    line-height: 36px;
    float: right;
    color: #e2e2e2;
}

.f_phone  span {
    position: relative;
    top: 4px;
    font-size: 30px;
}

.socials {
    margin-right: 96px;
    padding-top: 82px;
    float: right;
    overflow: hidden;
}

.socials a {
    display: block;
    float: left;
    margin: 0 6px 0 7px;
    color: #fff;
    text-align: center;
    background-color: blue;
    border-radius: 500px;
    width: 58px;
    height: 58px;
    font-size: 24px;
    line-height: 58px;
}

.socials a:hover {
    color: #fdc903;
    background-color: #585757;
}

#toTop {
    display: none;
    text-decoration: none;
    position: fixed;
    bottom: 40px;
    left: 51%;
    margin-left: 610px;
    overflow: hidden;
    width: 61px;
    height: 75px;
    border: none;
    text-indent: -999px;
    z-index: 20;
    background: url(../images/totop.png) no-repeat left 0;
    transition: 0s ease;
    -o-transition: 0s ease;
    -webkit-transition: 0s ease;
}
#toTop:hover {
    outline: none;
    background-position: right 0;
}
/**Content**/

.content {
    padding-bottom: 113px;
}
.page1  .content {
    padding-bottom: 82px;
}

.type {
    border: 1px solid #ebeaea;
    position: relative;
    margin-top: 84px;
    display: block;
    font-family: 'Roboto Condensed', sans-serif;
}

.type_caption {
    position: absolute;
    left: 0;
    bottom: 0;
    display: block;
    width: 312px;
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -o-box-sizing: border-box;
    box-sizing: border-box;
    background: url(../images/capt_bg.png) 0 0 repeat;
    color: #fff;
    font-size: bold;
    font-size: 30px;
    line-height: 30px;
    padding: 7px 30px 8px;
    transition: 0.5s ease;
    -o-transition: 0.5s ease;
    -webkit-transition: 0.5s ease;
}

.type:hover .type_caption {
    width: 100%;
}

.type+.type {
    margin-top: 11px;
}

.type+.type+.type {
    margin-top: 10px;
}

.text1 {
    margin-bottom: 23px;
    font-size: 20px;
    line-height: 20px;
}

.cl1 {
    height: 24px;
}

.bq1 {
    padding: 61px 38px 26px 46px;
    background: url(../images/quotes.png) 31px 33px no-repeat #e5e5e7;
}

.bq1 .color2 {
    color: #727171;
    text-align: right;
    font: 18px/20px 'Roboto Condensed', sans-serif;
}

.bq1:after {
    content: '';
    display: block;
    position: absolute;
    width: 0px;
    height: 0px;
    bottom: -27px;
    left: 67px;
    border-style: solid;
    border-width: 27px 0 0 40px;
    border-color: #cfcfd0 transparent transparent transparent;
}

.gallery {
    overflow: hidden;
    padding-top: 27px;
}

</style>

		
		<section id="title-header">
  <div class="title">  
     <img class="logo" src="images/techtree.png" style="width="50px" height="35px">TECH TREE.. <br>LET'S CRACK IT
      
      <p class="subtitle"> COMPUTER AND VARIOUS KNOWLEDGE</p> 
  </div>
</section>


<center><b><i><u><h3> TECH TREE GUIDELINES...</h3></u></i></b></center> 

 
 
 <div class="content"><div class="ic"></div>
				<div class="container_12">
					<div class="grid_12">
						
					</div>
					<div class="grid_4">
						<div class="box">
							<div class="maxheight">
								<img src="images/a (1).jpg" alt="">
								<div class="text1 color2">
									<a href="#">Mandate</a>
								</div>
    <p> Tech tree provides advance instruction and professional training in computer related fields. It shall also undertake research, extension services and production activities and provide progressive leadership in its areas of specialization.</p> 
								<br>
								<a href="#" class="btn">Read More</a>
							</div>
						</div>
					</div>
					<div class="grid_4">
						<div class="box">
							<div class="maxheight">
								<img src="images/a (2).jpg" alt="">
								<div class="text1 color2">
									<a href="#">Possible Goals for Online Learning System</a>
								</div>
<ol>
    <li>1. To increase access to learning opportunities/increase flexibility for students.</li>  
    <li>2. To enhance the general quality of teaching/learning.</li> 
    <li>3. To improve the cost-effectiveness of the post-secondary education system </li> 
    <li>4. To develop the skills and competencies needed in the 21st century </li>	

  </ol>								<br>
								<a href="#" class="btn">Read More</a>
							</div>
						</div>
					</div>
					<div class="grid_4">
						<div class="box">
							<div class="maxheight">
								<img src="images/ab3.jpg" alt="">
								<div class="text1 color2">
									<a href="#">Objectives</a>
								</div>
<ol>
      <li>Create an environment of shared leadership and responsibilities with competent administrator.</li>
      <li>Provide relevant trainings and seminar to faculty, staff, and student.</li>
      <li>Produce highly competitive graduates.</li>
      <li>Conduct relevant and updated researches</li>
      <li>Extend financial support and manpower for outreach activities.</li> 
   </ol> 								<br>
								<a href="#" class="btn">Read More</a>
							</div>
						</div>
					</div>
					<div class="grid_4">
						<div class="box">
							<div class="maxheight">
								<img src="images/ab2.jpg" alt="">
								<div class="text1 color2">
									<a href="#">Guiding Principles</a>
								</div>
<ul>
      <li>Contact between students and faculty. ...  </li>
      <li>Set up an active learning environment...</li>
      <li> Respect the diversity in your class...</li>
      <li>Communicate high expectations tempered with realism... </li>	
	   <li>Develop cooperation and collaboration among students. ... </li>
    </ul>								<br>
								<a href="#" class="btn">Read More</a>
							</div>
						</div>
					</div>
					<div class="grid_4">
						<div class="box">
							<div class="maxheight">
								<img src="images/ab.jpg" alt="">
								<div class="text1 color2">
									<a href="#">Quality Policy </a>
								</div>
<ol>
    <li>Community and Faith Integration</li> 
    <li>Structure and Interface</li> 
    <li>Teaching and Learning</li> 
    <li>Technology and Accessibility</li> 
    <li>Showcasing quality outputs</li> 
    <li>Upholding values and integrity and nurturing talents and skills for global competitiveness.</li>  
</ol>								<br>
								<a href="#" class="btn">Read More</a>
							</div>
						</div>
					</div>
					
					
					<div class="grid_4">
						<div class="box">
							<div class="maxheight">
								<img src="images/ols1.jpg" alt="">
								<div class="text1 color2">
									<a href="#">Core Values </a>
								</div>
<ul>
    <li>God-Centered</li>
    <li>Excellence</li>
    <li>Integrity</li>
    <li>Transparency and Accountability</li>
    <li>Dedication to Quality Service</li>  
  </ul> 								<br>
								<a href="#" class="btn">Read More</a>
							</div>
						</div>
					</div>
					
					<div class="clear"></div>
			</div>
			<div class="c_phone">
				<div class="container_12">
					<div class="grid_12">
						<div class="fa fa-phone"></div>
						
						<span>SUBSCRIBE NOW!</span>
					</div>
					<div class="clear"></div>
				</div>
			</div>
			
			<div class="clear"></div>
				</div>
				<footer>
				<div class="container_12">
					<div class="grid_12">
						<div class="f_phone"><span>Call Us:</span> + 1800 559 6580</div>
						<div class="socials">
							<a href="#" class="fa fa-twitter"></a>
							<a href="#" class="fa fa-facebook"></a>
							<a href="#" class="fa fa-google-plus"></a>
						</div>
						<div class="copy">
							<div class="st1">
							<div class="brand">Tech<span class="color1">T</span>ree </div>
							&copy; 2014	| <a href="#">Privacy Policy</a> </div> 					</div>
					</div>
					<div class="clear"></div>
				</div>
			</footer>
				
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">


<!-- Bootstrap core CSS -->
<link href="<?php echo web_root; ?>css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo web_root; ?>css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
<link href="<?php echo web_root; ?>css/dataTables.bootstrap.css" rel="stylesheet" media="screen">  
<!-- <link href="<?php echo web_root; ?>css/kcctc.css" rel="stylesheet" media="screen">  -->
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
 

 </style>
 

</body>
  
<section id="navigation">
  <div id="mySidenav" class="sidenav">
    <!--<a href="<?php echo web_root; ?>menu.php?q=Lesson" id="lesson">Lesson <i class="fa fa-home pull-right"></i></a> 
    <a href="<?php echo web_root; ?>menu.php?q=exercises" id="exercise">Exercises <i class="fa fa-pencil pull-right"></i></a>
    <a href="<?php echo web_root; ?>menu.php?q=download" id="download">Download <i class="fa fa-download pull-right"></i></a>
    <a href="<?php echo web_root; ?>menu.php?q=about" id="about">About Us <i class="fa fa-info-circle pull-right"></i></a>  -->
     <a href="MainMenu.php" id="lesson">Home <i class="fa fa-home pull-right"></i></a> 
	 <a href="course.html" id="exercise">Lesson <i class="fa fa-pencil pull-right"></i></a> 
	 <a href="Subscription/" id="download">Download <i class="fa fa-download pull-right"></i></a> 
	 <a href="About_us.html" id="about">About Us <i class="fa fa-info-circle pull-right"></i></a> 
	 <a href="Registration.html" id="login">Logout <i class="fa fa-sign-out pull-right"></i></a> 
  </div>
</section>  

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
</body>
</html>