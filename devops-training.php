<!doctype html>
<html lang="en">
   <head>
  <!—Start Karuna GTM code updated on 28th jan2021--->
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NQPCH86');</script>
<!-- End Google Tag Manager -->
<!—End Karuna GTM code updated on 28th jan2021--->
<!-- start Facebook pixel code updated on 10th may 2022 Karuna -->
<!-- Meta Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '542718810584380');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=542718810584380&ev=PageView&noscript=1"
/></noscript>
<!-- End Meta Pixel Code -->
<!-- end Facebook pixel code updated on 10th may 2022 Karuna -->
<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '127624404531017');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=127624404531017&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->

      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="title" content="DevOps Architect (SAA-CO2) ">
      <meta name="keywords" content="DevOps training, DevOps certification, DevOps course, DevOps institute, DevOps courses">
      <meta name="description" content="ExcelR is the Best DevOps Course Training Institute collaborated with IBM with 100% Placement assistance.">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="./assets/css/font-awesome.min.css">
      <link rel="stylesheet" href="assets/css/styles.css">
      <link rel="shortcut icon" href="https://excelrcom.b-cdn.net/assets/favicon.png?v=0" type="image/x-icon">
      <title>DevOps Architect (SAA-CO2)</title>	  
      	  
      <script src="./angular/angular.min.js"></script> 
      
<script>
var app = angular.module("enquiry", []);
         
app.controller('report', function($scope, $http,$window,$timeout) {
         
//    var enquirydata = $.param({
// 	userid:"2000198755",
// 	 password:"zvGTvdkAT",
// 	phone_number:"918885767996",
// 	 v:"1.1",
// 	auth_scheme:"plain",
// 	channel:"WHATSAPP"});
//   var config = {
// 	  headers : {
// 		  'Content-Type': 'application/x-www-form-urlencoded'
// 	  }
//   }
// //console.log(enquirydata);
// $http.post('https://media.smsgupshup.com/GatewayAPI/rest?method=OPT_IN&format=json',enquirydata,config).success(function(data) {
// 	console.log(data);
  
// });

	//	 $http.get('https://media.smsgupshup.com/GatewayAPI/rest?method=OPT_IN&format=json&userid=2000198755&password=zvGTvdkAT&phone_number=918885767996&v=1.1&auth_scheme=plain&channel=WHATSAPP').success(function(res) {
         	//	 res.header("Access-Control-Allow-Origin", "*");
             //    res.header("Access-Control-Allow-Headers", "X-Requested-With");
         	//	console.log(data);
         //	});
    //var thanku = window.location.origin+window.location.pathname+'thanku.php';
			var siteurl = window.location.origin+window.location.pathname;
			var thanku = 'https://excelr.in/thankyou/';
			$scope.processing = 0;
			$scope.storeeamil = (email) =>{
				let obj = {
					url : "https://excelr.in/thankyou/downloads/DevOps_Solution_Architect_Course_Agenda.pdf",
					email : email
				}
				localStorage.setItem("pdfurl", JSON.stringify(obj));
			}
			
			var exqfrom = 'excelr.in';
			var urlpath = window.location.href;
			setTimeout(function() {
				$scope.afterfewsec();
			}, 3000);
			$scope.afterfewsec = ()=>{
				let location = "";
				webengage.track("Page Viewed - excelr.in", {
					"Course" : "DevOps",
					"PageURL" : urlpath,
					"Location"   : location,
					"LandingPage" : siteurl
				});
			};
			var modeltimer = $timeout(function() {
				$('#onloadpopup').modal();
			}, 30000);
			$scope.modalopenbutton  = function(title){
				$timeout.cancel(modeltimer);
				if(title=='Download Curriculum'){
					$scope.downloadtitle = 'Download Curriculum';
					let location = "";
					webengage.track("Download Curriculum Clicked", {
						"Course" : "DevOps",
						"PageURL" : urlpath,
						"Location"   : location
					});
				} else {
					$scope.downloadtitle = title;
					let location = "";
					webengage.track("Enroll Now Initiated", {
						"Course" : $scope.downloadtitle,
						"PageURL" : urlpath,
						"Location"   : location
					});	
				}
			}
		$scope.submitmodalonload = function(std){
         	if ($("#modalonload").valid()){
				$scope.processing = 1;
				std.course = "Popup";
				std.weburl = urlpath;
				std.coursebitrix = "DevOps";
         		std.source = "";
         		std.medium = "";
         		std.campaign = "";
				std.device = "";
				std.adgroup = "";
				std.term = "";
				std.location = "";

				std.utm_channel = "";
				std.utm_type = "";
				std.utm_variety = "";
				std.utm_experiment = "";
				webengage.user.login(std.mobile);
				webengage.user.setAttribute("we_first_name", std.name);
				webengage.user.setAttribute("we_email", std.email);
				webengage.user.setAttribute('we_phone', std.mobile);
				webengage.user.setAttribute("Location", std.location);
				webengage.user.setAttribute("Course", std.course);
				webengage.user.setAttribute("Landing Page", urlpath);
				webengage.user.setAttribute("Enquiry From", exqfrom);
				  	
				webengage.track("Enquiry Form Onload - excelr.in", {
					"eventTitle" : "DevOps-Popup",
					"StudentName"      : std.name,
					"StudentEmail"   : std.email,
					"StudentMobile" : std.mobile,
					"Course" : std.course,
					"PageURL" : urlpath,
					"Location"   : std.location
				});
				$scope.storeeamil(std.email);
         		$http.post('../enquiry_config/enquiry.php',std).success(function(data) {
					$scope.processing = 0;
				  //console.log(data);
				  // alert("Your Query Submitted Successfully");
				  std.name = null;
				  std.email = null;
				  std.mobile = null;
				  window.open(thanku, '_blank');
         		});
         	}	
         }	
         
         $scope.formsubmit = function(std){
         	if ($("#formvalidate").valid()){
				$scope.processing = 0;
				std.weburl = urlpath;
				std.coursebitrix = "DevOps";
         		std.course = $scope.downloadtitle;
         		std.source = "";
         		std.medium = "";
         		std.campaign = "";
				std.device = "";
				std.adgroup = "";
				std.term = "";
				std.location = "";

				std.utm_channel = "";
				std.utm_type = "";
				std.utm_variety = "";
				std.utm_experiment = "";
         		  //console.log(std);
				webengage.user.login(std.mobile);
				webengage.user.setAttribute("we_first_name", std.name);
				webengage.user.setAttribute("we_email", std.email);
				webengage.user.setAttribute('we_phone', std.mobile);
				webengage.user.setAttribute("Location", std.location);
				webengage.user.setAttribute("Course", $scope.downloadtitle);
				webengage.user.setAttribute("Landing Page", urlpath);
				webengage.user.setAttribute("Enquiry From", exqfrom);
				if($scope.downloadtitle=='DevOps Download Curriculum'){
					var submittitle = "Download Curriculum Submitted - excelr.in";
				} else {
					var submittitle = "Enquiry Form Submitted - excelr.in";
				}
				
				webengage.track(submittitle, {
					"eventTitle" : "Download Curriculum Submit",
					"StudentName"      : std.name,
					"StudentEmail"   : std.email,
					"StudentMobile" : std.mobile,
					"Course" : $scope.downloadtitle,
					"PageURL" : urlpath,
					"Location"   : std.location
				});
				$scope.storeeamil(std.email);
         		$http.post('../enquiry_config/enquiry.php',std).success(function(data) {
					$scope.processing = 0;
         			 // console.log(data);
         			 // alert("Your Query Submitted Successfully");
         			  std.name = null;
         			  std.email = null;
         			  std.mobile = null;
         			  window.open(thanku, '_blank');
         			  
         			
         		});
         	}	
         }
         
         $scope.formsubmit2 = function(std){
         	if ($("#formvalidate2").valid()){
				$scope.processing = 1;
				std.weburl = urlpath;
				std.coursebitrix = "DevOps";
         		std.course = $scope.downloadtitle;
         		std.source = "";
         		std.medium = "";
         		std.campaign = "";
				std.device = "";
				std.adgroup = "";
				std.term = "";
				std.location = "";

				std.utm_channel = "";
				std.utm_type = "";
				std.utm_variety = "";
				std.utm_experiment = "";
         		  //console.log(std);
				webengage.user.login(std.mobile);
				webengage.user.setAttribute("we_first_name", std.name);
				webengage.user.setAttribute("we_email", std.email);
				webengage.user.setAttribute('we_phone', std.mobile);
				webengage.user.setAttribute("Location", std.location);
				webengage.user.setAttribute("Course", $scope.downloadtitle);
				webengage.user.setAttribute("Landing Page", urlpath);
				webengage.user.setAttribute("Enquiry From", exqfrom);
				if($scope.downloadtitle=='DevOps Download Curriculum'){
					var submittitle = "Download Curriculum Submitted - excelr.in";
				} else {
					var submittitle = "Enquiry Form Submitted - excelr.in";
				}
				
				webengage.track(submittitle, {
					"eventTitle" : "Download Curriculum Submit",
					"StudentName"      : std.name,
					"StudentEmail"   : std.email,
					"StudentMobile" : std.mobile,
					"Course" : $scope.downloadtitle,
					"PageURL" : urlpath,
					"Location"   : std.location
				});
				$scope.storeeamil(std.email);
         		$http.post('../enquiry_config/enquiry.php',std).success(function(data) {
					$scope.processing = 0;
         			 // console.log(data);
         			 // alert("Your Query Submitted Successfully");
         			  std.name = null;
         			  std.email = null;
         			  std.mobile = null;
         			  window.open(thanku, '_blank');
         		});
         	}	
         }

         $scope.formsubmit3 = function(std){
         	if ($("#formvalidate3").valid()){
				$scope.processing = 1;
				std.weburl = urlpath;
				std.coursebitrix = "DevOps";
         		std.course = $scope.downloadtitle;
         		std.source = "";
         		std.medium = "";
         		std.campaign = "";
				std.device = "";
				std.adgroup = "";
				std.term = "";
				std.location = "";

				std.utm_channel = "";
				std.utm_type = "";
				std.utm_variety = "";
				std.utm_experiment = "";
         		  //console.log(std);
				webengage.user.login(std.mobile);
				webengage.user.setAttribute("we_first_name", std.name);
				webengage.user.setAttribute("we_email", std.email);
				webengage.user.setAttribute('we_phone', std.mobile);
				webengage.user.setAttribute("Location", std.location);
				webengage.user.setAttribute("Course", $scope.downloadtitle);
				webengage.user.setAttribute("Landing Page", urlpath);
				webengage.user.setAttribute("Enquiry From", exqfrom);
				if($scope.downloadtitle=='DevOps Download Curriculum'){
					var submittitle = "Download Curriculum Submitted - excelr.in";
				} else {
					var submittitle = "Enquiry Form Submitted - excelr.in";
				}
				
				webengage.track(submittitle, {
					"eventTitle" : "Enquiry Submitted",
					"StudentName"      : std.name,
					"StudentEmail"   : std.email,
					"StudentMobile" : std.mobile,
					"Course" : $scope.downloadtitle,
					"PageURL" : urlpath,
					"Location"   : std.location
				});
				$scope.storeeamil(std.email);
         		$http.post('../enquiry_config/enquiry.php',std).success(function(data) {
					$scope.processing = 0;
         			 // console.log(data);
         			 // alert("Your Query Submitted Successfully");
         			  std.name = null;
         			  std.email = null;
         			  std.mobile = null;
         			  window.open(thanku, '_blank');
         		});
         	}	
         }

         $scope.formsubmit4 = function(std){
            if ($("#formvalidate4").valid()){
				$scope.processing = 0;
			std.weburl = urlpath;
			// std.coursebitrix = "DevOps";
               //console.log(std);
              	std.course = "DevOps";
				std.source = "";
				std.medium = "";
				std.campaign = "";
				std.device = "";
				std.adgroup = "";
				std.term = "";
				std.location = "";

				std.utm_channel = "";
				std.utm_type = "";
				std.utm_variety = "";
				std.utm_experiment = "";
				webengage.user.login(std.mobile);
				webengage.user.setAttribute("we_first_name", std.name);
				webengage.user.setAttribute("we_email", std.email);
				webengage.user.setAttribute('we_phone', std.mobile);
				webengage.user.setAttribute("Location", std.location);
				webengage.user.setAttribute("Course", $scope.downloadtitle);
				webengage.user.setAttribute("Landing Page", urlpath);
				webengage.user.setAttribute("Enquiry From", exqfrom);
				  	
				
				webengage.track("Webinar Form - excelr.in", {
					"eventTitle" : "DevOps Webinar Submit",
					"StudentName"      : std.name,
					"StudentEmail"   : std.email,
					"StudentMobile" : std.mobile,
					"Course" : $scope.downloadtitle,
					"PageURL" : urlpath,
					"Location"   : std.location
				});
				$scope.storeeamil(std.email);
               $http.post('../enquiry_config/webinar.php',std).success(function(data) {
				$scope.processing = 0;
                 // console.log(data);
                  // alert("Your Query Submitted Successfully");
                  std.name = null;
                  std.email = null;
                  std.mobile = null;
				  std.city = null;
                  window.open(thanku, '_blank');
               });
            }	
         }
	$scope.showmore = 0;
	$scope.clickformore =()=>{
		$scope.showmore = 1;
	}

	$scope.clickforless =()=>{
		$scope.showmore = 0;
	}	 
});
</script>
<script id='_webengage_script_tag' type='text/javascript'>
var webengage;!function(w,e,b,n,g){function o(e,t){e[t[t.length-1]]=function(){r.__queue.push([t.join("."),
arguments])}}var i,s,r=w[b],z=" ",l="init options track screen onReady".split(z),a="feedback survey notification".split(z),c="options render clear abort".split(z),p="Open Close Submit Complete View Click".split(z),u="identify login logout setAttribute".split(z);if(!r||!r.__v){for(w[b]=r={__queue:[],__v:"6.0",user:{}},i=0;i < l.length;i++)o(r,[l[i]]);for(i=0;i < a.length;i++){for(r[a[i]]={},s=0;s < c.length;s++)o(r[a[i]],[a[i],c[s]]);for(s=0;s < p.length;s++)o(r[a[i]],[a[i],"on"+p[s]])}for(i=0;i < u.length;i++)o(r.user,["user",u[i]]);setTimeout(function(){var f=e.createElement("script"),d=e.getElementById("_webengage_script_tag");f.type="text/javascript",f.async=!0,f.src=("https:"==e.location.protocol?"https://ssl.widgets.webengage.com":"http://cdn.widgets.webengage.com")+"/js/webengage-min-v-6.0.js",d.parentNode.insertBefore(f,d)})}}(window,document,"webengage");webengage.init("~15ba20116");
</script>      <!--End of Zendesk Chat Script-->
      <style>
		.stikeywhatsup {background:#44c554; height:50px; width:50px;text-align: center;
		line-height: 50px; border-radius:50%;box-shadow: 2px 2px 6px rgba(0,0,0,0.4);
		font-size: 28px; position:fixed; bottom:24px; left:20px; z-index:9999; cursor:pointer; }
		
		.stikeywhatsup:hover { box-shadow: 2px 2px 11px rgba(0,0,0,0.7);}
      .carousel-item {align-items:top !important;}
         @media (min-width: 992px) {
         .banner_content .card-body {min-height:260px;}
         }
      .tools img {padding: 10px 0;}   
      a.stikeymobile {background:#1c92ec; 
         height:50px; 
         width:50px;
         text-align: center;
         border-radius:50%;
         box-shadow: 2px 2px 6px rgba(0,0,0,0.4);
         font-size: 28px; 
         position:fixed; 
         bottom:20px; 
         left:20px; 
         z-index:9999; 
         cursor:pointer; }
         a.stikeymobile:hover { box-shadow: 2px 2px 11px rgba(0,0,0,0.7);}
         a.stikeymobile i.fa {padding-top:10px;}
      </style>
   </head>
   <body ng-app="enquiry" ng-controller="report">
<!—Start Karuna GTM code updated on 28th jan2021--->
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NQPCH86"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<!—End Karuna GTM code updated on 28th jan2021--->

 
	
	<!--  Clickcease.com tracking--><script type='text/javascript'>var script = document.createElement('script');script.async = true; script.type = 'text/javascript';var target = 'https://www.clickcease.com/monitor/stat.js';script.src = target;var elem = document.head;elem.appendChild(script);</script><noscript><a href='https://www.clickcease.com' rel='nofollow'><img src='https://monitor.clickcease.com/stats/stats.aspx' alt='ClickCease'/></a></noscript><!--  Clickcease.com tracking-->
      <a href="tel: +91 8035240517" class="stikeymobile">
         <i class="fa fa-phone text-white"></i>
      </a>
	  <!--<a href="https://api.whatsapp.com/send?phone=919686916061" class="stikeywhatsup"><i class="fa fa-whatsapp text-white"></i></a>-->
      <nav class="navbar">
         <div class="container">
            <a class="navbar-brand" href="https://excelr.in/">
            <img src="./assets/images/logo_web2.png" height="60" alt="">		  </a>
           <div class="float-right">
              
               <a href="tel: +91 8035240517" class="text-dark font-16"><i class="fa fa-phone"></i> +91 8035240517</a>
                
            </div>
         </div>
      </nav>
	  <div class="mainbanner">
	  	<div class="container h-100 d-flex align-content-center">
			<div class="row">
				<div class="col-md-12 my-auto text-white">
					<h3 class="mb-3">DevOps Certification Training Course in Bangalore </h3>
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
                  <img src="./assets/images/bannertwo/2.png" class="img-fluid w-100">				
               </div>
               <div class="col-6 col-md-2">
                  <img src="./assets/images/bannertwo/3.png" class="img-fluid w-100">				
               </div>
               <div class="col-6 col-md-2">
                  <img src="./assets/images/bannertwo/4.png" class="img-fluid w-100">				
               </div>
               <div class="col-6 col-md-2">
                  <img src="./assets/images/bannertwo/5.png" class="img-fluid w-100">				
               </div>
               <div class="col-6 col-md-2">
                  <img src="./assets/images/bannertwo/6.png" class="img-fluid w-100">				
               </div>
		<div class="col-6 col-md-2">
                  <img src="./assets/images/bannertwo/7.png" class="img-fluid w-100">				
               </div>
            </div>
         </div>
      </div>
      <div class="container">
         <h3 class="text-blue text-center mt-4 font-600">Our Alumni Works at</h3>
         <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <div id="myCarousel" class="carousel slide w-100" data-ride="carousel">
               <div class="carousel-inner w-100" role="listbox">
                  <div class="carousel-item active">
                     <div class="col-lg-3 col-md-6 text-center bg-white">
                        <img class="img-fluid lazy" src="https://excelrindia.b-cdn.net/data_science_course_training/assets/images/ajax-loader.gif" data-src="./assets/images/alumini/1.jpg">                        
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="col-lg-3 col-md-6 text-center bg-white">
                        <img class="img-fluid lazy" src="https://excelrindia.b-cdn.net/data_science_course_training/assets/images/ajax-loader.gif" data-src="./assets/images/alumini/2.jpg">                        
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="col-lg-3 col-md-6 text-center bg-white">
                        <img class="img-fluid lazy" src="https://excelrindia.b-cdn.net/data_science_course_training/assets/images/ajax-loader.gif" data-src="./assets/images/alumini/3.jpg">                        
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="col-lg-3 col-md-6 text-center bg-white">
                        <img class="img-fluid lazy" src="https://excelrindia.b-cdn.net/data_science_course_training/assets/images/ajax-loader.gif" data-src="./assets/images/alumini/4.jpg">                        
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="col-lg-3 col-md-6 text-center bg-white">
                        <img class="img-fluid lazy" src="https://excelrindia.b-cdn.net/data_science_course_training/assets/images/ajax-loader.gif" data-src="./assets/images/alumini/5.jpg">                        
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="col-lg-3 col-md-6 text-center bg-white">
                        <img class="img-fluid lazy" src="https://excelrindia.b-cdn.net/data_science_course_training/assets/images/ajax-loader.gif" data-src="./assets/images/alumini/6.png">                        
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="col-lg-3 col-md-6 text-center bg-white">
                        <img class="img-fluid lazy" src="https://excelrindia.b-cdn.net/data_science_course_training/assets/images/ajax-loader.gif" data-src="./assets/images/alumini/7.png">                        
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="col-lg-3 col-md-6 text-center bg-white">
                        <img class="img-fluid lazy" src="https://excelrindia.b-cdn.net/data_science_course_training/assets/images/ajax-loader.gif" data-src="./assets/images/alumini/8.png">                        
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="col-lg-3 col-md-6 text-center bg-white">
                        <img class="img-fluid lazy" src="https://excelrindia.b-cdn.net/data_science_course_training/assets/images/ajax-loader.gif" data-src="./assets/images/alumini/9.png">                        
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="col-lg-3 col-md-6 text-center bg-white">
                        <img class="img-fluid lazy" src="https://excelrindia.b-cdn.net/data_science_course_training/assets/images/ajax-loader.gif" data-src="./assets/images/alumini/10.png">                        
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="col-lg-3 col-md-6 text-center bg-white">
                        <img class="img-fluid lazy" src="https://excelrindia.b-cdn.net/data_science_course_training/assets/images/ajax-loader.gif" data-src="./assets/images/alumini/11.png">                        
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="col-lg-3 col-md-6 text-center bg-white">
                        <img class="img-fluid lazy" src="https://excelrindia.b-cdn.net/data_science_course_training/assets/images/ajax-loader.gif" data-src="./assets/images/alumini/12.png">                        
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="col-lg-3 col-md-6 text-center bg-white">
                        <img class="img-fluid lazy" src="https://excelrindia.b-cdn.net/data_science_course_training/assets/images/ajax-loader.gif" data-src="./assets/images/alumini/13.png">                        
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="col-lg-3 col-md-6 text-center bg-white">
                        <img class="img-fluid lazy" src="https://excelrindia.b-cdn.net/data_science_course_training/assets/images/ajax-loader.gif" data-src="./assets/images/alumini/14.png">                        
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="col-lg-3 col-md-6 text-center bg-white">
                        <img class="img-fluid lazy" src="https://excelrindia.b-cdn.net/data_science_course_training/assets/images/ajax-loader.gif" data-src="./assets/images/alumini/15.png">                        
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="col-lg-3 col-md-6 text-center bg-white">
                        <img class="img-fluid lazy" src="https://excelrindia.b-cdn.net/data_science_course_training/assets/images/ajax-loader.gif" data-src="./assets/images/alumini/16.png">                        
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="col-lg-3 col-md-6 text-center bg-white">
                        <img class="img-fluid lazy" src="https://excelrindia.b-cdn.net/data_science_course_training/assets/images/ajax-loader.gif" data-src="./assets/images/alumini/17.png">                        
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="col-lg-3 col-md-6 text-center bg-white">
                        <img class="img-fluid lazy" src="https://excelrindia.b-cdn.net/data_science_course_training/assets/images/ajax-loader.gif" data-src="./assets/images/alumini/18.png">                        
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="col-lg-3 col-md-6 text-center bg-white">
                        <img class="img-fluid lazy" src="https://excelrindia.b-cdn.net/data_science_course_training/assets/images/ajax-loader.gif" data-src="./assets/images/alumini/19.png">                        
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="col-lg-3 col-md-6 text-center bg-white">
                        <img class="img-fluid lazy" src="https://excelrindia.b-cdn.net/data_science_course_training/assets/images/ajax-loader.gif" data-src="./assets/images/alumini/20.png">                        
                     </div>
                  </div>
               </div>
               <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
               <i class="fa fa-chevron-left fa-lg text-muted"></i>				</a>
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
                        <div class="text-center"><img src="./assets/images/programme/icon1.png"></div>
                     </div>
                     <div class="card-body p-2">
                        <h4>Life Time Upgrade</h4>
                     </div>
                  </div>
               </div>
               <div class="col-md-3 form-group">
                  <div class="card p-1">
                     <div class="card-header">
                        <div class="text-center"><img class="lazy" src="https://excelrindia.b-cdn.net/data_science_course_training/assets/images/ajax-loader.gif" data-src="./assets/images/programme/icon2.png"></div>
                     </div>
                     <div class="card-body p-2">
                        <h4>2+ Capstone Projects & 30+ Assignments</h4>
                     </div>
                  </div>
               </div>
               <div class="col-md-3 form-group">
                  <div class="card p-1">
                     <div class="card-header">
                        <div class="text-center"><img class="lazy" src="https://excelrindia.b-cdn.net/data_science_course_training/assets/images/ajax-loader.gif" data-src="./assets/images/programme/icon3.png">
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
                        <div class="text-center"><img class="lazy" src="https://excelrindia.b-cdn.net/data_science_course_training/assets/images/ajax-loader.gif" data-src="./assets/images/programme/icon4.png"></div>
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
               <img class="lazy" src="https://excelrindia.b-cdn.net/data_science_course_training/assets/images/ajax-loader.gif" data-src="assets/images/Tools_01.svg" style="width: 100%;" class="img-fluid">
            </div>
         </div> 
      </div>
      <div class="bg-lite pt-2 pb-2">
         
         <div class="container mb-5 tools">
            <h3 class="mt-3 mb-4 font-600">Tools and Technologies</h3>
            <div class="row text-center">
               <div class="col-4 col-md-2 border-right">
                  <img src="https://excelrindia.b-cdn.net/data_science_course_training/assets/images/ajax-loader.gif" data-src="assets/images/tools/tool-1.png" class="img-fluid lazy">
                  <p>Eclipse IDE</p>
            </div>
               <div class="col-4 col-md-2 border-right"><img src="https://excelrindia.b-cdn.net/data_science_course_training/assets/images/ajax-loader.gif" data-src="assets/images/tools/tool-2.png" class="img-fluid lazy">
               <p>Git and GitHub</p></div>
               <div class="col-4 col-md-2 border-right"><img src="https://excelrindia.b-cdn.net/data_science_course_training/assets/images/ajax-loader.gif" data-src="assets/images/tools/tool-3.png" class="img-fluid lazy">
               <p>Amazon EC2</p></div>
               <div class="col-4 col-md-2 border-right"><img src="https://excelrindia.b-cdn.net/data_science_course_training/assets/images/ajax-loader.gif" data-src="assets/images/tools/tool-4.png" class="img-fluid lazy">
               <p>Putty and Puttygen</p></div>
               <div class="col-4 col-md-2 border-right"><img src="https://excelrindia.b-cdn.net/data_science_course_training/assets/images/ajax-loader.gif" data-src="assets/images/tools/tool-5.png" class="img-fluid lazy">
               <p>Maven</p></div>
               <div class="col-4 col-md-2"><img src="assets/images/tools/tool-7.png" class="img-fluid lazy">
               <p>Jenkins</p></div>
            </div>
            <div ng-show="showmore == 1">
               <div class="row text-center">
                  <div class="col-4 col-md-2 border-right"><img src="https://excelrindia.b-cdn.net/data_science_course_training/assets/images/ajax-loader.gif" data-src="assets/images/tools/tool-6.png" class="img-fluid lazy">
                  <p>JUnit</p></div>
                  <div class="col-4 col-md-2 border-right"><img src="https://excelrindia.b-cdn.net/data_science_course_training/assets/images/ajax-loader.gif" data-src="assets/images/tools/tool-8.png" class="img-fluid lazy">
                  <p>BlazeMeter</p></div>
                  <div class="col-4 col-md-2 border-right"><img src="https://excelrindia.b-cdn.net/data_science_course_training/assets/images/ajax-loader.gif" data-src="assets/images/tools/tool-9.png" class="img-fluid lazy">
                  <p>Containers and Dockers</p></div>
                  <div class="col-4 col-md-2 border-right"><img src="https://excelrindia.b-cdn.net/data_science_course_training/assets/images/ajax-loader.gif" data-src="assets/images/tools/tool-10.png" class="img-fluid lazy">
                  <p>Kubernetes</p></div>
                  <div class="col-4 col-md-2 border-right"><img src="https://excelrindia.b-cdn.net/data_science_course_training/assets/images/ajax-loader.gif" data-src="assets/images/tools/tool-11.png" class="img-fluid lazy">
                  <p>Terraform</p></div>
                  <div class="col-4 col-md-2"><img src="assets/images/tools/tool-12.png" class="img-fluid lazy">
                  <p>Prometheus and Grafana</p></div>
               </div>
               <div class="row text-center">  
                  <div class="col-4 col-md-2 border-right"><img src="https://excelrindia.b-cdn.net/data_science_course_training/assets/images/ajax-loader.gif" data-src="assets/images/tools/tool-13.png" class="img-fluid lazy">
                  <p>ELK Stack</p></div>
                  <div class="col-4 col-md-2 border-right"><img src="https://excelrindia.b-cdn.net/data_science_course_training/assets/images/ajax-loader.gif" data-src="assets/images/tools/tool-14.png" class="img-fluid lazy">
                  <p>Overview AWS of DevOps</p></div>
				  
				  
				  
				  <div class="col-4 col-md-2 border-right"><img src="https://excelrindia.b-cdn.net/data_science_course_training/assets/images/ajax-loader.gif" data-src="assets/images/tools/tool-15.png" class="img-fluid lazy">
                  <p>Ansible</p></div>
				  <div class="col-4 col-md-2 border-right"><img src="https://excelrindia.b-cdn.net/data_science_course_training/assets/images/ajax-loader.gif" data-src="assets/images/tools/tool-16.png" class="img-fluid lazy">
                  <p>Atlassian</p></div>
				  <div class="col-4 col-md-2 border-right"><img src="https://excelrindia.b-cdn.net/data_science_course_training/assets/images/ajax-loader.gif" data-src="assets/images/tools/tool-17.png" class="img-fluid lazy">
                  <p>JFrog</p></div>
				  <div class="col-4 col-md-2 border-right"><img src="https://excelrindia.b-cdn.net/data_science_course_training/assets/images/ajax-loader.gif" data-src="assets/images/tools/tool-18.png" class="img-fluid lazy">
                  <p>MSBuild</p></div>
				</div>
				  
				  <div class="row text-center">
				  <div class="col-4 col-md-2 border-right"><img src="https://excelrindia.b-cdn.net/data_science_course_training/assets/images/ajax-loader.gif" data-src="assets/images/tools/tool-19.png" class="img-fluid lazy">
                  <p>Nexus</p></div>
				  <div class="col-4 col-md-2 border-right"><img src="https://excelrindia.b-cdn.net/data_science_course_training/assets/images/ajax-loader.gif" data-src="assets/images/tools/tool-20.png" class="img-fluid lazy">
                  <p>Puppet</p></div>
				  <div class="col-4 col-md-2 border-right"><img src="https://excelrindia.b-cdn.net/data_science_course_training/assets/images/ajax-loader.gif" data-src="assets/images/tools/tool-21.png" class="img-fluid lazy">
                  <p>Sonarqube</p></div>
				  <div class="col-4 col-md-2 border-right"><img src="https://excelrindia.b-cdn.net/data_science_course_training/assets/images/ajax-loader.gif" data-src="assets/images/tools/tool-22.png" class="img-fluid lazy">
                  <p>TeamCity</p></div>
				  <div class="col-4 col-md-2 border-right"><img src="https://excelrindia.b-cdn.net/data_science_course_training/assets/images/ajax-loader.gif" data-src="assets/images/tools/tool-23.png" class="img-fluid lazy">
                  <p>XL_Deploy</p></div>
               </div>
                
               </div>
            </div>   
            <div class="text-center mt-4 mb-4" ng-show="showmore==0">
               <button type="button" class="btn btn-primary btn-sm" ng-click="clickformore()">Show More...</button>
            </div>
            <div class="text-center mt-4 mb-4" ng-show="showmore==1">
               <button type="button" class="btn btn-primary btn-sm" ng-click="clickforless()">Hide More...</button>
            </div>
         </div>
      </div>
       <div style="background:url(assets/images/5in1cert.jpg) repeat; padding:20px 0; width:100%;">
	 	<div class="container">
			<h3 class="mt-3 mb-4 font-600 text-center">3 in 1 Certifications</h3>
	 		<!---<img src="assets/images/5in1cert.png" class="img-fluid">-->
         <div class="row justify-content-center">
               <div class="col-6 col-md-3">
                  <img src="./assets/images/2in1certification1.png" class="img-fluid w-100 lazy">
               </div>
               <div class="col-6 col-md-3">
                  <img src="./assets/images/2in1certification2.png" class="img-fluid w-100 lazy">
               </div>
			   <div class="col-6 col-md-3">
                  <img src="./assets/images/4in2.png" class="img-fluid w-100 lazy">
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
            <img src="assets/images/process_lp_aws.png" class="img-fluid w-100 lazy">
         </div>
      </div>
      <div class="container" id="why-excelr">
         <h3 class="mt-3 mb-4 font-600">Why ExcelR?</h3>
         <div class="row">
            <!--<div class="col-md-4 form-group">
               <div class="card position-relative">
                  <div class="card-body">
                     <div class="row no-gutters">
                        <div class="col-4 col-md-4 border-right"><img src="https://excelrindia.b-cdn.net/data_science_course_training/assets/images/ajax-loader.gif" data-src="./assets/images/why/we_icon1.png" class="img-fluid lazy"></div>
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
                        <div class="col-4 col-md-4 border-right"><img src="https://excelrindia.b-cdn.net/data_science_course_training/assets/images/ajax-loader.gif" data-src="./assets/images/why/we_icon2.png" class="img-fluid lazy"></div>
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
                        <div class="col-4 col-md-4 border-right"><img src="https://excelrindia.b-cdn.net/data_science_course_training/assets/images/ajax-loader.gif" data-src="./assets/images/why/we_icon3.png" class="img-fluid lazy"></div>
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
                        <div class="col-4 col-md-4 border-right"><img src="https://excelrindia.b-cdn.net/data_science_course_training/assets/images/ajax-loader.gif" data-src="./assets/images/why/we_icon4.png" class="img-fluid lazy"></div>
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
                        <div class="col-4 col-md-4 border-right"><img src="https://excelrindia.b-cdn.net/data_science_course_training/assets/images/ajax-loader.gif" data-src="./assets/images/why/we_icon5.png" class="img-fluid lazy"></div>
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
                        <div class="col-4 col-md-4 border-right"><img src="https://excelrindia.b-cdn.net/data_science_course_training/assets/images/ajax-loader.gif" data-src="./assets/images/why/we_icon6.png" class="img-fluid lazy"></div>
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
                        <div class="col-4 col-md-4 border-right"><img src="https://excelrindia.b-cdn.net/data_science_course_training/assets/images/ajax-loader.gif" data-src="./assets/images/why/we_icon7.png" class="img-fluid lazy"></div>
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
                        <div class="col-4 col-md-4 border-right"><img src="https://excelrindia.b-cdn.net/data_science_course_training/assets/images/ajax-loader.gif" data-src="./assets/images/why/we_icon8.png" class="img-fluid lazy"></div>
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
                        <div class="col-4 col-md-4 border-right"><img src="https://excelrindia.b-cdn.net/data_science_course_training/assets/images/ajax-loader.gif" data-src="./assets/images/why/we_icon9.png" class="img-fluid lazy"></div>
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
                        <div class="col-4 col-md-4 border-right"><img src="https://excelrindia.b-cdn.net/data_science_course_training/assets/images/ajax-loader.gif" data-src="./assets/images/why/we_icon10.png" class="img-fluid lazy"></div>
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
                        <div class="col-4 col-md-4 border-right"><img src="https://excelrindia.b-cdn.net/data_science_course_training/assets/images/ajax-loader.gif" data-src="./assets/images/why/we_icon11.png" class="img-fluid lazy"></div>
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
                        <div class="col-4 col-md-4 border-right"><img src="https://excelrindia.b-cdn.net/data_science_course_training/assets/images/ajax-loader.gif" data-src="assets/images/why/we_icon12.png" class="img-fluid lazy"></div>
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
                     <img src="https://excelrindia.b-cdn.net/data_science_course_training/assets/images/ajax-loader.gif" data-src="./assets/images/Data_Science_IBM.png" class="img-fluid lazy">
                  </div>
                  <h5 class="text-blue text-center">IBM Certification</h5>
               </div>
                <div class="col-md-1">
               </div>
               <div class="col-md-3">
                  <div class="card">
                     <img src="https://excelrindia.b-cdn.net/data_science_course_training/assets/images/ajax-loader.gif" data-src="./assets/images/Steinbeis.jpg" class="img-fluid lazy">
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
      <script type="text/javascript" src="../data_science_course_training/validation.js"></script>
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
       <script type="text/javascript" src="../webengage/zopimandlazzy.js"></script>
   </body>
</html>