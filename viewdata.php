<?php
include "mysql.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hospital Seva</title>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

   

 <!-- Vendor CSS Files -->
  
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

   <!-- Main CSS File -->
   <link href="assets/css/style.css" rel="stylesheet">
   <link rel="stylesheet" href="webfonts/all.min.css">


</head>


<body>
 <!-- ======= Top Bar ======= -->

<div class="container-fluid">
  <div class="row" id="sticky_vert">
    <div class="col-sm-8 ">
      <img class="img-responsive" src="assets/img/hosp_logo.png"  >
    </div>
    <div class="col-sm-4">
      <a href="#">
      <button class="btn" id="signup"> <i class="fas fa-user" style="font-size: 2rem; color:deepskyblue;"></i> <p>Login / Signup</p></button>
      </a>
    </div>
  </div>
</div>
  <!-- ======= Header ======= -->
  <!-- <header id="header" class="d-flex align-items-center">
    <div class="nav_container w-100"> -->
 <!-- search bar  -->
<!-- <div class="jumbotron jumbotron-fluid text-white " id="stick_bar">
  <div class="container">
    
    
    <div class="input-group">
        <input type="search" class="form-control rounded" placeholder="Search city" aria-label="Search"
          aria-describedby="search-addon" />
          <input type="search" class="form-control rounded" placeholder="Search Disease" aria-label="Search"
          aria-describedby="search-addon" />
          <button id="search_btn" class="btn btn-outline-success my-2 my-sm-0 " type="submit">Search</button>
      </div>
  </div>
</div> -->

<!--slide images-->
<div class="container-fluid">
<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img  src="assets/img/h2.jpg" alt="" width="1100" height="400">
    </div>
    <div class="carousel-item">
      <img src="assets/img/h1.jpg" alt="Chicago" width="1100" height="400">
    </div>
    <div class="carousel-item">
      <img src="assets/img/h1.jpg" alt="New York" width="1100" height="400">
    </div>
  </div>
  
  <a class="carousel-control-prev" href="#demo" data-slide="next">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="prev">
    <span class="carousel-control-next-icon"></span>
  </a>
</div><br>

<!--information section-->

<div class="container-fluid" style="margin-top: 5px;">
  <div class="row">
    <div class="col-sm-8 " style="background-color:white;">
      <h2>Profile Cancer Center-Cancer Hospital Pune</h2>
      <h5>Timber Market Pandit Jawaharlal Neharu Marg,pune</h5>
      <h3 style="color: green;">Description</h3>
      <p style="text-align: justify;">Profile Cancer center is Best Cancer Hospital in pune.we believe there is better way to provide cancer Care.We stick to our mission and cure values and provide 
        better quality of life for our patients.The Benefits of this minimally invasive approach are both short term and long term.immediate 
      benefits are less postoperative pain</p>
      <a href="#" style="color: red;">Read more</a>

    </br>
      
      <h3 style="font-style:bold;">Ratings and Reviews</h3>

      
      <div class="col-sm-6" style="background-color:white;border: 1px solid black;">
        
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>



<!-- <div class="row"> -->
  <div class="side">
    
    
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-5"></div>
    </div>
  </div>
  <div class="side right">
    <div>150</div>
  </div>
  <div class="side">
    
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-4"></div>
    </div>
  </div>
  <div class="side right">
    <div>63</div>
  </div>
  <div class="side">
    
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-3"></div>
    </div>
  </div>
  <div class="side right">
    <div>15</div>
  </div>
  <div class="side">
    
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-2"></div>
    </div>
  </div>
  <div class="side right">
    <div>6</div>
  </div>
  <div class="side">
    
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-1"></div>
    </div>
  </div>
  <div class="side right">
    <div>20</div>
  

  </div>

 
 
<ul>
  <h3 style="color: green;">Hospital Facilities</h3>
  <li>Laparoscopic Cancer Surgery</li>
  <li>Speech and Swallowing Rehabilitation</li>
  <li>Home Visits</li>
  <li>Cancer Screening</li>
</ul>
</div>
  </div>

  
    

    <div class="col-sm-4" style="background-color:goldenrod;">
      
        <div class="section-title">
          <h2>Make an Appointment</h2>
          <p></p>
        </div>

        <form action=" " method="post" role="form" class="php-email-form">
          <div class="form-row">
            
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars"><br><br>
              <div class="validate"></div>
          
            
            
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email"><br><br>
              <div class="validate"></div>
            
            
              <input type="text" class="form-control" name="phone" id="phone" placeholder="Your Phone" data-rule="minlen:4" data-msg="Please enter at least 4 chars"><br><br>
              <div class="validate"></div>
            
          </div>
          <div class="form-row">
            
              <input type="date" name="date" class="form-control datepicker" id="date" placeholder="Appointment Date" data-rule="minlen:4" data-msg="Please enter at least 4 chars"><br><br>
              <div class="validate"></div>
            
            
              <select name="department" id="department" class="form-control">
                <option value="">Select Department</option>
                <option value="Heart Treatment">Heart Treatment</option>
                <option value="Blood Preasure">Blood Preasure</option>
                <option value="KidneyStone">KidneyStone</option>
              </select><br><br>
              <div class="validate"></div>
            
            
              <select name="doctor" id="doctor" class="form-control">
                <option value="">Select Doctor</option>
                <option value="DR.Jadha.A">Dr.Jadhav.A</option>
                <option value="Dr.Joshi.B">Dr.Joshi.B</option>
                <option value="Dr.Patil.S">Dr.Patil.S</option>
              </select><br><br>
              <div class="validate"></div>
            
          </div>

          <div class="form-group">
            <textarea class="form-control" name="message" rows="5" placeholder="Message (Optional)"></textarea>
            <div class="validate"></div>
          </div>
          <div class="mb-3">
            <div class="loading"></div>
            <div class="error-message"></div>
            <div class="sent-message" style="color: blue;">Your appointment request has been sent successfully. Thank you!</div>
          </div>
          <div class="text-center"><button type="submit" name="appoinment" style="background-color: green;padding: 10px;">Book Appointment</button></div><br>
        </form>
</div>
       </div>
  </div>
 </div>
</div>
<br><br>
<!--database connection section-->
<?php
if(isset($_POST['appoinment']))
{
  $name=$_POST['name'];
  $email=$_POST['email'];
  $phone=$_POST['phone'];
  $date=$_POST['date'];
  $department=$_POST['department'];
  $doctor=$_POST['doctor'];
  $message=$_POST['message'];


  $insert = "insert into appoinment(name,email,phone,date,department,doctor,message,time) values('$name','$email','$phone','$date','$department','$doctor',' $message',NOW())";
  
  $run=mysqli_query($con,$insert);
  if($run){
    ?>
  <script>
   alert("Your Appoinment Done!")
  </script>
  <?php
  }else{
    ?>
   <script>
 alert("Registration failed..")
 </script>
  <?php
  }
}

?>

<div class="container-fluid" style="margin-top: 5px;">
  <div class="row">
    <div class="col-sm-6 " style="background-color:white;">
      <h3>Hospital Policies</h3>
      <ul>
        <li>Rajiv Gandhi Jivan Yojana</li>
        <li>JeevanJyoti healthcare Scheme</li>
        <li>Death Recover Insurrence</li>
      </ul>  
  </div>

  
    

    <div class="col-sm-6" >
      
      <section id="doctors" class="doctors">
        <div class="container">
  
          <div class="section-title">
            <h2>Doctors</h2>
          
          </div>
  
          <div class="row">
  
            <div class="col-lg-6">
              <div class="member d-flex align-items-start">
                <div class="pic"><img src="assets/img/doctors/doctors-1.jpg" class="img-fluid" alt=""></div>
                <div class="member-info">
                  <h4>Walter White</h4>
                  <span>Chief Medical Officer</span>
                  <p>Explicabo voluptatem mollitia et repellat qui dolorum quasi</p>
                  <div class="social">
                    <a href=""><i class="ri-twitter-fill"></i></a>
                    <a href=""><i class="ri-facebook-fill"></i></a>
                    <a href=""><i class="ri-instagram-fill"></i></a>
                    <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                  </div>
                </div>
              </div>
            </div>
  
            <div class="col-lg-6 mt-4 mt-lg-0">
              <div class="member d-flex align-items-start">
                <div class="pic"><img src="assets/img/doctors/doctors-2.jpg" class="img-fluid" alt=""></div>
                <div class="member-info">
                  <h4>Sarah Jhonson</h4>
                  <span>Anesthesiologist</span>
                  <p>Aut maiores voluptates amet et quis praesentium qui senda para</p>
                  <div class="social">
                    <a href=""><i class="ri-twitter-fill"></i></a>
                    <a href=""><i class="ri-facebook-fill"></i></a>
                    <a href=""><i class="ri-instagram-fill"></i></a>
                    <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                  </div>
                </div>
              </div>
            </div>

          </div>
  
        </div>
      </section>

      </div>
       
  </div>
  </div>

  </div>
</div>
<br><br>

















<!--simillar Hospitals-->
<div class="container-fluid">
  <h2>Simillar Hospitals</h2>
  
  <div class="row">
    <div class="col-md-4">
      <div class="thumbnail">
              <img src="assets/img/h7.jpg" alt="Lights" style="width:100%">
          <div class="caption">
            <span>Sanjeevani Hospital</span></br>
            <span>Near Gurukrupa colony,Narhe</span></br>
            Open 24 hours 
           
          </div>
        
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
      
          <img src="assets/img/h4.jpg" alt="Nature" style="width:100%">
          <div class="caption">
            <span>Sanjeevani Hospital</span></br>
            <span>Near Gurukrupa colony,Narhe</span></br>
            Open 24 hours 
          </div>
        
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
          <img src="assets/img/h2.jpg" alt="Fjords" style="width:100%">
          <div class="caption">
            <span>Sanjeevani Hospital</span></br>
            <span>Near Gurukrupa colony,Narhe</span></br>
            Open 24 hours 
          </div>
        
      </div>
    </div>
  </div>
</div>




<div class="container-fluid">
  <h2>What's nearby</h2>
  
  <div class="row">
    <div class="col-md-3">
      <div class="thumbnail">
              <img src="assets/img/h9.jpg" alt="Lights" style="width:100%">
          <div class="caption">
            <p>Palavi Hotel</p>
          </div>
        
      </div>
    </div>
    <div class="col-md-3">
      <div class="thumbnail">
      
          <img src="assets/img/h10.jpg" alt="Nature" style="width:100%">
          <div class="caption">
            <p>Shree Medical.</p>
          </div>
        
      </div>
    </div>
    <div class="col-md-3">
      <div class="thumbnail">
      
          <img src="assets/img/h11.jpg" alt="Nature" style="width:100%">
          <div class="caption">
            <p>Food Center.</p>
          </div>
        
      </div>
    </div>
    <div class="col-md-3">
      <div class="thumbnail">
          <img src="assets/img/h12.jpg" alt="Fjords" style="width:100%">
          <div class="caption">
            <p>Blood Bank.</p>
          </div>
        
      </div>
    </div>
  </div>
</div>






<!-- footer -->


  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container-fluid">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>Hospital Seva</h3>
            <p>
              A108 Adam Street <br>
              NY 535022, USA<br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>

            <style>
              .blue{
                color: blue;
              }

              .red-blue{
                color:darkblue;
              }

              .voilet{
                color:blueviolet;
              }

              .dark{
                color:aqua;
              }

            </style>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="fab fa-twitter blue"></i></a>
              <a href="#" class="facebook"><i class="fab fa-facebook red-blue"></i></a>
              <a href="#" class="instagram"><i class="fab fa-instagram voilet"></i></a>
              <a href="#" class="google-plus"><i class="fab fa-skype dark"></i></a>
              <a href="#" class="linkedin"><i class="fab fa-linkedin blue"></i></a>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Hospital Seva</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
       
        Designed by : </a>
      </div>
    </div>
  </footer>


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
    



<!-- Vendor JS Files -->
  
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/vendor/bootstrap/js/popper.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/bootstrap/js/jquery.slim.min.js"></script>
<script src="assets/vendor/bootstrap/js/jquery.min.js"></script>


<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>


</body>
</html>