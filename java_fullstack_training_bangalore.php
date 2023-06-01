<?php 
session_start();
$_SESSION['course_name'] = "Java Full Stack";
$_SESSION['location'] = "Bangalore";

require_once('includes/course_header.php'); ?>

	  <div class="mainbanner">
	  	<div class="container h-100 d-flex align-content-center">
			<div class="row">
				<div class="col-md-12 my-auto text-white">
					<h3 class="mb-3"><?php echo $_SESSION['course_name']; ?> Training Course in <?php echo $_SESSION['location']; ?> </h3>
					<br />
					<h5 class="mb-2">7 in 1 Combo Program With Value Add Live Courses</h5>
					<p class="font-weight-bold"> 1. Dockers and Kubernetes <br />
					2. AWS Technical Essentials <br />3. Terraform <br />4. Jenkins and JUnit <br /> 5. Agile <br />6. Java Fundamentals <br /> 7. Linux Fundamentals  </p> 
					<p><a class="btn btn-lg btn-danger" data-toggle="modal" data-target="#myModal" ng-click="modalopenbutton('Download Curriculum')" href="#" role="button">Download Curriculum </a></p>
				</div>
			</div>
		</div>
	  </div>

      <div class="bg-bluelite pt-3">
         <div class="container">
            <div class="row no-gutters">

               <div class="col-6 col-md-2">
                  <img src="./assets/images/courses/devOps/2.png" class="img-fluid w-100">				
               </div>
               <div class="col-6 col-md-2">
                  <img src="./assets/images/courses/devOps/3.png" class="img-fluid w-100">				
               </div>
               <div class="col-6 col-md-2">
                  <img src="./assets/images/courses/devOps/4.png" class="img-fluid w-100">				
               </div>
               <div class="col-6 col-md-2">
                  <img src="./assets/images/courses/devOps/5.png" class="img-fluid w-100">				
               </div>
               <div class="col-6 col-md-2">
                  <img src="./assets/images/courses/devOps/6.png" class="img-fluid w-100">				
               </div>
		<div class="col-6 col-md-2">
                  <img src="./assets/images/courses/devOps/7.png" class="img-fluid w-100">				
               </div>
            </div>
         </div>
      </div>
      <div class="container">
         <h3 class="text-blue text-center mt-4 font-600">Our Alumni Works at</h3>
         <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <div id="myCarousel" class="carousel slide w-100" data-ride="carousel">
               <div class="carousel-inner w-100" role="listbox">
                  <!-- <div class="carousel-item active">
                     <div class="col-lg-3 col-md-6 text-center bg-white">
                        <img class="img-fluid lazy" src="./assets/images/courses/devOps/1.jpg">                        
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="col-lg-3 col-md-6 text-center bg-white">
                        <img class="img-fluid lazy" src="./assets/images/courses/devOps/2.jpg">                        
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="col-lg-3 col-md-6 text-center bg-white">
                        <img class="img-fluid lazy" src="./assets/images/courses/devOps/3.jpg">                        
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="col-lg-3 col-md-6 text-center bg-white">
                        <img class="img-fluid lazy" src="./assets/images/courses/devOps/4.jpg">                        
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="col-lg-3 col-md-6 text-center bg-white">
                        <img class="img-fluid lazy" src="./assets/images/courses/devOps/5.jpg">                        
                     </div>
                  </div> -->
                  <div class="carousel-item active">
                     <div class="col-lg-3 col-md-6 text-center bg-white">
                        <img class="img-fluid lazy" src="./assets/images/courses/devOps/6.png">                        
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="col-lg-3 col-md-6 text-center bg-white">
                        <img class="img-fluid lazy" src="./assets/images/courses/devOps/7.png">                        
                     </div>
                  </div>
                  <!-- <div class="carousel-item">
                     <div class="col-lg-3 col-md-6 text-center bg-white">
                        <img class="img-fluid lazy" src="./assets/images/courses/devOps/8.png">                        
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="col-lg-3 col-md-6 text-center bg-white">
                        <img class="img-fluid lazy" src="./assets/images/courses/devOps/9.png">                        
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="col-lg-3 col-md-6 text-center bg-white">
                        <img class="img-fluid lazy" src="./assets/images/courses/devOps/10.png">                        
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="col-lg-3 col-md-6 text-center bg-white">
                        <img class="img-fluid lazy" src="./assets/images/courses/devOps/11.png">                        
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="col-lg-3 col-md-6 text-center bg-white">
                        <img class="img-fluid lazy" src="./assets/images/courses/devOps/12.png">
                     </div>
                  </div> -->
                  <div class="carousel-item">
                     <div class="col-lg-3 col-md-6 text-center bg-white">
                        <img class="img-fluid lazy" src="./assets/images/courses/devOps/13.png">                        
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="col-lg-3 col-md-6 text-center bg-white">
                        <img class="img-fluid lazy" src="./assets/images/courses/devOps/14.png">                        
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="col-lg-3 col-md-6 text-center bg-white">
                        <img class="img-fluid lazy" src="./assets/images/courses/devOps/15.png">                        
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="col-lg-3 col-md-6 text-center bg-white">
                        <img class="img-fluid lazy" src="./assets/images/courses/devOps/16.png">                        
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="col-lg-3 col-md-6 text-center bg-white">
                        <img class="img-fluid lazy" src="./assets/images/courses/devOps/17.png">                        
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="col-lg-3 col-md-6 text-center bg-white">
                        <img class="img-fluid lazy" src="./assets/images/courses/devOps/18.png">                        
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="col-lg-3 col-md-6 text-center bg-white">
                        <img class="img-fluid lazy" src="./assets/images/courses/devOps/19.png">                        
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="col-lg-3 col-md-6 text-center bg-white">
                        <img class="img-fluid lazy" src="./assets/images/courses/devOps/20.png">                        
                     </div>
                  </div>
               </div>
               <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
               	<i class="fa fa-chevron-left fa-lg text-muted"></i>				
           		</a>
               <a class="carousel-control-next text-faded" href="#myCarousel" role="button" data-slide="next">
               <i class="fa fa-chevron-right fa-lg text-muted"></i>				</a>            
            </div>
         </div>
      </div>
      <div class="bg-lite programme pt-2 pb-2">
         <div class="container">
            <h3 class="mt-3 mb-4 font-600">Program Highlights</h3>
            <div class="row">
               <div class="col-md-3 form-group">
                  <div class="card p-1">
                     <div class="card-header">
                        <div class="text-center"><img src="./assets/images/courses/devOps/icon1.png"></div>
                     </div>
                     <div class="card-body p-2">
                        <h4>Life Time Upgrade</h4>
                     </div>
                  </div>
               </div>
               <div class="col-md-3 form-group">
                  <div class="card p-1">
                     <div class="card-header">
                        <div class="text-center"><img class="lazy" src="./assets/images/courses/devOps/icon2.png"></div>
                     </div>
                     <div class="card-body p-2">
                        <h4>2+ Capstone Projects & 30+ Assignments</h4>
                     </div>
                  </div>
               </div>
               <div class="col-md-3 form-group">
                  <div class="card p-1">
                     <div class="card-header">
                        <div class="text-center"><img class="lazy" src="./assets/images/courses/devOps/icon3.png">
                        </div>
                     </div>
                     <div class="card-body p-2">
                        <h4>Job Readiness Program</h4>
                     </div>
                  </div>
               </div>
               <div class="col-md-3 form-group">
                  <div class="card p-1">
                     <div class="card-header">
                        <div class="text-center"><img class="lazy" src="./assets/images/courses/devOps/icon4.png"></div>
                     </div>
                     <div class="card-body p-2">
                        <h4>7 FREE Value-Added Courses</h4>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="pt-2 pb-2">
         
         <div class="container mb-5">
            <h3 class="mt-3 mb-4 font-600">Skills Covered</h3>
            <div class="text-center">
               <img class="lazy" src="./assets/images/courses/devOps/Tools_01.svg" style="width: 100%;" class="img-fluid">
            </div>
         </div> 
      </div>
      <div class="bg-lite pt-2 pb-2">
         
         <div class="container mb-5 tools">
            <h3 class="mt-3 mb-4 font-600">Tools and Technologies</h3>
            <div class="row text-center">
               <div class="col-4 col-md-2 border-right">
                  <img src="./assets/images/courses/devOps/tool-1.png" class="img-fluid lazy">
                  <p>Eclipse IDE</p>
            </div>
               <div class="col-4 col-md-2 border-right"><img src="./assets/images/courses/devOps/tool-2.png" class="img-fluid lazy">
               <p>Git and GitHub</p></div>
               <div class="col-4 col-md-2 border-right"><img src="./assets/images/courses/devOps/tool-3.png" class="img-fluid lazy">
               <p>Amazon EC2</p></div>
               <div class="col-4 col-md-2 border-right"><img src="./assets/images/courses/devOps/tool-4.png" class="img-fluid lazy">
               <p>Putty and Puttygen</p></div>
               <div class="col-4 col-md-2 border-right"><img src="./assets/images/courses/devOps/tool-5.png" class="img-fluid lazy">
               <p>Maven</p></div>
               <div class="col-4 col-md-2"><img src="./assets/images/courses/devOps/tool-7.png" class="img-fluid lazy">
               <p>Jenkins</p></div>
            </div>
            <div ng-show="showmore == 1">
               <div class="row text-center">
                  <div class="col-4 col-md-2 border-right"><img src="./assets/images/courses/devOps/tool-6.png" class="img-fluid lazy">
                  <p>JUnit</p></div>
                  <div class="col-4 col-md-2 border-right"><img src="./assets/images/courses/devOps/tool-8.png" class="img-fluid lazy">
                  <p>BlazeMeter</p></div>
                  <div class="col-4 col-md-2 border-right"><img src="./assets/images/courses/devOps/tool-9.png" class="img-fluid lazy">
                  <p>Containers and Dockers</p></div>
                  <div class="col-4 col-md-2 border-right"><img src="./assets/images/courses/devOps/tool-10.png" class="img-fluid lazy">
                  <p>Kubernetes</p></div>
                  <div class="col-4 col-md-2 border-right"><img src="./assets/images/courses/devOps/tool-11.png" class="img-fluid lazy">
                  <p>Terraform</p></div>
                  <div class="col-4 col-md-2"><img src="./assets/images/courses/devOps/tool-12.png" class="img-fluid lazy">
                  <p>Prometheus and Grafana</p></div>
               </div>
               <div class="row text-center">  
                  <div class="col-4 col-md-2 border-right"><img src="./assets/images/courses/devOps/tool-13.png" class="img-fluid lazy">
                  <p>ELK Stack</p></div>
                  <div class="col-4 col-md-2 border-right"><img src="./assets/images/courses/devOps/tool-14.png" class="img-fluid lazy">
                  <p>Overview AWS of DevOps</p></div>
				  
				  
				  
				  <div class="col-4 col-md-2 border-right"><img src="./assets/images/courses/devOps/tool-15.png" class="img-fluid lazy">
                  <p>Ansible</p></div>
				  <div class="col-4 col-md-2 border-right"><img src="./assets/images/courses/devOps/tool-16.png" class="img-fluid lazy">
                  <p>Atlassian</p></div>
				  <div class="col-4 col-md-2 border-right"><img src="./assets/images/courses/devOps/tool-17.png" class="img-fluid lazy">
                  <p>JFrog</p></div>
				  <div class="col-4 col-md-2 border-right"><img src="./assets/images/courses/devOps/tool-18.png" class="img-fluid lazy">
                  <p>MSBuild</p></div>
				</div>
				  
				  <div class="row text-center">
				  <div class="col-4 col-md-2 border-right"><img src="./assets/images/courses/devOps/tool-19.png" class="img-fluid lazy">
                  <p>Nexus</p></div>
				  <div class="col-4 col-md-2 border-right"><img src="./assets/images/courses/devOps/tool-20.png" class="img-fluid lazy">
                  <p>Puppet</p></div>
				  <div class="col-4 col-md-2 border-right"><img src="./assets/images/courses/devOps/tool-21.png" class="img-fluid lazy">
                  <p>Sonarqube</p></div>
				  <div class="col-4 col-md-2 border-right"><img src="./assets/images/courses/devOps/tool-22.png" class="img-fluid lazy">
                  <p>TeamCity</p></div>
				  <div class="col-4 col-md-2 border-right"><img src="./assets/images/courses/devOps/tool-23.png" class="img-fluid lazy">
                  <p>XL_Deploy</p></div>
               </div>
                
               </div>
            </div>   
<!--             <div class="text-center mt-4 mb-4" ng-show="showmore==0">
               <button type="button" class="btn btn-primary btn-sm" ng-click="clickformore()">Show More...</button>
            </div>
            <div class="text-center mt-4 mb-4" ng-show="showmore==1">
               <button type="button" class="btn btn-primary btn-sm" ng-click="clickforless()">Hide More...</button>
            </div> -->
         </div>
      </div>
       <div style="background:url(assets/images/5in1cert.jpg) repeat; padding:20px 0; width:100%;">
	 	<div class="container">
			<h3 class="mt-3 mb-4 font-600 text-center">3 in 1 Certifications</h3>
	 		<!---<img src="assets/images/5in1cert.png" class="img-fluid">-->
         <div class="row justify-content-center">
               <div class="col-6 col-md-3">
                  <img src="./assets/images/courses/devOps/2in1certification1.png" class="img-fluid w-100 lazy">
               </div>
               <div class="col-6 col-md-3">
                  <img src="./assets/images/courses/devOps/2in1certification2.png" class="img-fluid w-100 lazy">
               </div>
			   <div class="col-6 col-md-3">
                  <img src="./assets/images/courses/devOps/4in2.png" class="img-fluid w-100 lazy">
               </div>
         </div>   
	 		<!-- <img src="./assets/images/3in1certification.png" class="img-fluid w-100 lazy"> -->
		</div>
	 </div>
      <div class="container mt-4 bg-white" id="Projects">
         <h3 class="mt-3 mb-4 font-600">Projects</h3>
         <div class="row">
            <div class="col-md-12 form-group">
               <div class="card">
                  <div class="card-header">
                     <p class="font-16 font-weight-bold mb-0">DevOps Code Pipeline</p>
                  </div>
                  <div class="card-body">
                     <p> DevOps Code Pipeline is a fully managed continuous delivery service that helps you automate your release pipelines for fast and reliable application and infrastructure updates. Every time the code changes, code pipelines automate the build, test, and deploy phases of the release process based on the release model you define. It enables you to rapidly and reliably deliver features and updates. You can easily integrate DevOps Code Pipeline with third-party services such as GitHub or your custom plugin. With DevOps Code Pipeline, you only pay for what you use. There are no upfront fees or long-term commitments.
                     </p>
                  </div>
                  <div class="card-footer">
                     <!--<span class="float-left"><strong><i class="fa fa-amazon"></i> Amazon</strong></span>
                     <span class="float-right text-right"><strong>Domain : Social Media</strong></span>-->
                  </div>
               </div>
            </div>
            <div class="col-md-12 form-group">
               <div class="card">
                  <div class="card-header">
                     <p class="font-16 font-weight-bold mb-0">Project-Deploying PHP Guestbook Application with Redis (kubeadm)</p>
                  </div>
                  <div class="card-body">
                     <p>Build and deploy a simple, multi-tier web application using kubeadm Cluster and Docker which must consist of the below components.</p>
<p>1. A single-instance Redis to store guestbook entries</p>
<p>2. Multiple web frontend instances</p>
                  
                  </div>
                  <div class="card-footer">
                     <!--<span class="float-left"><strong><i class="fa fa-amazon"></i> Amazon</strong></span>
                     <span class="float-right text-right"><strong>Domain : E commerce</strong></span>-->
                  </div>
               </div>
            </div>
            
         </div>
      </div>
      <div class="learning-path">
         <div class="container">
            <h3 class="mt-3 mb-4 font-600 text-white">Learning Path</h3>
            <img src="./assets/images/courses/devOps/process_lp_aws.png" class="img-fluid w-100 lazy">
         </div>
      </div>
      <div class="container" id="why-excelr">
         <h3 class="mt-3 mb-4 font-600">Why ExcelR?</h3>
         <div class="row">
            <!--<div class="col-md-4 form-group">
               <div class="card position-relative">
                  <div class="card-body">
                     <div class="row no-gutters">
                        <div class="col-4 col-md-4 border-right"><img src="./assets/images/why/we_icon1.png" class="img-fluid lazy"></div>
                        <div class="col-8 col-md-8 align-self-center">
                           <div class="pl-2">
                              <p class="mb-0">Projects on Kaggle Platform</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>-->
            <div class="col-md-4 form-group">
               <div class="card position-relative">
                  <div class="card-body">
                     <div class="row no-gutters">
                        <div class="col-4 col-md-4 border-right"><img src="./assets/images/why/we_icon2.png" class="img-fluid lazy"></div>
                        <div class="col-8 col-md-8 align-self-center">
                           <div class="pl-3">
                              <p class="mb-0">Industry-Based Course Curriculum</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
           <!-- <div class="col-md-4 form-group">
               <div class="card position-relative">
                  <div class="card-body">
                     <div class="row no-gutters">
                        <div class="col-4 col-md-4 border-right"><img src="./assets/images/why/we_icon3.png" class="img-fluid lazy"></div>
                        <div class="col-8 col-md-8 align-self-center">
                           <div class="pl-3">
                              <p class="mb-0">Get Basics of R & Python</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>-->
            <div class="col-md-4 form-group">
               <div class="card position-relative">
                  <div class="card-body">
                     <div class="row no-gutters">
                        <div class="col-4 col-md-4 border-right"><img src="./assets/images/why/we_icon4.png" class="img-fluid lazy"></div>
                        <div class="col-8 col-md-8 align-self-center">
                           <div class="pl-3">
                              <p class="mb-0">Get Value-Add Live Courses Of Linux, Kubernetes and more</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!--<div class="col-md-4 form-group">
               <div class="card position-relative">
                  <div class="card-body">
                     <div class="row no-gutters">
                        <div class="col-4 col-md-4 border-right"><img src="./assets/images/why/we_icon5.png" class="img-fluid lazy"></div>
                        <div class="col-8 col-md-8 align-self-center">
                           <div class="pl-3">
                              <p class="mb-0"> Experienced Faculty From IIT, IIM & ISB</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>-->
            <div class="col-md-4 form-group">
               <div class="card position-relative">
                  <div class="card-body">
                     <div class="row no-gutters">
                        <div class="col-4 col-md-4 border-right"><img src="./assets/images/why/we_icon6.png" class="img-fluid lazy"></div>
                        <div class="col-8 col-md-8 align-self-center">
                           <div class="pl-3">
                              <p class="mb-0">Work Hands-on with 2+ Live Projects</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!--<div class="col-md-4 form-group">
               <div class="card position-relative">
                  <div class="card-body">
                     <div class="row no-gutters">
                        <div class="col-4 col-md-4 border-right"><img src="./assets/images/why/we_icon7.png" class="img-fluid lazy"></div>
                        <div class="col-8 col-md-8 align-self-center">
                           <div class="pl-3">
                              <p class="mb-0">Dedicated Placement cell for 100% Placement Assistance</p>
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
                        <div class="col-4 col-md-4 border-right"><img src="./assets/images/why/we_icon8.png" class="img-fluid lazy"></div>
                        <div class="col-8 col-md-8 align-self-center">
                           <div class="pl-3">
                              <p class="mb-0">Project Code stored on Github &amp; Deployed on Heroku</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>-->
            <div class="col-md-4 form-group">
               <div class="card position-relative">
                  <div class="card-body">
                     <div class="row no-gutters">
                        <div class="col-4 col-md-4 border-right"><img src="./assets/images/why/we_icon9.png" class="img-fluid lazy"></div>
                        <div class="col-8 col-md-8 align-self-center">
                           <div class="pl-3">
                              <p class="mb-0">Dedicated Case Studies Support Team</p>
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
                        <div class="col-4 col-md-4 border-right"><img src="./assets/images/why/we_icon10.png" class="img-fluid lazy"></div>
                        <div class="col-8 col-md-8 align-self-center">
                           <div class="pl-3">
                              <p class="mb-0">Support through Whatsapp</p>
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
                        <div class="col-4 col-md-4 border-right"><img src="./assets/images/why/we_icon11.png" class="img-fluid lazy"></div>
                        <div class="col-8 col-md-8 align-self-center">
                           <div class="pl-3">
                              <p class="mb-0">Lifetime LMS Access</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- <div class="col-md-4 form-group">
               <div class="card position-relative">
                  <div class="card-body">
                     <div class="row no-gutters">
                        <div class="col-4 col-md-4 border-right"><img src="assets/images/why/we_icon12.png" class="img-fluid lazy"></div>
                        <div class="col-8 col-md-8 align-self-center">
                           <div class="pl-3">
                              <p class="mb-0">Get access to free Guest Lectures & Webinars</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div> -->
         </div>
      </div>
     <!-- <div class="pt-4 pb-4" style="background:#eaeaea">
         <div class="container">
            <h3 class="mt-3 mb-4 font-600 text-center">Data Science Certification Course from Tech Giant IBM</h3>
            <div class="row justify-content-center">
               <div class="col-md-5">
                  <div class="card mb-3">
                     <img src="./assets/images/Data_Science_IBM.png" class="img-fluid lazy">
                  </div>
                  <h5 class="text-blue text-center">IBM Certification</h5>
               </div>
                <div class="col-md-1">
               </div>
               <div class="col-md-3">
                  <div class="card">
                     <img src="./assets/images/Steinbeis.jpg" class="img-fluid lazy">
                  </div>
               </div> 
            </div>
         </div>
      </div>-->
      <div class="p-2 digitalpro bg_cover" data-overlay="6" style="background-image: url(./assets/images/corporateform_bg_2.jpg)">
         <div class="container pt-4 pb-4">
            <div class="row justify-content-center">
               
               
              <!-- <div class="col-md-6 form-group">
                  <div class="banner_content">
                     <div class="card">
                        <div class="card-header">
                           <h3 class="font-20 mb-0">Classroom Training</h3>
                        </div>
                        <div class="card-body">
                           <div>
                              <h3 class="float-left dic-amt"><span class="disam"></span><i class="fa fa-inr"></i> 76800</h3>
                              <h3 class="font-20 float-left text-success"><i class="fa fa-inr"></i> 57800</h3>
                              <div style="clear:both;"></div>
                           </div>
                           <ul class="live-virtual">
                               <li><strong>*As per Govt of India Covid regulations</strong></li>
                              <li>Only 40% of Occupancy will be available for Classroom</li>
                              <li>Seats will be filled based on First come First serve basis</li>
                              <li>Avail Monthly EMI At Zero Interest Rate On All Major Credit Cards</li>
                              <li>Faculty are working Data Scientists, Alumni of IIT, IIM, ISB & PhD qualified</li>
                              <li>Assured Placement Support through dedicated Placement Cell</li>
                              <li>Earn Certification from TCS</li>
                              <li>Certification cost is additional</li>
                           </ul>
                           <h3 class="font-20 text-center mb-4 text-primary">Upcoming Batches</h3>
                           <h3 class="font-16 text-center mb-4"><i class="fa fa-calendar text-primary"></i> 26<sup>th</sup> Sept 2020 - 2PM to 6PM</h3>
                           <div class="text-center">
                              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#classroom">ENROLL NOW</button>
                           </div>
                        </div>
                     </div>
                  </div>
               </div> -->
               
               <div class="col-md-5 form-group">
                  <div class="banner_content">
                     <div class="card">
                        <div class="card-header">
                           <h3 class="font-20 mb-0">Live Virtual Classroom</h3>
                        </div>
                        <div class="card-body">
                           
                           <div>
                              <h3 class="float-left dic-amt"><span class="disam"></span><i class="fa fa-inr"></i> 25999</h3>
                              <h3 class="font-20 float-left text-success"><i class="fa fa-inr"></i> 18999</h3>
                              <div style="clear:both;"></div>
                           </div>
                           <ul class="live-virtual">
                               
                              <!-- <li>Avail Monthly <strong>EMI At Zero Interest Rate</strong> On All Major Credit and Debit Cards </li>--->
                              <!-- <li>Faculty are working Data Scientists, Alumni of IIT, IIM, ISB & PhD qualified </li> -->
                              <!-- <li>Assured Placement Support Through Dedicated Placement Cell </li>--->
							  <li>100 Hrs of Selenium Complete Course</li>
							  <li>2+ Capstone Projects</li>
							  <li>30+ Assignments</li>
							  <li>7 Value-Add Courses</li>
							  <li>Job Readiness Program</li>
                              <!-- <li>Earn Certification from Tata Consultancy Services (TCS) - Partner of ExcelR</li> -->
                           </ul>
                           <!--<h3 class="font-20 text-center text-primary mb-4">Upcoming Batches</h3>
                           <h3 class="font-16 text-center form-group"><i class="fa fa-calendar text-primary"></i> 22<sup>nd</sup> Sept 2020 - 7AM to 9PM</h3>
                           <h3 class="font-16 text-center form-group pl-3">26<sup>th</sup> Sept 2020 - 2PM to 6PM</h3>
                           <h3 class="font-16 text-center mb-4 pl-3">30<sup>th</sup> Sept 2020 - 11AM to 1PM</h3>-->
                           <div class="text-center">
                              <button type="button" class="btn btn-primary" data-toggle="modal" ng-click="modalopenbutton('Live Virtual Classroom')" data-target="#classroom">ENROLL NOW</button>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      </div>
      <!-- <div class="bg-bluelite p-2 pb-5">
         <div class="container pb-5">
            <div id="myCarousel2" class="carousel slide pt-3 pb-3" data-ride="carousel">
               <h3 class="text-white pl-3 mb-5 font-600">Google Reviews</h3>
               <div class="carousel-inner row w-100" role="listbox">
                  <div class="carousel-item active">
                     <div class="col-md-6">
                        <div class="card p-2">
                           <img class="img-fluid" src="../data_science_course_training/assets/images/reviews/1.jpeg" alt="slide 1">												
                        </div>      
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="col-md-6">
                        <div class="card p-2">
                           <img class="img-fluid" src="../data_science_course_training/assets/images/reviews/2.jpeg" alt="slide 1">												
                        </div>      
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="col-md-6">
                        <div class="card p-2">
                           <img class="img-fluid" src="../data_science_course_training/assets/images/reviews/3.jpeg" alt="slide 1">												
                        </div>      
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="col-md-6">
                        <div class="card p-2">
                           <img class="img-fluid" src="../data_science_course_training/assets/images/reviews/4.jpeg" alt="slide 1">												
                        </div>      
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="col-md-6">
                        <div class="card p-2">
                           <img class="img-fluid" src="../data_science_course_training/assets/images/reviews/5.jpeg" alt="slide 1">												
                        </div>      
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="col-md-6">
                        <div class="card p-2">
                           <img class="img-fluid" src="../data_science_course_training/assets/images/reviews/6.jpeg" alt="slide 1">												
                        </div>      
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="col-md-6">
                        <div class="card p-2">
                           <img class="img-fluid" src="../data_science_course_training/assets/images/reviews/7.jpeg" alt="slide 1">												
                        </div>      
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="col-md-6">
                        <div class="card p-2">
                           <img class="img-fluid" src="../data_science_course_training/assets/images/reviews/8.jpeg" alt="slide 1">												
                        </div>      
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="col-md-6">
                        <div class="card p-2">
                           <img class="img-fluid" src="../data_science_course_training/assets/images/reviews/9.jpeg" alt="slide 1">												
                        </div>      
                     </div>
                  </div>

                  
               </div>
               <a class="carousel-control-prev" href="#myCarousel2" role="button" data-slide="prev">
               <i class="fa fa-chevron-left"></i>							</a>
               <a class="carousel-control-next" href="#myCarousel2" role="button" data-slide="next">
               <i class="fa fa-chevron-right"></i>							</a>						
            </div>
         </div>
      </div> -->
      <!-- <div class="p-2 digitalpro bg_cover" data-overlay="6" style="background-image: url(https://excelr.in/data_science_course_training/assets/images/corporateform_bg_2.jpg)"> -->
<div class="p-2 digitalpro bg_cover" style="background:#1C92EC">
			<div class="container pt-5 pb-4">
				<div class="banner_content">
				<h3 class="text-white text-center">Do You Want To Know How Devops Will Be Great For Your Career?</h3>
				<div class="row justify-content-center">
					<div class="col-md-5 form-group">
						
							<div class="card mt-4">
								<div class="card-header"><h3 class="font-20 mb-0">Register for the webinar</h3></div>
								<div class="card-body" style="min-height:auto">
									<form name="formvalidate4" id="formvalidate4" method="post" ng-submit="formsubmit4(enq)">
					
									   <div class="form-group">
										   <input type="text" ng-model="enq.name" name="name" id="name" placeholder="Name*" class="form-control" required/>
									   </div>
									
									   <div class="form-group">
										   <input type="email" ng-model="enq.email" placeholder="E-mail*" name="email" id="email" class="form-control" required/>
									   </div>
								
									   <div class="form-group">
										   <input type="text" ng-model="enq.mobile" placeholder="Mobile Number*" name="mobile" id="mobile" class="form-control" required/>
									   </div>
										 
										<div style="clear:both"></div>
										<div class="text-center" ng-show="processing==0"><button type="submit" name="curriculm" id="curriculm" class="btn btn-primary btn-round">Register</button></div>	
										<h5 class="text-center mb-5" ng-show="processing==1">Please Wait...</h5>
								  </form>
									
								</div>
							</div>
						</div>
					</div>
					
				</div>
				</div>
			</div>
      <div class="bg-dark p-2">
         <p class="mb-0 text-white text-center">Copyright 2020 ExcelR | All Rights Resrved</p>
      </div>
      

      <div id="onloadpopup" class="modal fade" role="dialog">
         <div class="modal-dialog">
            <div class="modal-content" style="background:url(https://excelrindia.b-cdn.net/data_science_course_training/assets/images/quickenquiry_bg.jpg) #ffffff bottom no-repeat;">
               <button type="button" class="close" style="position: absolute; right: 20px; top: 20px;" data-dismiss="modal">&times;</button>
               <div class="text-center">
                  <img src="https://excelrindia.b-cdn.net/data_science_course_training/assets/images/logo_web.png" height="60" class="p-2">
                  <hr class="m-0" />
               </div>
               <div class="modal-body pt-0">
                  <h4 class="p-3 m-0 text-center">Register now</h4>
                  <form name="modalonload" id="modalonload" method="post" ng-submit="submitmodalonload(enq)">
                     <div class="form-group">
                        <input type="text" ng-model="enq.name" name="name" id="name" placeholder="Name*" class="form-control" required/>
                     </div>
                     <div class="form-group">
                        <input type="email" ng-model="enq.email" placeholder="E-mail*" name="email" id="email" class="form-control" required/>
                     </div>
                     <div class="form-group">
                        <input type="text" ng-model="enq.mobile" placeholder="Mobile Number*" name="mobile" id="mobile" class="form-control" required/>
                     </div>
                     <div class="form-group">
                        <input type="checkbox" name="terms" id="terms" checked required/>
                        <span class="text-dark">I hereby accepting agree the <a href="https://www.excelr.com/terms-and-conditions/" target="_blank">terms and conditions</a> and <a href="https://www.excelr.com/privacy-policy/" target="_blank">privacy policy</a> of ExcelR Solutions</span>
                     </div>
                     <div style="clear:both"></div>
                     <div class="text-center mb-5" ng-show="processing==0"><button type="submit" name="curriculm" id="curriculm" class="btn btn-info btn-round">Register</button></div>
                     <h5 class="text-center mb-5" ng-show="processing==1">Please Wait...</h5>
                     <br /><br /><br /><br /><br />
                  </form>
               </div>
            </div>
         </div>
      </div>


      <div id="myModal" class="modal fade" role="dialog">
         <div class="modal-dialog">
            <div class="modal-content" style="background:url(https://excelrindia.b-cdn.net/data_science_course_training/assets/images/quickenquiry_bg.jpg) #ffffff bottom no-repeat;">
               <button type="button" class="close" style="position: absolute; right: 20px; top: 20px;" data-dismiss="modal">&times;</button>
               <div class="text-center">
                  <img src="https://excelrindia.b-cdn.net/data_science_course_training/assets/images/logo_web.png" height="60" class="p-2">
                  <hr class="m-0" />
               </div>
               <div class="modal-body pt-0">
                  <h4 class="p-3 m-0 text-center">Register now</h4>
                  <form name="formvalidate2" id="formvalidate2" method="post" ng-submit="formsubmit2(enq)">
                     <div class="form-group">
                        <input type="text" ng-model="enq.name" name="name" id="name" placeholder="Name*" class="form-control" required/>
                     </div>
                     <div class="form-group">
                        <input type="email" ng-model="enq.email" placeholder="E-mail*" name="email" id="email" class="form-control" required/>
                     </div>
                     <div class="form-group">
                        <input type="text" ng-model="enq.mobile" placeholder="Mobile Number*" name="mobile" id="mobile" class="form-control" required/>
                     </div>
                     <div class="form-group">
                        <input type="checkbox" name="terms" id="terms" checked required/>
                        <span class="text-dark">I hereby accepting agree the <a href="https://www.excelr.com/terms-and-conditions/" target="_blank">terms and conditions</a> and <a href="https://www.excelr.com/privacy-policy/" target="_blank">privacy policy</a> of ExcelR Solutions</span>
                     </div>
                     <div style="clear:both"></div>
                     <div class="text-center mb-5" ng-show="processing==0"><button type="submit" name="curriculm" id="curriculm" class="btn btn-info btn-round">Register</button></div>
                     <h5 class="text-center mb-5" ng-show="processing==1">Please Wait...</h5>
                     <br /><br /><br /><br /><br />
                  </form>
               </div>
            </div>
         </div>
      </div>
      <!-- <script>
         setTimeout(function() {
         $('#myModal').modal();
         }, 30000);
      </script> -->
      <div id="classroom" class="modal fade" role="dialog">
         <div class="modal-dialog">
         <div class="modal-content" style="background:url(https://excelrindia.b-cdn.net/data_science_course_training/assets/images/quickenquiry_bg.jpg) #ffffff bottom no-repeat;">
               <button type="button" class="close" style="position: absolute; right: 20px; top: 20px;" data-dismiss="modal">&times;</button>
               <div class="text-center">
                  <img src="https://excelrindia.b-cdn.net/data_science_course_training/assets/images/logo_web.png" height="60" class="p-2">
                  <hr class="m-0" />
               </div>
               <div class="modal-body pt-0">
                  <h4 class="p-3 m-0 text-center">Register now</h4>
                  <form name="formvalidate3" id="formvalidate3" method="post" ng-submit="formsubmit3(enq)">
                     <div class="form-group">
                        <input type="text" ng-model="enq.name" name="name" id="name" placeholder="Name*" class="form-control" required/>
                     </div>
                     <div class="form-group">
                        <input type="email" ng-model="enq.email" placeholder="E-mail*" name="email" id="email" class="form-control" required/>
                     </div>
                     <div class="form-group">
                        <input type="text" ng-model="enq.mobile" placeholder="Mobile Number*" name="mobile" id="mobile" class="form-control" required/>
                     </div>
                     <div class="form-group">
                        <input type="checkbox" name="terms" id="terms" checked required/>
                        <span class="text-dark">I hereby accepting agree the <a href="https://www.excelr.com/terms-and-conditions/" target="_blank">terms and conditions</a> and <a href="https://www.excelr.com/privacy-policy/" target="_blank">privacy policy</a> of ExcelR Solutions</span>
                     </div>
                     <div style="clear:both"></div>
                     <div class="text-center mb-5" ng-show="processing==0"><button type="submit" name="curriculm" id="curriculm" class="btn btn-info btn-round">Register</button></div>
                     <h5 class="text-center mb-5" ng-show="processing==1">Please Wait...</h5>
                     <br /><br /><br /><br /><br />
                  </form>
               </div>
            </div>
         </div>
      </div>
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="./assets/js/jquery-3.2.1.slim.min.js"></script>
      <script src="./assets/js/popper.min.js"></script>
      <script src="./assets/js/bootstrap.min.js"></script>
      <script src="./assets/js/jquery.validate.min.js" type="text/javascript"></script>
      <script src="./assets/js/jquery-validate.bootstrap-tooltip.min.js" type="text/javascript"></script>
      <script type="text/javascript" src="./assets/js/validation.js"></script>
<script type="text/javascript">
         $(window).scroll(function(){
         	var scroll = $(window).scrollTop();
         	if(scroll < 300){
         		$('.fixed-top').css('background', 'transparent');
         	} else{
         		$('.fixed-top').css('background', 'rgba(0, 0, 0, .8)');
         	}
         });
         
         $('#myCarousel').carousel({
           interval: 2000
         })
         
         $('#myCarousel2').carousel({
           interval: 3000
         })
         
         $('.carousel .carousel-item').each(function() {
           var minPerSlide = 4;
           var next = $(this).next();
           if (!next.length) {
               next = $(this).siblings(':first');
           }
           next.children(':first-child').clone().appendTo($(this));
         
           for (var i = 0; i < minPerSlide; i++) {
               next = next.next();
               if (!next.length) {
                   next = $(this).siblings(':first');
               }
         
               next.children(':first-child').clone().appendTo($(this));
           }
         });
		 
         </script>
       <!-- <script type="text/javascript" src="../webengage/zopimandlazzy.js"></script> -->
   </body>
</html>