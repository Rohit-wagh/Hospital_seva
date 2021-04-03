<?php
$servername='localhost';
$username="root";
$password="";
$db='hospitalseva';

$con = mysqli_connect($servername,$username,$password,$db);
if($con){
	echo "connection data is succesfully";
	}
?>

<?php
     if(isset($_POST['booking']))
	 {
	   $name=$_POST['name'];
	   $email=$_POST['email'];
	   $mobno=$_POST['mobno'];
	   $insert = "insert into bookdata(name,email,mobno,date) values('$name','$email','$mobno',NOW())";
	   
	   $run=mysqli_query($con,$insert);
	   if($run){
		   echo "book succesfully";
       }
	 }
	 ?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>book now</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">

		<!-- STYLE CSS -->
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/demo.css">

	</head>

	<body>

		<div class="container-fluid">
			<div class="row" id="sticky_vert">
			  <div class="col-sm-8 ">
				<img class="img-responsive" src="img/logo.jpg"  >
			  </div>
			  
			</div>
		</div>
 <!-- ======= Header ======= -->

		  <div class="wrapper">

			
			<div class="inner">
				
				<form action="">
					
					<div class="border">
						<a href="#" style="margin-right: 130px; color:red""><div class="contener" >
							<p> < Modify Your Booking</p></a>
						</br>
							</div>
						<div class="s">
							<center><p style="background-color: rgb(254, 246, 233);">Yey! you saved on this booking</p></center>
						</div>
						<div class="x">
						<div class="c">
							<div class="v">1</div>
						<div class="so" style="height: auto;">
					<b>Enter your details</b>
				</div>
			
			</div>
				<div class="h">
		
					<span>We will use these details to share your booking information </span>
				</div>
				<!----------------------form data----------------------->
				
		     	<div class="form-wrapper form-price" method="POST">
						<div class="form-group">
							<b>	<span class="form-label">Full Name</span></b>
										
										
										<input class="form-control" type="search" placeholder="Enter first and last name" 
										label="[object Object]" id="name" maxlength="900" name="name" required="">


									</div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<b>	<div><span class="form-label">Email Address</span></b>
										<input class="form-control" type="email" placeholder="name@gmail.com" maxlength="900" name="email" required>
									</div>
					</div>
							<div class="form-wrapper form-sele">
								<div>
						<b><span>Mobile Number</span></b>
						
				
						<input id="phone" name="mobno" type="tel">
</div> &nbsp;&nbsp;&nbsp;&nbsp;
<!------------------------button------------------------>

<button type="submit" name="booked" style="color: rgb(63, 12, 12); max-width: 900px;">send passcode</button>	
</div>
			</div>
		</div>
	



		<!--complent any box-->	
						<div class="na">
							<div class="vi">
							<div class="le">2</div>
							<div class="p">
						<!--<span>complent any</span>-->
						<input type="text" placeholder="complent any" style="background-color: none;border-color: white;">
					</div>
				</div>
			</div>

			
				</form>
			
		<!--right side image tag-->
				<div class="image-holder">
					<img src="img/d1.jpg" width="400" height="500">
				</div>
			</div>
		</div>


		<!--script tag for mobile number-->

		<script src="js/intlTelInput.js"></script>
		<script>
		  var input = document.querySelector("#phone");
		  window.intlTelInput(input, {
		   
			utilsScript: "js/utils.js",
		  });
		</script>

<!--close tag-->
<!--javascript for sticky bar-->
	<!----<script src="js/jquery-3.3.1.min.js"></script>
		<script src="js/main.js"></script>-->
		<script>
			window.onscroll = function() {myFunction()};
			
			var header = document.getElementById("stick_bar");
			var sticky = header.offsetTop;
			
			function myFunction() {
			  if (window.pageYOffset > sticky) {
				header.classList.add("sticky");
			  } else {
				header.classList.remove("sticky");
			  }
			}
</script>		
	</body>
</html>

