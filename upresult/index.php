<?php
error_reporting(0);
include('includes/config.php'); 
?>


<!doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Student Results Management system</title>
<link rel="icon" type="image/x-icon" href="assets/images/sliate.png">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
      <link rel="stylesheet" type="text/css" href="assets/css/style.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/owl.theme.default.min.css">
     <style>
      .container {
    max-width: 1200px;
}
h1, h2, h3, h4, h5, h6, a {
  
    color:  #510400;
}
      </style>
   </head>
   <body>
      <header>
         <div class="topbar d-none d-md-block"  style="background-color:#510400">
            <div class="container">
               <div class="top-sec d-grid">
                     <ul  class="d-flex list-unstyled m-0 left-info">
                        <li>
                           <span class="fa fa-phone text-white me-2"></span><a href="tel:065-2247519">065-2247519</a>
                        </li>
                        <li class="">
                           <a href="#help" class="d-md-block d-none">Help Center</a>
                        </li>
                        <li class="">
                           <a href="atibatticaloa@gmail.com" class="d-md-block d-none">atibatticaloa@gmail.com</a>
                        </li>
                     </ul>
                  <div>
                     <ul class="d-flex  list-unstyled align-items-center m-0 right-info">
                        <li>
                           <a href="#facebook"><span class="fab fa-facebook-f"></span></a>
                        </li>
                        <li>
                           <a href="#twitter"><span class="fab fa-twitter"></span></a>
                        </li>
                        <li>
                           <a href="#instagram"><span class="fab fa-instagram"></span></a>
                        </li>
                        <li class="mr-0">
                           <a href="#linkedin"><span class="fab fa-linkedin-in"></span></a>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>

         <nav class="navbar navbar-expand-lg bg-white">
          <div class="container">
            <a class="navbar-brand" href="#"><img src="assets/images/logo_sliate.png" style="height: 70px"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>
               
                <li class="nav-item">
                  <a class="nav-link" href="find-result.php">Students</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link"  href="admin-login.php">Admin</a>
                </li>
              </ul>
              <form class="d-flex" role="search">
                <button class="btn btn-danger" type="submit">Search</button>
              </form>
            </div>
          </div>
        </nav>
      </header>
      <section class="main-slider">
        <div class="owl-carousel owl-theme" id="slider">
            
             <div class="item">
              <div class=" banner-view banner-top2 d-flex align-items-center justify-content-center text-center" style="background-image: url('assets/images/tion.png');">
                <div class="banner-info-bg">
                  <h6>Student Result Management System</h6>
                  <h5>ATI Students </h5>
                  <p class="mt-md-4 mt-3">All our dreams can come true, if we have the courage to pursue them </p>
                  <a class="btn btn-style btn-danger mt-sm-5 mt-4 mr-2" href=""> Learn More</a>
                </div>
              </div>
            </div>
            <div class="item">
              
              <div class=" banner-view banner-top1 d-flex align-items-center justify-content-center text-center" style="background-image: url('assets/images/tion.png');"  >
                <div class="banner-info-bg">
                  <!-- <h6>We are Creative</h6> -->
                  <h5>Student Result Management System</h5>
                  <p class="mt-md-4 mt-3">You can get All ATI students Results </p>
                  <a class="btn btn-style btn-danger mt-sm-5 mt-4 mr-2" href=""> Learn More</a>
                </div>
              </div>
            </div>
            
        </div>

      </section>
      <section class="py-5 about"> 
        <div class="container">
          <div class="row ">
           <div class="col-md-6 ">
            <h3 class="title-big mx-0">Notice Board</h3>
                 <marquee direction="up"  onmouseover="this.stop();" onmouseout="this.start();" class="mt-5">
                   <ul class="">
 <?php $sql = "SELECT * from tblnotice";
$query = $dbh->prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{   ?>                      
<li><a href="notice-details.php?nid=<?php echo htmlentities($result->id);?>" target="_blank" class="text-dark"><?php echo htmlentities($result->noticeTitle);?></li>
<?php }} ?>

                   </ul>
               </marquee>
                </div>
            <div class="col-md-6">
              <img src="assets/images/college.png" class="img-fluid">
            </div>
          </div>
        </div>
      </section>
      <section class="py-5 service"> 
        <div class="container">
           <h3 class="title-big text-center pb-5">Courses offered by ATI</h3>
            <div class="row ">
                  <div class="col-md-3">
                    <div class="grids5-info">
                        <a href="#service" class="d-block zoom"><img src="assets/images/s1.jpg" alt="" class="img-fluid service-image"></a>
                        <div class="blog-info" style="color:#510400">
                            <span class="fa fa-desktop"></span>
                            <h4><a href="#service">HNDIT</a></h4>
                        </div>
                    </div>
                </div>
            <div class="col-md-3">
                    <div class="grids5-info">
                        <a href="#service" class="d-block zoom"><img src="assets/images/englishtr.jpg" alt="" class="img-fluid service-image"></a>
                        <div class="blog-info">
                            <span class="fa fa-book"></span>
                            <h4><a href="#service">HNDE</a></h4>
                        </div>
                    </div>
            </div>
            <div class="col-md-3">
                    <div class="grids5-info">
                        <a href="#service" class="d-block zoom"><img src="assets/images/acc.jpg" alt="" class="img-fluid service-image"></a>
                        <div class="blog-info">
                            <span class="fa fa-line-chart"></span>
                            <h4><a href="#service">HNDA</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="grids5-info">
                        <a href="#service" class="d-block zoom"><img src="assets/images/hndthm.jpg" alt="" class="img-fluid service-image"></a>
                        <div class="blog-info">
                            <span class="fa fa-plane"></span>
                            <h4><a href="#service">HNDTHM</a></h4>
                        </div>
                    </div>
                    </div>
        </div>
      </section>
      <section class="py-5">
          <div class="container py-md-5 py-sm-4 py-2">
              <div class="row align-items-center">
                  <div class="col-lg-7">
                      <div class="bottom-info">
                          <div class="header-section">
                              <h3 class="title-big mx-0">About us</h3>
                              <h3 class="title-big mx-0">Our Mission</h3>
                              <p class="mt-3 pr-lg-5">Creating Excellent Higher National and National Diplomates with Modern Technology for Sustainable Development.</p>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-5 text-lg-end">
                  <h3 class="title-big mx-0">Our Vision</h3>
                              <p class="mt-3 pr-lg-5">To Become the Centre of Excellence in Technological Education.</p>
              </div>
            </div>
        </div>
      </section>
      <section class="py-5" id="services">
    <div class="features-main py-lg-5 py-md-3">
        <div class="container">
            <div class="header-section text-center mx-auto">
                <h3 class="title-big">Our Students Feilds</h3>
            </div>
            <div class="row features mt-lg-4">
                <div class="col-lg-4 col-md-6 feature-grid">
                    <div class="feature-body service1"><a href="#url">
                            <div class="feature-img">
                                <span class="fa fa-laptop" aria-hidden="true"></span>
                            </div>
                            </a><div class="feature-info mt-4"><a href="#url">
                                <h3 class="feature-titel mb-3">Software Developer </h3>
                                <p class="feature-text">Develop the project system in many language
                                </p>
                                </a><a href="#read" class="read mt-4 d-block"> Read More</a>
                            </div>
                        </div>
                    
                </div>
                <div class="col-lg-4 col-md-6 feature-grid">
                    <div class="feature-body service2"><a href="#url">
                            <div class="feature-img">
                                <span class="fa fa-desktop" aria-hidden="true"></span>
                            </div>
                            </a><div class="feature-info mt-4"><a href="#url">
                                <h3 class="feature-titel mb-3">UI / UX Designer </h3>
                                <p class="feature-text">Designing  UI in the Project
                                </p>
                                </a><a href="#read" class="read mt-4 d-block"> Read More</a>
                            </div>
                        </div>
                    
                </div>
                <div class="col-lg-4 col-md-6 feature-grid">
                   <div class="feature-body service3"><a href="#url">
                            <div class="feature-img">
                                <span class="fa fa-mobile" aria-hidden="true"></span>
                            </div>
                            </a><div class="feature-info mt-4"><a href="#url">
                                <h3 class="feature-titel mb-3">Android Developer</h3>
                                <p class="feature-text">Develop the Application 
                                </p>
                                </a><a href="#read" class="read mt-4 d-block"> Read More</a>
                            </div>
                        </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>
    <section class="customers py-md-4 py-3"  style="background-color:#ffc266">
      <div class="container">
      <div class="owl-carousel owl-theme" id="customer">
        <div class="item"><img src="assets/images/accountancy.jpg"></div>
        <div class="item"><img src="assets/images/english.jpg"></div>
        <div class="item"><img src="assets/images/IT.jpg"></div>
        <div class="item"><img src="assets/images/THM.jpg"></div>
      </div>
    </div>
    </section>
<footer class="footer pt-5" style="background-color:#510400">
          <div class="container py-5" >
            <div class="row footer-top-29" >
              <div class="col-lg-4 col-md-6 col-sm-7 footer-list-29 footer-1 pr-lg-5">
                <div class="footer-logo mb-4">
                  <a class="navbar-brand" href="index.html">
                    <img style="height: 50px" src="assets/images/logo_sliate.png"></a>
                </div>
                
                <div class="main-social-footer-29 mt-4">
                  <a href="#facebook" class="facebook"><span class="fab fa-facebook-f"></span></a>
                  <a href="#twitter" class="twitter"><span class="fab fa-twitter"></span></a>
                  <a href="#instagram" class="instagram"><span class="fab fa-instagram"></span></a>
                  <a href="#linkedin" class="linkedin"><span class="fab fa-linkedin-in"></span></a>
                </div>
              </div>
              <!-- <div class="col-lg-2 col-md-6 col-sm-5 col-6 footer-list-29 footer-2 mt-sm-0 mt-5">

                <ul>
                  <h6 class="footer-title-29">Navigation</h6>
                  <li><a href="about.html">About Us</a></li>
                  <li><a href="blog.html"> Blog posts</a></li>
                  <li><a href="services.html">Services</a></li>
                  <li><a href="contact.html">Contact us</a></li>
                  <li><a href="components.html"> Components</a></li>
                </ul>
              </div> -->
              <div class="col-lg-2 col-md-6 col-sm-5 col-6 footer-list-29 footer-3 mt-lg-0 mt-5">
                <h6 class="footer-title-29">Courses</h6>
                <ul>
                  <li><a href="#HND in Accountancy">HND in Accountancy </a></li>
                  <li><a href="#HND in Information Technology">HND in Information Technology</a></li>
                  <li><a href="#HND in English">HND in English</a></li>
                  <li><a href="#HND in Tourism and Hospitality Management">HND in Tourism and Hospitality Management</a></li>
                </ul>

              </div>
              <div class="col-lg-4 col-md-6 col-sm-7 footer-list-29 footer-4 mt-lg-0 mt-5">
                <h6 class="footer-title-29">Contact Info </h6>
                <p>Address : Main Street, KovilKulam, Arayampathi, Batticaloa</p>
                <p class="mt-2">Phone : <a href="tel:065-2247519"> 065-2247519/ 065-2247470</a></p>
                <p class="mt-2">Email : <a href="atibatticaloa@sliate.ac.lk">atibatticaloa@sliate.ac.lk</a></p>
                <p class="mt-2">Opening Hours : 8.30 am – 4.15 pm</p>
              </div>
            </div>
          </div>
        <!-- copyright -->
        <section class="w3l-copyright text-center">
          <div class="container">
            <p class="copy-footer-29">Copyright &copy; Student Result Management System <?php echo date('Y');?></p>
          </div>
      </section>
      </footer>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      <script src="assets/js/owl.carousel.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

      <script src="assets/js/main.js"></script>
   </body>
</html>