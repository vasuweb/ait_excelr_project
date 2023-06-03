<?php 
session_start();
$_SESSION['course_name'] = "MERN Stack";
$_SESSION['location'] = "Hyderabad";
require_once('includes/header.php'); 
?>

      <div class="mainbanner">
         <div class="container h-100 d-flex align-content-center">
            <div class="row">
               <div class="col-md-6 my-auto text-white">
                  <h1 class="mb-3"><?php echo $_SESSION['course_name']; ?></h1>
                  <h3>Manual & Selenium Testing <br /> Certification Training</h3>
                  <p class="banner-desc">Join India's leading software testing course that is based on an industry-relevant
                     curriculum, learn from expert faculty who have hands-on experience, and get <b>guaranteed job
                     interviews* </b> with our 2000+ partner companies until you land your first job.<br />
                  <p style="font-size:14px"><strong><img class="img-fluid lazy" src=""
                     data-src="./assets/images/company/star.png"> Job Interview Guarantee (JIG) Program* .</strong>
                  </p>
                  <p><b>* Terms and Conditions apply</b></p>
                  </p>
                  <a class="btn btn-lg btn-danger" data-toggle="modal" data-target="#myModal"
                     ng-click="modalopenbutton('Download Curriculum')" href="#" role="button">Download Brochure </a></p>
               </div>
               <div class="col-md-6 my-auto text-right hidden-xs">
                  <img src="./assets/images/banner-right.png" width="360">
               </div>
            </div>
         </div>
      </div>
      <div class="hidden-lg">
         <div class="container">
            <img src="./assets/images/banner-right.png" class="img-fluid">
         </div>
      </div>
      <div class="bg-bluelite pt-3 pb-3">
         <div class="container">
            <div class="row no-gutters">
               <div class="col-6 col-md-2">
                  <img class="lazy" src="./assets/images/ajax-loader.gif" data-src="./assets/images/bannertwo/icon_1.png"
                     class="img-fluid w-100">
               </div>
               <div class="col-6 col-md-2">
                  <img class="lazy" src="./assets/images/ajax-loader.gif" data-src="./assets/images/bannertwo/icon_2.png"
                     class="img-fluid w-100">
               </div>
               <div class="col-6 col-md-2">
                  <img class="lazy" src="./assets/images/ajax-loader.gif" data-src="./assets/images/bannertwo/icon_6.png">
               </div>
               <div class="col-6 col-md-2">
                  <img class="lazy" src="./assets/images/ajax-loader.gif" data-src="./assets/images/bannertwo/icon_3.png"
                     class="img-fluid w-100">
               </div>
               <div class="col-6 col-md-2">
                  <img class="lazy" src="./assets/images/ajax-loader.gif" data-src="./assets/images/bannertwo/icon_4.png">
               </div>
               <div class="col-6 col-md-2">
                  <img class="lazy" src="./assets/images/ajax-loader.gif" data-src="./assets/images/bannertwo/icon_5.png">
               </div>
            </div>
         </div>
      </div>
      <!-- slider -->
      <div class="container">
         <h3 class="text-blue text-center mt-4 font-600">Our Alumni Works at</h3>
         <div id="myCarousel" class="carousel slide w-100" data-ride="carousel">
               <div class="carousel-inner w-100" role="listbox">
                  <div class="carousel-item">
                     <div class="col-lg-3 col-md-6 text-center bg-white">
                        <img class="img-fluid lazy" src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/1.jpg" data-src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/1.jpg">                        
                     </div>
                  <div class="col-lg-3 col-md-6 text-center bg-white">
                        <img class="img-fluid lazy" src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/2.jpg" data-src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/2.jpg">                        
                     </div><div class="col-lg-3 col-md-6 text-center bg-white">
                        <img class="img-fluid lazy" src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/3.jpg" data-src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/3.jpg">                        
                     </div><div class="col-lg-3 col-md-6 text-center bg-white">
                        <img class="img-fluid lazy" src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/4.jpg" data-src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/4.jpg">                        
                     </div><div class="col-lg-3 col-md-6 text-center bg-white">
                        <img class="img-fluid lazy" src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/5.jpg" data-src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/5.jpg">                        
                     </div><div class="col-lg-3 col-md-6 text-center bg-white">
                        <img class="img-fluid lazy" src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/6.png" data-src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/6.png">                        
                     </div></div>
                  <div class="carousel-item">
                     <div class="col-lg-3 col-md-6 text-center bg-white">
                        <img class="img-fluid lazy" src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/2.jpg" data-src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/2.jpg">                        
                     </div>
                  <div class="col-lg-3 col-md-6 text-center bg-white">
                        <img class="img-fluid lazy" src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/3.jpg" data-src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/3.jpg">                        
                     </div><div class="col-lg-3 col-md-6 text-center bg-white">
                        <img class="img-fluid lazy" src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/4.jpg" data-src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/4.jpg">                        
                     </div><div class="col-lg-3 col-md-6 text-center bg-white">
                        <img class="img-fluid lazy" src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/5.jpg" data-src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/5.jpg">                        
                     </div><div class="col-lg-3 col-md-6 text-center bg-white">
                        <img class="img-fluid lazy" src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/6.png" data-src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/6.png">                        
                     </div><div class="col-lg-3 col-md-6 text-center bg-white">
                        <img class="img-fluid lazy" src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/7.png" data-src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/7.png">                        
                     </div></div>
                  <div class="carousel-item">
                     <div class="col-lg-3 col-md-6 text-center bg-white">
                        <img class="img-fluid lazy" src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/3.jpg" data-src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/3.jpg">                        
                     </div>
                  <div class="col-lg-3 col-md-6 text-center bg-white">
                        <img class="img-fluid lazy" src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/4.jpg" data-src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/4.jpg">                        
                     </div><div class="col-lg-3 col-md-6 text-center bg-white">
                        <img class="img-fluid lazy" src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/5.jpg" data-src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/5.jpg">                        
                     </div><div class="col-lg-3 col-md-6 text-center bg-white">
                        <img class="img-fluid lazy" src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/6.png" data-src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/6.png">                        
                     </div><div class="col-lg-3 col-md-6 text-center bg-white">
                        <img class="img-fluid lazy" src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/7.png" data-src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/7.png">                        
                     </div><div class="col-lg-3 col-md-6 text-center bg-white">
                        <img class="img-fluid lazy" src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/8.png" data-src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/8.png">                        
                     </div></div>
                  <div class="carousel-item">
                     <div class="col-lg-3 col-md-6 text-center bg-white">
                        <img class="img-fluid lazy" src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/4.jpg" data-src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/4.jpg">                        
                     </div>
                  <div class="col-lg-3 col-md-6 text-center bg-white">
                        <img class="img-fluid lazy" src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/5.jpg" data-src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/5.jpg">                        
                     </div><div class="col-lg-3 col-md-6 text-center bg-white">
                        <img class="img-fluid lazy" src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/6.png" data-src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/6.png">                        
                     </div><div class="col-lg-3 col-md-6 text-center bg-white">
                        <img class="img-fluid lazy" src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/7.png" data-src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/7.png">                        
                     </div><div class="col-lg-3 col-md-6 text-center bg-white">
                        <img class="img-fluid lazy" src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/8.png" data-src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/8.png">                        
                     </div><div class="col-lg-3 col-md-6 text-center bg-white">
                        <img class="img-fluid lazy" src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/9.png" data-src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/9.png">                        
                     </div></div>
                  <div class="carousel-item">
                     <div class="col-lg-3 col-md-6 text-center bg-white">
                        <img class="img-fluid lazy" src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/5.jpg" data-src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/5.jpg">                        
                     </div>
                  <div class="col-lg-3 col-md-6 text-center bg-white">
                        <img class="img-fluid lazy" src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/6.png" data-src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/6.png">                        
                     </div><div class="col-lg-3 col-md-6 text-center bg-white">
                        <img class="img-fluid lazy" src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/7.png" data-src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/7.png">                        
                     </div><div class="col-lg-3 col-md-6 text-center bg-white">
                        <img class="img-fluid lazy" src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/8.png" data-src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/8.png">                        
                     </div><div class="col-lg-3 col-md-6 text-center bg-white">
                        <img class="img-fluid lazy" src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/9.png" data-src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/9.png">                        
                     </div><div class="col-lg-3 col-md-6 text-center bg-white">
                        <img class="img-fluid lazy" src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/10.png" data-src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/10.png">                        
                     </div></div>
                  <div class="carousel-item">
                     <div class="col-lg-3 col-md-6 text-center bg-white">
                        <img class="img-fluid lazy" src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/6.png" data-src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/6.png">                        
                     </div>
                  <div class="col-lg-3 col-md-6 text-center bg-white">
                        <img class="img-fluid lazy" src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/7.png" data-src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/7.png">                        
                     </div><div class="col-lg-3 col-md-6 text-center bg-white">
                        <img class="img-fluid lazy" src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/8.png" data-src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/8.png">                        
                     </div><div class="col-lg-3 col-md-6 text-center bg-white">
                        <img class="img-fluid lazy" src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/9.png" data-src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/9.png">                        
                     </div><div class="col-lg-3 col-md-6 text-center bg-white">
                        <img class="img-fluid lazy" src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/10.png" data-src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/10.png">                        
                     </div><div class="col-lg-3 col-md-6 text-center bg-white">
                        <img class="img-fluid lazy" src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/11.png" data-src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/11.png">                        
                     </div></div>
                  <div class="carousel-item">
                     <div class="col-lg-3 col-md-6 text-center bg-white">
                        <img class="img-fluid lazy" src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/7.png" data-src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/7.png">                        
                     </div>
                  <div class="col-lg-3 col-md-6 text-center bg-white">
                        <img class="img-fluid lazy" src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/8.png" data-src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/8.png">                        
                     </div><div class="col-lg-3 col-md-6 text-center bg-white">
                        <img class="img-fluid lazy" src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/9.png" data-src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/9.png">                        
                     </div><div class="col-lg-3 col-md-6 text-center bg-white">
                        <img class="img-fluid lazy" src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/10.png" data-src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/10.png">                        
                     </div><div class="col-lg-3 col-md-6 text-center bg-white">
                        <img class="img-fluid lazy" src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/11.png" data-src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/11.png">                        
                     </div><div class="col-lg-3 col-md-6 text-center bg-white">
                        <img class="img-fluid lazy" src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/12.png" data-src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/12.png">                        
                     </div></div>
                  <div class="carousel-item">
                     <div class="col-lg-3 col-md-6 text-center bg-white">
                        <img class="img-fluid lazy" src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/8.png" data-src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/8.png">                        
                     </div>
                  <div class="col-lg-3 col-md-6 text-center bg-white">
                        <img class="img-fluid lazy" src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/9.png" data-src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/9.png">                        
                     </div><div class="col-lg-3 col-md-6 text-center bg-white">
                        <img class="img-fluid lazy" src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/10.png" data-src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/10.png">                        
                     </div><div class="col-lg-3 col-md-6 text-center bg-white">
                        <img class="img-fluid lazy" src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/11.png" data-src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/11.png">                        
                     </div><div class="col-lg-3 col-md-6 text-center bg-white">
                        <img class="img-fluid lazy" src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/12.png" data-src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/12.png">                        
                     </div><div class="col-lg-3 col-md-6 text-center bg-white">
                        <img class="img-fluid lazy" src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/13.png" data-src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/13.png">                        
                     </div></div>
                  <div class="carousel-item">
                     <div class="col-lg-3 col-md-6 text-center bg-white">
                        <img class="img-fluid lazy" src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/9.png" data-src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/9.png">                        
                     </div>
                  <div class="col-lg-3 col-md-6 text-center bg-white">
                        <img class="img-fluid lazy" src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/10.png" data-src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/10.png">                        
                     </div><div class="col-lg-3 col-md-6 text-center bg-white">
                        <img class="img-fluid lazy" src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/11.png" data-src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/11.png">                        
                     </div><div class="col-lg-3 col-md-6 text-center bg-white">
                        <img class="img-fluid lazy" src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/12.png" data-src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/12.png">                        
                     </div><div class="col-lg-3 col-md-6 text-center bg-white">
                        <img class="img-fluid lazy" src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/13.png" data-src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/13.png">                        
                     </div><div class="col-lg-3 col-md-6 text-center bg-white">
                        <img class="img-fluid lazy" src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/14.png" data-src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/14.png">                        
                     </div></div>
                  <div class="carousel-item">
                     <div class="col-lg-3 col-md-6 text-center bg-white">
                        <img class="img-fluid lazy" src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/10.png" data-src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/10.png">                        
                     </div>
                  <div class="col-lg-3 col-md-6 text-center bg-white">
                        <img class="img-fluid lazy" src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/11.png" data-src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/11.png">                        
                     </div><div class="col-lg-3 col-md-6 text-center bg-white">
                        <img class="img-fluid lazy" src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/12.png" data-src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/12.png">                        
                     </div><div class="col-lg-3 col-md-6 text-center bg-white">
                        <img class="img-fluid lazy" src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/13.png" data-src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/13.png">                        
                     </div><div class="col-lg-3 col-md-6 text-center bg-white">
                        <img class="img-fluid lazy" src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/14.png" data-src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/14.png">                        
                     </div><div class="col-lg-3 col-md-6 text-center bg-white">
                        <img class="img-fluid lazy" src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/15.png" data-src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/15.png">                        
                     </div></div>
                  <div class="carousel-item">
                     <div class="col-lg-3 col-md-6 text-center bg-white">
                        <img class="img-fluid lazy" src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/11.png" data-src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/11.png">                        
                     </div>
                  <div class="col-lg-3 col-md-6 text-center bg-white">
                        <img class="img-fluid lazy" src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/12.png" data-src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/12.png">                        
                     </div><div class="col-lg-3 col-md-6 text-center bg-white">
                        <img class="img-fluid lazy" src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/13.png" data-src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/13.png">                        
                     </div><div class="col-lg-3 col-md-6 text-center bg-white">
                        <img class="img-fluid lazy" src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/14.png" data-src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/14.png">                        
                     </div><div class="col-lg-3 col-md-6 text-center bg-white">
                        <img class="img-fluid lazy" src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/15.png" data-src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/15.png">                        
                     </div><div class="col-lg-3 col-md-6 text-center bg-white">
                        <img class="img-fluid lazy" src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/16.png" data-src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/16.png">                        
                     </div></div>
                  <div class="carousel-item">
                     <div class="col-lg-3 col-md-6 text-center bg-white">
                        <img class="img-fluid lazy" src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/12.png" data-src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/12.png">                        
                     </div>
                  <div class="col-lg-3 col-md-6 text-center bg-white">
                        <img class="img-fluid lazy" src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/13.png" data-src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/13.png">                        
                     </div><div class="col-lg-3 col-md-6 text-center bg-white">
                        <img class="img-fluid lazy" src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/14.png" data-src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/14.png">                        
                     </div><div class="col-lg-3 col-md-6 text-center bg-white">
                        <img class="img-fluid lazy" src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/15.png" data-src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/15.png">                        
                     </div><div class="col-lg-3 col-md-6 text-center bg-white">
                        <img class="img-fluid lazy" src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/16.png" data-src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/16.png">                        
                     </div><div class="col-lg-3 col-md-6 text-center bg-white">
                        <img class="img-fluid lazy" src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/17.png" data-src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/17.png">                        
                     </div></div>
                  <div class="carousel-item active">
                     <div class="col-lg-3 col-md-6 text-center bg-white">
                        <img class="img-fluid lazy" src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/13.png" data-src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/13.png">                        
                     </div>
                  <div class="col-lg-3 col-md-6 text-center bg-white">
                        <img class="img-fluid lazy" src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/14.png" data-src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/14.png">                        
                     </div><div class="col-lg-3 col-md-6 text-center bg-white">
                        <img class="img-fluid lazy" src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/15.png" data-src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/15.png">                        
                     </div><div class="col-lg-3 col-md-6 text-center bg-white">
                        <img class="img-fluid lazy" src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/16.png" data-src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/16.png">                        
                     </div><div class="col-lg-3 col-md-6 text-center bg-white">
                        <img class="img-fluid lazy" src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/17.png" data-src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/17.png">                        
                     </div><div class="col-lg-3 col-md-6 text-center bg-white">
                        <img class="img-fluid lazy" src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/18.png" data-src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/18.png">                        
                     </div></div>
                  <div class="carousel-item">
                     <div class="col-lg-3 col-md-6 text-center bg-white">
                        <img class="img-fluid lazy" src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/14.png" data-src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/14.png">                        
                     </div>
                  <div class="col-lg-3 col-md-6 text-center bg-white">
                        <img class="img-fluid lazy" src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/15.png" data-src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/15.png">                        
                     </div><div class="col-lg-3 col-md-6 text-center bg-white">
                        <img class="img-fluid lazy" src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/16.png" data-src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/16.png">                        
                     </div><div class="col-lg-3 col-md-6 text-center bg-white">
                        <img class="img-fluid lazy" src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/17.png" data-src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/17.png">                        
                     </div><div class="col-lg-3 col-md-6 text-center bg-white">
                        <img class="img-fluid lazy" src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/18.png" data-src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/18.png">                        
                     </div><div class="col-lg-3 col-md-6 text-center bg-white">
                        <img class="img-fluid lazy" src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/19.png" data-src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/19.png">                        
                     </div></div>
                  <div class="carousel-item">
                     <div class="col-lg-3 col-md-6 text-center bg-white">
                        <img class="img-fluid lazy" src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/15.png" data-src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/15.png">                        
                     </div>
                  <div class="col-lg-3 col-md-6 text-center bg-white">
                        <img class="img-fluid lazy" src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/16.png" data-src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/16.png">                        
                     </div><div class="col-lg-3 col-md-6 text-center bg-white">
                        <img class="img-fluid lazy" src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/17.png" data-src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/17.png">                        
                     </div><div class="col-lg-3 col-md-6 text-center bg-white">
                        <img class="img-fluid lazy" src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/18.png" data-src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/18.png">                        
                     </div><div class="col-lg-3 col-md-6 text-center bg-white">
                        <img class="img-fluid lazy" src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/19.png" data-src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/19.png">                        
                     </div><div class="col-lg-3 col-md-6 text-center bg-white">
                        <img class="img-fluid lazy" src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/20.png" data-src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/20.png">                        
                     </div></div>
                  <div class="carousel-item">
                     <div class="col-lg-3 col-md-6 text-center bg-white">
                        <img class="img-fluid lazy" src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/16.png" data-src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/16.png">                        
                     </div>
                  <div class="col-lg-3 col-md-6 text-center bg-white">
                        <img class="img-fluid lazy" src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/17.png" data-src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/17.png">                        
                     </div><div class="col-lg-3 col-md-6 text-center bg-white">
                        <img class="img-fluid lazy" src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/18.png" data-src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/18.png">                        
                     </div><div class="col-lg-3 col-md-6 text-center bg-white">
                        <img class="img-fluid lazy" src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/19.png" data-src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/19.png">                        
                     </div><div class="col-lg-3 col-md-6 text-center bg-white">
                        <img class="img-fluid lazy" src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/20.png" data-src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/20.png">                        
                     </div><div class="col-lg-3 col-md-6 text-center bg-white">
                        <img class="img-fluid lazy" src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/1.jpg" data-src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/1.jpg">                        
                     </div></div>
                  <div class="carousel-item">
                     <div class="col-lg-3 col-md-6 text-center bg-white">
                        <img class="img-fluid lazy" src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/17.png" data-src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/17.png">                        
                     </div>
                  <div class="col-lg-3 col-md-6 text-center bg-white">
                        <img class="img-fluid lazy" src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/18.png" data-src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/18.png">                        
                     </div><div class="col-lg-3 col-md-6 text-center bg-white">
                        <img class="img-fluid lazy" src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/19.png" data-src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/19.png">                        
                     </div><div class="col-lg-3 col-md-6 text-center bg-white">
                        <img class="img-fluid lazy" src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/20.png" data-src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/20.png">                        
                     </div><div class="col-lg-3 col-md-6 text-center bg-white">
                        <img class="img-fluid lazy" src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/1.jpg" data-src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/1.jpg">                        
                     </div><div class="col-lg-3 col-md-6 text-center bg-white">
                        <img class="img-fluid lazy" src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/2.jpg" data-src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/2.jpg">                        
                     </div></div>
                  <div class="carousel-item">
                     <div class="col-lg-3 col-md-6 text-center bg-white">
                        <img class="img-fluid lazy" src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/18.png" data-src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/18.png">                        
                     </div>
                  <div class="col-lg-3 col-md-6 text-center bg-white">
                        <img class="img-fluid lazy" src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/19.png" data-src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/19.png">                        
                     </div><div class="col-lg-3 col-md-6 text-center bg-white">
                        <img class="img-fluid lazy" src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/20.png" data-src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/20.png">                        
                     </div><div class="col-lg-3 col-md-6 text-center bg-white">
                        <img class="img-fluid lazy" src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/1.jpg" data-src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/1.jpg">                        
                     </div><div class="col-lg-3 col-md-6 text-center bg-white">
                        <img class="img-fluid lazy" src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/2.jpg" data-src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/2.jpg">                        
                     </div><div class="col-lg-3 col-md-6 text-center bg-white">
                        <img class="img-fluid lazy" src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/3.jpg" data-src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/3.jpg">                        
                     </div></div>
                  <div class="carousel-item">
                     <div class="col-lg-3 col-md-6 text-center bg-white">
                        <img class="img-fluid lazy" src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/19.png" data-src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/19.png">                        
                     </div>
                  <div class="col-lg-3 col-md-6 text-center bg-white">
                        <img class="img-fluid lazy" src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/20.png" data-src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/20.png">                        
                     </div><div class="col-lg-3 col-md-6 text-center bg-white">
                        <img class="img-fluid lazy" src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/1.jpg" data-src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/1.jpg">                        
                     </div><div class="col-lg-3 col-md-6 text-center bg-white">
                        <img class="img-fluid lazy" src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/2.jpg" data-src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/2.jpg">                        
                     </div><div class="col-lg-3 col-md-6 text-center bg-white">
                        <img class="img-fluid lazy" src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/3.jpg" data-src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/3.jpg">                        
                     </div><div class="col-lg-3 col-md-6 text-center bg-white">
                        <img class="img-fluid lazy" src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/4.jpg" data-src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/4.jpg">                        
                     </div></div>
                  <div class="carousel-item">
                     <div class="col-lg-3 col-md-6 text-center bg-white">
                        <img class="img-fluid lazy" src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/20.png" data-src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/20.png">                        
                     </div>
                  <div class="col-lg-3 col-md-6 text-center bg-white">
                        <img class="img-fluid lazy" src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/1.jpg" data-src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/1.jpg">                        
                     </div><div class="col-lg-3 col-md-6 text-center bg-white">
                        <img class="img-fluid lazy" src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/2.jpg" data-src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/2.jpg">                        
                     </div><div class="col-lg-3 col-md-6 text-center bg-white">
                        <img class="img-fluid lazy" src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/3.jpg" data-src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/3.jpg">                        
                     </div><div class="col-lg-3 col-md-6 text-center bg-white">
                        <img class="img-fluid lazy" src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/4.jpg" data-src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/4.jpg">                        
                     </div><div class="col-lg-3 col-md-6 text-center bg-white">
                        <img class="img-fluid lazy" src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/5.jpg" data-src="https://excelrindia.b-cdn.net/software-testing-training/assets/images/alumini/5.jpg">                        
                     </div></div>
               </div>
               <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
               <i class="fa fa-chevron-left fa-lg text-muted"></i>            </a>
               <a class="carousel-control-next text-faded" href="#myCarousel" role="button" data-slide="next">
               <i class="fa fa-chevron-right fa-lg text-muted"></i>           </a>            
            </div>
      </div>
      <div class="bg-lite programme pt-2 pb-2">
         <div class="container">
            <h3 class="mt-3 mb-4 font-600">Program Highlights</h3>
            <div class="row">
               <div class="col-md-3 form-group">
                  <div class="card p-1">
                     <div class="card-header color1">
                        <div class="text-center"><img class="lazy"
                           src="./assets/images/ajax-loader.gif"
                           data-src="./assets/images/icon1.png"></div>
                        <p class="font-16 mb-0 text-center">Top-Notch <br />Faculty</p>
                     </div>
                     <div class="card-body p-2">
                        <p class="removejustify" style="margin-bottom: 37px;">Trainers at AchieversIT are passionate about
                           training, and carry 12+ years of industry experience.
                        </p>
                     </div>
                  </div>
               </div>
               <div class="col-md-3 form-group">
                  <div class="card p-1">
                     <div class="card-header color2">
                        <div class="text-center"><img class="lazy"
                           src="./assets/images/ajax-loader.gif"
                           data-src="./assets/images/icon2.png"></div>
                        <p class="font-16 mb-0 text-center">Exhaustive <br /> Course Curriculum</p>
                     </div>
                     <div class="card-body p-2">
                        <p class="removejustify" style="margin-bottom: 37px;">Our industry-relevant course curriculum is
                           tailored to provide practical exposure with the theory.
                        </p>
                     </div>
                  </div>
               </div>
               <div class="col-md-3 form-group">
                  <div class="card p-1">
                     <div class="card-header color3">
                        <div class="text-center"><img class="lazy"
                           src="./assets/images/ajax-loader.gif"
                           data-src="./assets/images/icon3.png">
                        </div>
                        <p class="font-16 mb-0 text-center">Real-life Projects <br /> and Bootcamps</p>
                     </div>
                     <div class="card-body p-2">
                        <p class="removejustify" style="margin-bottom: 37px;">Learners will work on real-life test case
                           scenarios from various domains to get application knowledge.
                        </p>
                     </div>
                  </div>
               </div>
               <div class="col-md-3 form-group">
                  <div class="card p-1">
                     <div class="card-header color4">
                        <div class="text-center"><img class="lazy"
                           src="./assets/images/ajax-loader.gif"
                           data-src="./assets/images/icon4.png"></div>
                        <p class="font-16 mb-0 text-center">Guaranteed Job </br>Interviews</p>
                     </div>
                     <div class="card-body p-2">
                        <p class="removejustify">Participants in the placement pool will get guaranteed job interviews
                           across our 2000+ partner companies until they receive the first job offer.
                        </p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="skillsdiv">
         <div class="container mb-5">
            <h3 class="mt-3 mb-4 font-600">Skills Covered</h3>
            <div class="row text-center">
               <div class="col-6 col-md-2">
                  <img class="lazy"
                     src="./assets/images/ajax-loader.gif"
                     data-src="./assets/images/skills/Software-Testing.png">
                  <p>Software Testing</p>
               </div>
               <div class="col-6 col-md-2">
                  <img class="lazy"
                     src="./assets/images/ajax-loader.gif"
                     data-src="./assets/images/skills/Manual-Testing.png">
                  <p>Manual Testing</p>
               </div>
               <div class="col-6 col-md-2">
                  <img class="lazy"
                     src="./assets/images/ajax-loader.gif"
                     data-src="./assets/images/skills/Agile.png">
                  <p>Agile Methodology</p>
               </div>
               <div class="col-6 col-md-2">
                  <img class="lazy"
                     src="./assets/images/ajax-loader.gif"
                     data-src="./assets/images/skills/Jira.png">
                  <p>Jira's best practices</p>
               </div>
               <div class="col-6 col-md-2">
                  <img class="lazy"
                     src="./assets/images/ajax-loader.gif"
                     data-src="./assets/images/skills/Java.png">
                  <p>Core Java</p>
               </div>
               <div class="col-6 col-md-2">
                  <img class="lazy"
                     src="./assets/images/ajax-loader.gif"
                     data-src="./assets/images/skills/oops.png">
                  <p>OOPS Concept</p>
               </div>
            </div>
            <div ng-show="showmore == 1">
               <div class="row text-center">
                  <div class="col-6 col-md-2">
                     <img class="lazy"
                        src="./assets/images/ajax-loader.gif"
                        data-src="./assets/images/skills/Automation-Testing.png">
                     <p>Automation Testing</p>
                  </div>
                  <div class="col-6 col-md-2">
                     <img class="lazy"
                        src="./assets/images/ajax-loader.gif"
                        data-src="./assets/images/skills/Selenium.png">
                     <p>Selenium Webdriver</p>
                  </div>
                  <div class="col-6 col-md-2">
                     <img class="lazy"
                        src="./assets/images/ajax-loader.gif"
                        data-src="./assets/images/skills/Page.png">
                     <p>Page Object Model</p>
                  </div>
                  <div class="col-6 col-md-2">
                     <img class="lazy"
                        src="./assets/images/ajax-loader.gif"
                        data-src="./assets/images/skills/Testng.png">
                     <p>TestNG Framework</p>
                  </div>
                  <div class="col-6 col-md-2">
                     <img class="lazy"
                        src="./assets/images/ajax-loader.gif"
                        data-src="./assets/images/skills/Data.png">
                     <p>Data-Driven Testing</p>
                  </div>
                  <div class="col-6 col-md-2">
                     <img class="lazy"
                        src="./assets/images/ajax-loader.gif"
                        data-src="./assets/images/skills/Hybrid.png">
                     <p>Hybrid Framework</p>
                  </div>
               </div>
               <div class="row justify-content-center text-center">
                  <div class="col-6 col-md-2">
                     <img class="lazy"
                        src="./assets/images/ajax-loader.gif"
                        data-src="./assets/images/skills/Api.png">
                     <p>API Testing</p>
                  </div>
                  <div class="col-6 col-md-2">
                     <img class="lazy"
                        src="./assets/images/ajax-loader.gif"
                        data-src="./assets/images/skills/CICD.png">
                     <p>CI/CD Pipeline</p>
                  </div>
                  <div class="col-6 col-md-2">
                     <img class="lazy"
                        src="./assets/images/ajax-loader.gif"
                        data-src="./assets/images/skills/Testing-Process.png">
                     <p>Testing Process</p>
                  </div>
                  <div class="col-6 col-md-2">
                     <img class="lazy"
                        src="./assets/images/ajax-loader.gif"
                        data-src="./assets/images/skills/Testing-Life-Cycle.png">
                     <p>Testing Life Cycle</p>
                  </div>
                  <div class="col-6 col-md-2">
                     <img class="lazy"
                        src="./assets/images/ajax-loader.gif"
                        data-src="./assets/images/skills/Test-_-Defects-Management.png">
                     <p>Test & Defects Management</p>
                  </div>
                  <div class="col-6 col-md-2">
                     <img class="lazy"
                        src="./assets/images/ajax-loader.gif"
                        data-src="./assets/images/skills/Design-Techniques.png">
                     <p>Design Techniques</p>
                  </div>
                  <div class="col-6 col-md-2">
                     <img class="lazy"
                        src="./assets/images/ajax-loader.gif"
                        data-src="./assets/images/skills/Reset-Api.png">
                     <p>REST API</p>
                  </div>
                  <div class="col-6 col-md-2">
                     <img class="lazy"
                        src="./assets/images/ajax-loader.gif"
                        data-src="./assets/images/skills/Cucumber.png">
                     <p>Cucumber</p>
                  </div>
                  <div class="col-6 col-md-2">
                     <img class="lazy"
                        src="./assets/images/ajax-loader.gif"
                        data-src="./assets/images/skills/Functional-Testing.png">
                     <p>Functional Testing</p>
                  </div>
                  <div class="col-6 col-md-2">
                     <img class="lazy"
                        src="./assets/images/ajax-loader.gif"
                        data-src="./assets/images/skills/Black-box-testing.png">
                     <p>Black Box Testing</p>
                  </div>
                  <div class="col-6 col-md-2">
                     <img class="lazy"
                        src="./assets/images/ajax-loader.gif"
                        data-src="./assets/images/skills/White-box-testing.png">
                     <p>White Box Testing</p>
                  </div>
                  <div class="col-6 col-md-2">
                     <img class="lazy"
                        src="./assets/images/ajax-loader.gif"
                        data-src="./assets/images/skills/Django.png">
                     <p>Django Framework</p>
                  </div>
                  <div class="col-6 col-md-2">
                     <img class="lazy"
                        src="./assets/images/ajax-loader.gif"
                        data-src="./assets/images/skills/Devops.png">
                     <p>DevOps Fundamentals </p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="skillsdiv">
         <div class="container mb-5">
            <h3 class="mt-3 mb-4 font-600">Tools Covered</h3>
            <div class="row text-center">
               <div class="col-6 col-md-2">
                  <img class="lazy"
                     src="./assets/images/ajax-loader.gif"
                     data-src="./assets/images/tools/Eclipse-IDE.png">
                  <p>Eclipse IDE</p>
               </div>
               <div class="col-6 col-md-2">
                  <img class="lazy"
                     src="./assets/images/ajax-loader.gif"
                     data-src="./assets/images/tools/IntelliJ.png">
                  <p>IntelliJ</p>
               </div>
               <div class="col-6 col-md-2">
                  <img class="lazy"
                     src="./assets/images/ajax-loader.gif"
                     data-src="./assets/images/tools/Testng.png">
                  <p>TestNG</p>
               </div>
               <div class="col-6 col-md-2">
                  <img class="lazy"
                     src="./assets/images/ajax-loader.gif"
                     data-src="./assets/images/tools/Maven.png">
                  <p>Maven</p>
               </div>
               <div class="col-6 col-md-2">
                  <img class="lazy"
                     src="./assets/images/ajax-loader.gif"
                     data-src="./assets/images/tools/Git.png">
                  <p>GIT</p>
               </div>
               <div class="col-6 col-md-2">
                  <img class="lazy"
                     src="./assets/images/ajax-loader.gif"
                     data-src="./assets/images/tools/Python.png">
                  <p>Python</p>
               </div>
            </div>
            <!-- <div ng-show="toolsmore == 1"> -->
            <div class="row text-center">
               <div class="col-6 col-md-2">
                  <img class="lazy"
                     src="./assets/images/ajax-loader.gif"
                     data-src="./assets/images/tools/Postman.png">
                  <p>Postman</p>
               </div>
               <div class="col-6 col-md-2">
                  <img class="lazy"
                     src="./assets/images/ajax-loader.gif"
                     data-src="./assets/images/tools/Jira.png">
                  <p>Jira</p>
               </div>
               <div class="col-6 col-md-2">
                  <img class="lazy"
                     src="./assets/images/ajax-loader.gif"
                     data-src="./assets/images/tools/Mysql.png">
                  <p>MySQL</p>
               </div>
               <div class="col-6 col-md-2">
                  <img class="lazy"
                     src="./assets/images/ajax-loader.gif"
                     data-src="./assets/images/tools/Swagger.png">
                  <p>Swagger</p>
               </div>
               <div class="col-6 col-md-2">
                  <img class="lazy"
                     src="./assets/images/ajax-loader.gif"
                     data-src="./assets/images/tools/Zephyr.png">
                  <p>Zephyr</p>
               </div>
               <div class="col-6 col-md-2">
                  <img class="lazy"
                     src="./assets/images/ajax-loader.gif"
                     data-src="./assets/images/tools/Jenkins.png">
                  <p>Jenkins</p>
               </div>
            </div>
         </div>
      </div>
      <div style="background:url(./assets/images/5in1cert.jpg) repeat; padding:20px 0; width:100%;">
         <div class="container">
            <h3 class="mt-3 mb-4 font-600 text-center">2-in-1 certifications</h3>
            <div class="row justify-content-center">
               <div class="col-6 col-md-6">
                  <figure>
                     <img src="./assets/images/ajax-loader.gif"
                     data-src="./assets/images/2in1certification1.png" class="img-fluid w-75 lazy">
                     <figcaption><h3>Course Completion Certificate From AchieversIT</h3></figcaption>
                  </figure>
                  
               </div>
               <div class="col-6 col-md-6">
                  <figure>
                     <img src="./assets/images/ajax-loader.gif"
                     data-src="./assets/images/pts.png" class="img-fluid w-75 lazy">
                     <figcaption><h3>Internship Certificate From Paritechsoft</h3></figcaption>
                  </figure>
               </div>
            </div>
         </div>
      </div>
      <div class="container mt-4 bg-white" id="Projects">
         <h3 class="mt-3 mb-4 font-600">Projects</h3>
         <div class="row">
            <div class="col-md-4 form-group">
               <div class="card">
                  <div class="card-header">
                     <p class="font-18 font-weight-bold mb-0">Beginner</p>
                  </div>
                  <div class="card-body">
                     <p class="font-16 font-weight-bold removejustify">Enhancement in MakeMyTrip Application (Domain:
                        Travel)
                     </p>
                     <p>The objective of this project is to understand the business requirement
                        and all the acceptance criteria from end-user perspective and, as per the acceptance criteria,
                        learners can develop the real-time scenario and also be able to write all the possible test cases.
                     </p>
                  </div>
                  <!--<div class="card-footer">
                     <span class="float-left"><strong><i class="fa fa-amazon"></i> Amazon</strong></span>
                     <span class="float-right text-right"><strong>Domain : E commerce</strong></span>
                     </div>-->
               </div>
            </div>
            <div class="col-md-4 form-group">
               <div class="card">
                  <div class="card-header">
                     <p class="font-18 font-weight-bold mb-0">Intermediate</p>
                  </div>
                  <div class="card-body">
                     <p class="font-16 font-weight-bold removejustify">End-to-End Testing in Swag Lab Application (Domain:
                        e-Commerce)
                     </p>
                     <p>In this project, learners can create the JIRA Project and be able to create the epic and testing
                        task for the same. From this application, learners will understand how to test e-commerce websites
                        from the end-user perspective and also need to develop the real-time scenario and be able to write
                        all the possible test cases.
                     </p>
                  </div>
               </div>
            </div>
            <div class="col-md-4 form-group">
               <div class="card">
                  <div class="card-header">
                     <p class="font-18 font-weight-bold mb-0">Intermediate</p>
                  </div>
                  <div class="card-body">
                     <p class="font-16 font-weight-bold removejustify">Automation Testing in Testnf (Domain: Sports
                        Application)
                     </p>
                     <p>The objective of this project is to perform end-to-end testing activity
                        which includes test scenario development, test case writing, test case execution, bug finding
                        and bug reporting. Based on the bug behavior, user needs to provide the bug priority and bug
                        severity.
                     </p>
                  </div>
               </div>
            </div>
         </div>
         <!-- <div class="row justify-content-center">--->
         <div class="row">
            <div class="col-md-4 form-group">
               <div class="card">
                  <div class="card-header">
                     <p class="font-18 font-weight-bold mb-0">Advanced</p>
                  </div>
                  <div class="card-body">
                     <p class="font-16 font-weight-bold removejustify">Automate the Project Healthrun.io (Domain: Health
                        Care)
                     </p>
                     <p style="margin-bottom:42px;">The objective of this project is to perform manual and automation
                        testing for all the mentioned scenarios. For test case writing, test writing learners can use the
                        Zephyr tool. Here, learners need to write the automation test script by using Page Object Model and
                        also need to perform the test case execution in different browsers.
                     </p>
                  </div>
               </div>
            </div>
            <div class="col-md-4 form-group">
               <div class="card">
                  <div class="card-header">
                     <p class="font-18 font-weight-bold mb-0">Advanced</p>
                  </div>
                  <div class="card-body">
                     <p class="font-16 font-weight-bold removejustify">Automate the Project Orange HRM (Domain: HR
                        Management)
                     </p>
                     <p style="margin-bottom:42px;">The objective of this project is to perform the automation testing for
                        all the mentioned scenarios. Learners can use the Zephyr tool to create various test cases. Here,
                        learners need to write the automation test script by using Page Object Model and also need to use
                        the TestNG Annotation as per the requirement.
                     </p>
                  </div>
               </div>
            </div>
            <div class="col-md-4 form-group">
               <div class="card">
                  <div class="card-header">
                     <p class="font-18 font-weight-bold mb-0">Advanced</p>
                  </div>
                  <div class="card-body">
                     <p class="font-16 font-weight-bold removejustify">Perform the End-to-End Testing and Automate the
                        Project (Domain: Ed-tech Website)
                     </p>
                     <p>Learners will create the JIRA Project and the different bugs. They will decide the priority and
                        severity of the bug. This application is developed to find out the factorial. Learners will perform
                        end-to-end testing on the website from an end-user perspective and develop the positive and
                        negative scenarios of any functionality.
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="pt-3 pb-3">
         <div class="container">
            <h3 class="mt-3 mb-4 font-600">Career Progression and Salary Trends</h3>
            <img col-md-12 src="./assets/images/ajax-loader.gif"
               data-src="./assets/images/Salary.png" class="img-fluid w-100 lazy">
         </div>
      </div>
      <div class="p-2 pb-5">
         <div class="container pt-5">
            <h3 class="pl-3 mb-4 font-600">A Few of Our Hiring Partners</h3>
            <div id="myCarousel2" class="carousel slide w-100" data-ride="carousel">
               <div class="carousel-inner w-100" role="listbox">
                  <div class="carousel-item active">
                     <div class="col-lg-3 col-md-6 text-center">
                        <img class="img-fluid lazy"
                           src="./assets/images/ajax-loader.gif"
                           data-src="./assets/images/company/Amazon-Ec2.png" alt="slide 1">
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="col-lg-3 col-md-6 text-center">
                        <img class="img-fluid lazy"
                           src="./assets/images/ajax-loader.gif"
                           data-src="./assets/images/company/Barclays.png" alt="slide 1">
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="col-lg-3 col-md-6 text-center">
                        <img class="img-fluid lazy"
                           src="./assets/images/ajax-loader.gif"
                           data-src="./assets/images/company/Capgemini.png" alt="slide 1">
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="col-lg-3 col-md-6 text-center">
                        <img class="img-fluid lazy"
                           src="./assets/images/ajax-loader.gif"
                           data-src="./assets/images/company/Cloud.png" alt="slide 1">
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="col-lg-3 col-md-6 text-center">
                        <img class="img-fluid lazy"
                           src="./assets/images/ajax-loader.gif"
                           data-src="./assets/images/company/Cmarix.png" alt="slide 1">
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="col-lg-3 col-md-6 text-center">
                        <img class="img-fluid lazy"
                           src="./assets/images/ajax-loader.gif"
                           data-src="./assets/images/company/Coodle.png" alt="slide 1">
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="col-lg-3 col-md-6 text-center">
                        <img class="img-fluid lazy"
                           src="./assets/images/ajax-loader.gif"
                           data-src="./assets/images/company/DCB.png" alt="slide 1">
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="col-lg-3 col-md-6 text-center">
                        <img class="img-fluid lazy"
                           src="./assets/images/ajax-loader.gif"
                           data-src="./assets/images/company/Digi-Sprint.png" alt="slide 1">
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="col-lg-3 col-md-6 text-center">
                        <img class="img-fluid lazy"
                           src="./assets/images/ajax-loader.gif"
                           data-src="./assets/images/company/Dmart.png" alt="slide 1">
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="col-lg-3 col-md-6 text-center">
                        <img class="img-fluid lazy"
                           src="./assets/images/ajax-loader.gif"
                           data-src="./assets/images/company/EY.png" alt="slide 1">
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="col-lg-3 col-md-6 text-center">
                        <img class="img-fluid lazy"
                           src="./assets/images/ajax-loader.gif"
                           data-src="./assets/images/company/Flowace.png" alt="slide 1">
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="col-lg-3 col-md-6 text-center">
                        <img class="img-fluid lazy"
                           src="./assets/images/ajax-loader.gif"
                           data-src="./assets/images/company/Fuji.png" alt="slide 1">
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="col-lg-3 col-md-6 text-center">
                        <img class="img-fluid lazy"
                           src="./assets/images/ajax-loader.gif"
                           data-src="./assets/images/company/Futurism.png" alt="slide 1">
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="col-lg-3 col-md-6 text-center">
                        <img class="img-fluid lazy"
                           src="./assets/images/ajax-loader.gif"
                           data-src="./assets/images/company/Gig.png" alt="slide 1">
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="col-lg-3 col-md-6 text-center">
                        <img class="img-fluid lazy"
                           src="./assets/images/ajax-loader.gif"
                           data-src="./assets/images/company/HCL.png" alt="slide 1">
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="col-lg-3 col-md-6 text-center">
                        <img class="img-fluid lazy"
                           src="./assets/images/ajax-loader.gif"
                           data-src="./assets/images/company/Hdficons.png" alt="slide 1">
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="col-lg-3 col-md-6 text-center">
                        <img class="img-fluid lazy"
                           src="./assets/images/ajax-loader.gif"
                           data-src="./assets/images/company/Hexware.png" alt="slide 1">
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="col-lg-3 col-md-6 text-center">
                        <img class="img-fluid lazy"
                           src="./assets/images/ajax-loader.gif"
                           data-src="./assets/images/company/Hurixdigital.png" alt="slide 1">
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="col-lg-3 col-md-6 text-center">
                        <img class="img-fluid lazy"
                           src="./assets/images/ajax-loader.gif"
                           data-src="./assets/images/company/Hyperlink-Infosystem.png" alt="slide 1">
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="col-lg-3 col-md-6 text-center">
                        <img class="img-fluid lazy"
                           src="./assets/images/ajax-loader.gif"
                           data-src="./assets/images/company/Infogain.png" alt="slide 1">
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="col-lg-3 col-md-6 text-center">
                        <img class="img-fluid lazy"
                           src="./assets/images/ajax-loader.gif"
                           data-src="./assets/images/company/ISS.png" alt="slide 1">
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="col-lg-3 col-md-6 text-center">
                        <img class="img-fluid lazy"
                           src="./assets/images/ajax-loader.gif"
                           data-src="./assets/images/company/Jireh.png" alt="slide 1">
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="col-lg-3 col-md-6 text-center">
                        <img class="img-fluid lazy"
                           src="./assets/images/ajax-loader.gif"
                           data-src="./assets/images/company/Mindgate.png" alt="slide 1">
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="col-lg-3 col-md-6 text-center">
                        <img class="img-fluid lazy"
                           src="./assets/images/ajax-loader.gif"
                           data-src="./assets/images/company/Minecraft.png" alt="slide 1">
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="col-lg-3 col-md-6 text-center">
                        <img class="img-fluid lazy"
                           src="./assets/images/ajax-loader.gif"
                           data-src="./assets/images/company/Naptol.png" alt="slide 1">
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="col-lg-3 col-md-6 text-center">
                        <img class="img-fluid lazy"
                           src="./assets/images/ajax-loader.gif"
                           data-src="./assets/images/company/NCS.png" alt="slide 1">
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="col-lg-3 col-md-6 text-center">
                        <img class="img-fluid lazy"
                           src="./assets/images/ajax-loader.gif"
                           data-src="./assets/images/company/Prompt-softech.png" alt="slide 1">
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="col-lg-3 col-md-6 text-center">
                        <img class="img-fluid lazy"
                           src="./assets/images/ajax-loader.gif"
                           data-src="./assets/images/company/PTW.png" alt="slide 1">
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="col-lg-3 col-md-6 text-center">
                        <img class="img-fluid lazy"
                           src="./assets/images/ajax-loader.gif"
                           data-src="./assets/images/company/Qsome.png" alt="slide 1">
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="col-lg-3 col-md-6 text-center">
                        <img class="img-fluid lazy"
                           src="./assets/images/ajax-loader.gif"
                           data-src="./assets/images/company/Quality-kiosk.png" alt="slide 1">
                     </div>
                  </div>
                  <div class="carousel-item ">
                     <div class="col-lg-3 col-md-6 text-center">
                        <img class="img-fluid lazy"
                           src="./assets/images/ajax-loader.gif"
                           data-src="./assets/images/company/Quantum.png" alt="slide 1">
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="col-lg-3 col-md-6 text-center">
                        <img class="img-fluid lazy"
                           src="./assets/images/ajax-loader.gif"
                           data-src="./assets/images/company/Radix.png" alt="slide 1">
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="col-lg-3 col-md-6 text-center">
                        <img class="img-fluid lazy"
                           src="./assets/images/ajax-loader.gif"
                           data-src="./assets/images/company/Scripbox.png" alt="slide 1">
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="col-lg-3 col-md-6 text-center">
                        <img class="img-fluid lazy"
                           src="./assets/images/ajax-loader.gif"
                           data-src="./assets/images/company/Silout-lab.png" alt="slide 1">
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="col-lg-3 col-md-6 text-center">
                        <img class="img-fluid lazy"
                           src="./assets/images/ajax-loader.gif"
                           data-src="./assets/images/company/Solverminds.png" alt="slide 1">
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="col-lg-3 col-md-6 text-center">
                        <img class="img-fluid lazy"
                           src="./assets/images/ajax-loader.gif"
                           data-src="./assets/images/company/Techmeridian.png" alt="slide 1">
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="col-lg-3 col-md-6 text-center">
                        <img class="img-fluid lazy"
                           src="./assets/images/ajax-loader.gif"
                           data-src="./assets/images/company/Think-360.png" alt="slide 1">
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="col-lg-3 col-md-6 text-center">
                        <img class="img-fluid lazy"
                           src="./assets/images/ajax-loader.gif"
                           data-src="./assets/images/company/Volansys.png" alt="slide 1">
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="col-lg-3 col-md-6 text-center">
                        <img class="img-fluid lazy"
                           src="./assets/images/ajax-loader.gif"
                           data-src="./assets/images/company/Volantis.png" alt="slide 1">
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="col-lg-3 col-md-6 text-center">
                        <img class="img-fluid lazy"
                           src="./assets/images/ajax-loader.gif"
                           data-src="./assets/images/company/Walking-Tree.png" alt="slide 1">
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="col-lg-3 col-md-6 text-center">
                        <img class="img-fluid lazy"
                           src="./assets/images/ajax-loader.gif"
                           data-src="./assets/images/company/Websenor.png" alt="slide 1">
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="col-lg-3 col-md-6 text-center">
                        <img class="img-fluid lazy"
                           src="./assets/images/ajax-loader.gif"
                           data-src="./assets/images/company/Wipro.png" alt="slide 1">
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="col-lg-3 col-md-6 text-center">
                        <img class="img-fluid lazy"
                           src="./assets/images/ajax-loader.gif"
                           data-src="./assets/images/company/Zymr.png" alt="slide 1">
                     </div>
                  </div>
               </div>
               <a class="carousel-control-prev" href="#myCarousel2" role="button" data-slide="prev">
               <i class="fa fa-chevron-left"></i> </a>
               <a class="carousel-control-next" href="#myCarousel2" role="button" data-slide="next">
               <i class="fa fa-chevron-right"></i> </a>
            </div>
         </div>
      </div>
      <div class="pt-3 pb-3">
         <div class="container">
            <h3 class="mt-3 mb-4 font-600">Learning Path</h3>
            <img src="./assets/images/ajax-loader.gif"
               data-src="assets/images/Learning-Path.png" class="img-fluid w-100 lazy">
         </div>
      </div>
      <div class="container mb-4" id="why-excelr">
         <h3 class="mt-3 mb-4 font-600">Why AchieversIT?</h3>
         <div class="row">
            <div class="col-md-4 form-group">
               <div class="card position-relative">
                  <div class="card-body">
                     <div class="row no-gutters">
                        <div class="col-4 col-md-4 border-right"><img
                           src="./assets/images/ajax-loader.gif"
                           data-src="./assets/images/why/we_icon2.png" class="img-fluid lazy"></div>
                        <div class="col-8 col-md-8 align-self-center">
                           <div class="pl-3">
                              <p class="mb-0 removejustify">Industry-Based Course Curriculum</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-md-4 form-group">
               <div class="card position-relative">
                  <div class="card-body">
                     <div class="row no-gutters">
                        <div class="col-4 col-md-4 border-right"><img
                           src="./assets/images/ajax-loader.gif"
                           data-src="./assets/images/why/we_icon4.png" class="img-fluid lazy"></div>
                        <div class="col-8 col-md-8 align-self-center">
                           <div class="pl-3">
                              <p class="mb-0 removejustify">Value Added Courses: DevOps, Core Python, and MySQL</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-md-4 form-group">
               <div class="card position-relative">
                  <div class="card-body">
                     <div class="row no-gutters">
                        <div class="col-4 col-md-4 border-right"><img
                           src="./assets/images/ajax-loader.gif"
                           data-src="./assets/images/why/we_icon6.png" class="img-fluid lazy"></div>
                        <div class="col-8 col-md-8 align-self-center">
                           <div class="pl-3">
                              <p class="mb-0 removejustify">Work Hands-on with 20+ Labs and 80+ Assignments</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-md-4 form-group">
               <div class="card position-relative">
                  <div class="card-body">
                     <div class="row no-gutters">
                        <div class="col-4 col-md-4 border-right"><img
                           src="./assets/images/ajax-loader.gif"
                           data-src="./assets/images/why/we_icon9.png" class="img-fluid lazy"></div>
                        <div class="col-8 col-md-8 align-self-center">
                           <div class="pl-3">
                              <p class="mb-0 removejustify">Guaranteed Job Interview Calls with our 2000+ partner companies
                              </p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-md-4 form-group">
               <div class="card position-relative">
                  <div class="card-body">
                     <div class="row no-gutters">
                        <div class="col-4 col-md-4 border-right"><img
                           src="./assets/images/ajax-loader.gif"
                           data-src="./assets/images/why/we_icon10.png" class="img-fluid lazy"></div>
                        <div class="col-8 col-md-8 align-self-center">
                           <div class="pl-3">
                              <p class="mb-0 removejustify">Support through WhatsApp, Calls, & Emails</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-md-4 form-group">
               <div class="card position-relative">
                  <div class="card-body">
                     <div class="row no-gutters">
                        <div class="col-4 col-md-4 border-right"><img
                           src="./assets/images/ajax-loader.gif"
                           data-src="./assets/images/why/we_icon11.png" class="img-fluid lazy"></div>
                        <div class="col-8 col-md-8 align-self-center">
                           <div class="pl-3">
                              <p class="mb-0 removejustify">Lifetime eLearning Access</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- <div class="pt-4 pb-4" style="background:#eaeaea">
         <div class="container">
            <h3 class="mt-3 mb-4 font-600 text-center">Data Science Certification Course from Tech Giant IBM</h3>
            <div class="row justify-content-center">
               <div class="col-md-5">
                  <div class="card mb-3">
                     <img class="lazy" src="./assets/images/ajax-loader.gif"  data-src="./assets/images/Data_Science_IBM.png" class="img-fluid lazy">
                  </div>
                  <h5 class="text-blue text-center">IBM Certification</h5>
               </div>
                <div class="col-md-1">
               </div>
               <div class="col-md-3">
                  <div class="card">
                     <img class="lazy" src="./assets/images/ajax-loader.gif" data-src="./assets/images/Steinbeis.jpg" class="img-fluid lazy">
                  </div>
               </div> 
            </div>
         </div>
         </div>-->
      <div class="p-2 digitalpro bg_cover" data-overlay="6"
         style="background-image: url(./assets/images/corporateform_bg_2.jpg)">
         <div class="container pt-4 pb-4">
            <div class="row justify-content-center">
               <div class="col-md-5 form-group">
                  <div class="banner_content">
                     <div class="card">
                        <div class="card-header">
                           <h3 class="font-20 mb-0">Classroom Training</h3>
                        </div>
                        <div class="card-body">
                           <div>
                              <h3 class="float-left dic-amt"><span class="disam"></span><i class="fa fa-inr"></i> 65999
                              </h3>
                              <h3 class="font-20 float-left text-success"><i class="fa fa-inr"></i> 45999</h3>
                              <div style="clear:both;"></div>
                           </div>
                           <ul class="live-virtual">
                              <!--- <li><strong>*As per Govt of India Covid regulations</strong></li>  --->
                              <li>Guaranteed job interviews through dedicated placement cell</li>
                              <li>Intensive interview preparation from Day 1</li>
                              <li>Real-life interview case study analysis</li>
                           </ul>
                           <!----   <h3 class="font-20 text-center mb-4 text-primary">Upcoming Batches</h3>
                              <h3 class="font-16 text-center mb-4"><i class="fa fa-calendar text-primary"></i> 26<sup>th</sup> Sept 2020 - 2PM to 6PM</h3> ---->
                           <div class="text-center">
                              <button type="button" class="btn btn-primary" data-toggle="modal"
                                 data-target="#classroom">ENROLL NOW</button>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-5 form-group">
                  <div class="banner_content">
                     <div class="card">
                        <div class="card-header">
                           <h3 class="font-20 mb-0">Live Virtual Classroom</h3>
                        </div>
                        <div class="card-body">
                           <div>
                              <h3 class="float-left dic-amt"><span class="disam"></span><i class="fa fa-inr"></i> 45999
                              </h3>
                              <h3 class="font-20 float-left text-success"><i class="fa fa-inr"></i> 35999</h3>
                              <div style="clear:both;"></div>
                           </div>
                           <ul class="live-virtual">
                              <li>Guaranteed job interviews through dedicated placement cell</li>
                              <li>Intensive interview preparation from Day 1</li>
                              <li>Real-life interview case study analysis</li>
                              <!-- <li>Faculty are working Data Scientists, Alumni of IIT, IIM, ISB & PhD qualified </li> 
                                 <li>Assured Placement Support through dedicated Placement Cell </li>-->
                              <!-- <li>Earn Certification from Tata Consultancy Services (TCS) - Partner of ExcelR</li> -->
                           </ul>
                           <!--<h3 class="font-20 text-center text-primary mb-4">Upcoming Batches</h3>
                              <h3 class="font-16 text-center form-group"><i class="fa fa-calendar text-primary"></i> 22<sup>nd</sup> Sept 2020 - 7AM to 9PM</h3>
                              <h3 class="font-16 text-center form-group pl-3">26<sup>th</sup> Sept 2020 - 2PM to 6PM</h3>
                              <h3 class="font-16 text-center mb-4 pl-3">30<sup>th</sup> Sept 2020 - 11AM to 1PM</h3>-->
                           <div class="text-center">
                              <button type="button" class="btn btn-primary" data-toggle="modal"
                                 ng-click="modalopenbutton('Live Virtual Classroom')" data-target="#classroom">ENROLL
                              NOW</button>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      </div>
<?php require_once('includes/footer-course.php'); ?>

