<div class="footerdiv">
    <div class="container">
      <div class="text-center hidden-xs">
        <ul class="implinks">
          <li><a href="" data-toggle="modal" data-target="#myModal" class="mobileRequestBtn"><i class="fa fa-envelope-o" aria-hidden="true"></i> Drop A Query</a></li>
          <li><a href="" data-toggle="modal" data-target="#myModal" class="mobileRequestBtn"><i class="fa fa-mobile"></i> Request A Callback</a></li>
          <li><a href=""><i class="fa fa-phone"></i>  +91 8217268018</a></li>
        </ul>
      </div>
      <div class="text-center hidden-lg">
        <div class="termsandcds mt-0">
          <a href="" data-toggle="modal" data-target="#myModal" class="desktopRequestBtn"><i class="fa fa-envelope-o" aria-hidden="true"></i> Drop A Query</a>
          <a href="" data-toggle="modal" data-target="#myModal" class="desktopRequestBtn"><i class="fa fa-mobile"></i> Request A Callback</a></li>
        </div>
        <div class="termsandcds mb-3">
          <a href=""><i class="fa fa-phone"></i>  +91 8217268018</a>
          </div>
      </div>
      <div class="row hidden-xs">
        <div class="col-md-6">
          <ul class="termsandcds">
            <li><a href="https://www.excelr.com/terms-and-conditions/">Terms And Conditions</a></li>
            <li>|</li>
            <li><a href="https://www.excelr.com/privacy-policy/">Privacy Policy</a></li>
            <li>|</li>
            <li><a href="https://www.excelr.com/refund-policy/">Refund Policy</a></li>
          </ul>
        </div>
        <div class="col-md-6">
          <ul class="sociallinks float-right">
            <li><a href="https://www.facebook.com/ExcelR/"><img src="./assets/images/socialmedia/FB-01.svg"></a></li>
            <li><a href="https://www.instagram.com/excelrsolutions/"><img src="./assets/images/socialmedia/insta-01.svg"></a></li>
            <li><a href="https://twitter.com/ExcelrS"><img src="./assets/images/socialmedia/Twitter-01.svg"></a></li>
            <li><a href="https://www.linkedin.com/company/excelr-solutions"><img src="./assets/images/socialmedia/in-01.svg"></a></li>
            <li><a href="https://www.youtube.com/c/ExcelRSolutionsRaisingExcellence"><img src="./assets/images/socialmedia/youtube-01.svg"></a></li>
          </ul>
        </div>
      </div>
      <div class="hidden-lg">
        <div class="text-center">
          <ul class="sociallinks">
            <li><a href="https://www.facebook.com/ExcelR/"><img src="./assets/images/socialmedia/FB-01.svg"></a></li>
            <li><a href="https://www.instagram.com/excelrsolutions/"><img src="./assets/images/socialmedia/insta-01.svg"></a></li>
            <li><a href="https://twitter.com/ExcelrS"><img src="./assets/images/socialmedia/Twitter-01.svg"></a></li>
            <li><a href="https://www.linkedin.com/company/excelr-solutions"><img src="./assets/images/socialmedia/in-01.svg"></a></li>
            <li><a href="https://www.youtube.com/c/ExcelRSolutionsRaisingExcellence"><img src="./assets/images/socialmedia/youtube-01.svg"></a></li>
          </ul>
        </div>
          <div class="termsandcds">
            <a href="https://www.excelr.com/terms-and-conditions/">Terms And Conditions</a></li>
            <a href="https://www.excelr.com/terms-and-conditions/">|</a>
            <a href="https://www.excelr.com/privacy-policy/">Privacy Policy</a>
          </div>
          <div class="termsandcds mt-1">
            <li><a href="https://www.excelr.com/refund-policy/">Refund Policy</a></li>
          </div>
      </div>
    </div>
  </div>


  <!-- <script>
         setTimeout(function() {
         $('#myModal').modal();
         }, 30000);
      </script> -->
<div id="myModal" class="modal fade" role="dialog">
         <div class="modal-dialog">
            <div class="modal-content" style="background:url(https://excelrindia.b-cdn.net/data_science_course_training/assets/images/quickenquiry_bg.jpg) #ffffff bottom no-repeat;">
               <button type="button" class="close" style="position: absolute; right: 20px; top: 20px;" data-dismiss="modal">&times;</button>
               <div class="text-center">
                  <img src="https://excelrindia.b-cdn.net/data_science_course_training/assets/images/logo_web.png" height="60" class="p-2">
                  <hr class="m-0" />
               </div>
               <div class="modal-body pt-0">
                  <h4 class="p-3 m-0 text-center">Register now 1</h4>
                  <!-- <h5 class="text-center text-success">{{success}}</h5> -->
                  <span class="text-center text-danger" id="homePageRequestFormErrorMsg"></span>
                  <form name="homePageRequestForm"  method="post">
                     <div class="form-group">
                        <input type="text" ng-model="enq.name" name="name" id="hp_username" placeholder="Name*" class="form-control" required/>
                     </div>
                     <div class="form-group">
                        <input type="email" ng-model="enq.email" placeholder="E-mail*" name="email" id="hp_email" class="form-control" required/>
                     </div>
                     <div class="form-group">
                        <input type="text" ng-model="enq.mobile" placeholder="Mobile Number*" name="mobile" id="hp_mobile" class="form-control" required/>
                     </div>
                     <div class="form-group">
                        <input type="text" ng-model="enq.course" name="course" id="hp_course" placeholder="Course*" class="form-control" required/>
                     </div>
                     <div class="form-group">
                        <input type="text" ng-model="enq.city" name="city" id="hp_city" placeholder="City*" class="form-control" required/>
                     </div>
                     <div class="form-group">
                        <input type="checkbox" name="terms" id="terms" checked required/>
                        <span class="text-dark">I hereby accepting agree the <a href="https://www.excelr.com/terms-and-conditions/" target="_blank">terms and conditions</a> and <a href="https://www.excelr.com/privacy-policy/" target="_blank">privacy policy</a> of AIT ExcelR Solutions</span>
                     </div>
                     <div style="clear:both"></div>
                     <div class="text-center mb-5">
                        <button type="button" name="curriculm" id="homePageRequestFormSubmitBtn" class="btn btn-info btn-round">Register</button></div>
                     <br /><br /><br /><br /><br />
                  </form>
               </div>
            </div>
         </div>
      </div>
      <div id="classroom" class="modal fade" role="dialog">
         <div class="modal-dialog">
            <div class="modal-content"
               style="background:url(https://excelrindia.b-cdn.net/data_science_course_training/assets/images/quickenquiry_bg.jpg) #ffffff bottom no-repeat;">
               <button type="button" class="close" style="position: absolute; right: 20px; top: 20px;"
                  data-dismiss="modal">&times;</button>
               <div class="text-center">
                  <img src="https://www.achieversit.com/assets/images/logo-white.png" height="60" class="p-2">
                  <hr class="m-0" />
               </div>
               <div class="modal-body pt-0">
                  <h4 class="p-3 m-0 text-center">Register now 2</h4>
                  <form name="formvalidate3" id="formvalidate3" method="post">
                     <div class="form-group">
                        <input type="text" ng-model="enq.name" name="name" id="name" placeholder="Name*"
                           class="form-control" required />
                     </div>
                     <div class="form-group">
                        <input type="email" ng-model="enq.email" placeholder="E-mail*" name="email" id="email"
                           class="form-control" required />
                     </div>
                     <div class="form-group">
                        <input type="text" ng-model="enq.mobile" placeholder="Mobile Number*" name="mobile" id="mobile"
                           class="form-control" required />
                     </div>
                     <div class="form-group">
                        <input type="checkbox" name="terms" id="terms" checked required />
                        <span class="text-dark">I hereby accepting agree the <a
                           href="https://www.excelr.com/terms-and-conditions/" target="_blank">terms and conditions</a>
                        and <a href="https://www.excelr.com/privacy-policy/" target="_blank">privacy policy</a> of
                        AchieversIT</span>
                     </div>
                     <div style="clear:both"></div>
                     <div class="text-center mb-5" ng-show="processing==0"><button type="submit" name="curriculm"
                        id="curriculm" class="btn btn-info btn-round">Register</button></div>
                     <h5 class="text-center mb-5" ng-show="processing==1">Please Wait...</h5>
                     <br /><br /><br /><br /><br />
                  </form>
               </div>
            </div>
         </div>
      </div>
      <div id="onloadmodel" class="modal fade" role="dialog">
         <div class="modal-dialog">
         <div class="modal-content" style="background:url(https://excelrindia.b-cdn.net/data_science_course_training/assets/images/quickenquiry_bg.jpg) #ffffff bottom no-repeat;">
               <button type="button" class="close" style="position: absolute; right: 20px; top: 20px;" data-dismiss="modal">&times;</button>
               <div class="text-center">
                  <img src="https://excelrindia.b-cdn.net/data_science_course_training/assets/images/logo_web.png" height="60" class="p-2">
                  <hr class="m-0" />
               </div>
               <div class="modal-body pt-0">
                  <h4 class="p-3 m-0 text-center">Register now 3</h4>
                  <h5 class="text-center text-success">{{success}}</h5>
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
                     <div class="text-center mb-5"><button type="submit" name="curriculm" id="curriculm" class="btn btn-info btn-round">Register</button></div>
                     <br /><br /><br /><br /><br />
                  </form>
               </div>
            </div>
         </div>
      </div>      
      <?php require_once('includes/footer-scripts.php') ?>
      <script type="text/javascript" src="./assets/js/validation.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
	  <!-- swipe start -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.touchswipe/1.6.19/jquery.touchSwipe.min.js"></script>
<script type="text/javascript">
// $('.Count').each(function () {
//   var $this = $(this);
//   jQuery({ Counter: 0 }).animate({ Counter: $this.text() }, {
//     duration: 5000,
//     easing: 'swing',
//     step: function () {
//       $this.text(Math.ceil(this.Counter));
//     }
//   });
// });
$(function () {
    function isScrolledIntoView($elem) {
        var docViewTop = $(window).scrollTop();
        var docViewBottom = docViewTop + $(window).height();
        var elemTop = $elem.offset().top;
        var elemBottom = elemTop + $elem.height();
        return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
    }

    function count($this) {
        var current = parseInt($this.html(), 10);
        if (isScrolledIntoView($this) && !$this.data("isCounting") && current < $this.data('count')) {
            $this.html(++current);
            $this.data("isCounting", true);
            setTimeout(function () {
                $this.data("isCounting", false);
                count($this);
            }, 1);
        }
    }

    $(".numbercounter").each(function () {
        $(this).data('count', parseInt($(this).html(), 10));
        $(this).html('0');
        $(this).data("isCounting", false);
    });

    function startCount() {
        $(".numbercounter").each(function () {
            count($(this));
        });
    };

    $(window).scroll(function () {
        startCount();
    });

    startCount();
});
    $(".carousel").swipe({
        swipe: function (event, direction, distance, duration, fingerCount, fingerData) {
            if (direction == 'left') $(this).carousel('next');
            if (direction == 'right') $(this).carousel('prev');
        },
        allowPageScroll: "vertical" 
    });

	$('#myCarousel').carousel({
		interval: 3000,
		wrap: false
	});
	$('#myCarousel').on('slide.bs.carousel', function (e) {
	
		//update progress
		var step = $(e.relatedTarget).data('step');
		var percent = (parseInt(step) / totalSteps) * 100;
		
		$('.progress-bar').css({width: percent + '%'});
		// $('.progress-bar').text("Step " + step);
	
	})
	
	$('.recommended-courses').slick({
        dots: false,
        infinite: true,
        speed: 800,
        autoplay: true,
        autoplaySpeed: 5000,
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows: true,
        responsive: [
        {
          breakpoint: 1200,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
          }
        },
        {
          breakpoint: 992,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 576,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
        ]
    });
	$('.testimonial-slied').slick({
        dots: true,
        infinite: true,
        speed: 800,
        autoplay: true,
        autoplaySpeed: 5000,
        slidesToShow: 2,
        slidesToScroll: 1,
        arrows: false,
        responsive: [
        {
          breakpoint: 1200,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
          }
        },
        {
          breakpoint: 992,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 576,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
        ]
    });
	
	$('.our-partners').slick({
        dots: false,
        infinite: true,
        speed: 800,
        autoplay: true,
        autoplaySpeed: 5000,
        slidesToShow: 6,
        slidesToScroll: 1,
        arrows: true,
        responsive: [
        {
          breakpoint: 1200,
          settings: {
            slidesToShow: 5,
            slidesToScroll: 1,
          }
        },
        {
          breakpoint: 992,
          settings: {
            slidesToShow: 4,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 576,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1
          }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
        ]
    });

</script>
   </body>
</html>