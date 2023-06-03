<div class="p-2 digitalpro bg_cover" style="background:#1C92EC">
         <div class="container pt-5 pb-4">
            <div class="banner_content">
               <h3 class="text-white text-center">Do you want to know how the Software Testing Course <span
                  class="hidden-xs"><br /></span>will be an excellent fit for your career?</h3>
               <div class="row justify-content-center">
                  <div class="col-md-5 form-group">
                     <div class="card mt-4">
                        <div class="card-header">
                           <h3 class="font-20 mb-0">Register for the webinar</h3>
                        </div>
                        <div class="card-body" style="min-height:auto">
                           <form name="formvalidate4" id="formvalidate4" method="post" action="thankyou.php">
                              <div class="form-group">
                                 <input type="text" ng-model="enq.name" name="name" id="name" placeholder="Name*"
                                    class="form-control" required />
                              </div>
                              <div class="form-group">
                                 <input type="email" ng-model="enq.email" placeholder="E-mail*" name="email" id="email"
                                    class="form-control" required />
                              </div>
                              <div class="form-group">
                                 <input type="text" ng-model="enq.mobile" placeholder="Mobile Number*" name="mobile"
                                    id="mobile" class="form-control" required />
                              </div>
                              <div style="clear:both"></div>
                              <div class="text-center"><button type="submit" name="curriculm" id="curriculm"
                                 class="btn btn-primary btn-round">Register</button></div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="bg-dark p-2">
         <p class="mb-0 text-white text-center">Copyright 2020 AchieversIT | All Rights Resrved</p>
      </div>
      <div id="onloadpopup" class="modal fade" role="dialog">
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
                  <h4 class="p-3 m-0 text-center">Register now C1</h4>
                  <form name="modalonload" id="modalonload" method="post" action="thankyou.php">
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
                        <input type="hidden" name="location" value="onloadpopup">
                        <input type="checkbox" name="terms" id="terms" checked required />
                        <span class="text-dark">I hereby accepting agree the <a
                           href="https://www.excelr.com/terms-and-conditions/" target="_blank">terms and conditions</a>
                        and <a href="https://www.excelr.com/privacy-policy/" target="_blank">privacy policy</a> of
                        AchieversIT</span>
                     </div>
                     <div style="clear:both"></div>
                     <div class="text-center mb-5" ng-show="processing==0">
                        <button type="submit" name="curriculm"
                        id="curriculm" class="btn btn-info btn-round">Register</button></div>
                     <h5 class="text-center mb-5" ng-show="processing==1">Please Wait...</h5>
                     <br /><br /><br /><br /><br />
                  </form>
               </div>
            </div>
         </div>
      </div>
      <div id="myModal" class="modal fade" role="dialog">
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
                  <h4 class="p-3 m-0 text-center">Register now C2</h4>
                  <form name="formvalidate2" id="formvalidate2 rightPanelRequestCallBackForm" action="thankyou.php" method="post">
                     <div class="form-group">
                        <input type="text" name="name" id="c2_user_name" placeholder="Name*"
                           class="form-control" required />
                     </div>
                     <div class="form-group">
                        <input type="email" placeholder="E-mail*" name="email" id="c2_user_email"
                           class="form-control" required />
                     </div>
                     <div class="form-group">
                        <input type="text" placeholder="Mobile Number*" name="mobile" id="c2_user_mobile"
                           class="form-control" required />
                     </div>
                     <div class="form-group">
                        <input type="hidden" name="location" value="courses_sidepanel_click">
                        <input type="checkbox" name="terms" id="terms" checked required />
                        <span class="text-dark">I hereby accepting agree the <a
                           href="https://www.excelr.com/terms-and-conditions/" target="_blank">terms and conditions</a>
                        and <a href="https://www.excelr.com/privacy-policy/" target="_blank">privacy policy</a> of
                        AchieversIT Solutions</span>
                     </div>
                     <div style="clear:both"></div>
                     <div class="text-center mb-5" ng-show="processing==0">
                        <button type="submit" name="curriculm"
                        id="rightPanelRequestCallBacks" class="btn btn-info btn-round">Register</button></div>
                     <h5 class="text-center mb-5" style="display:none" ng-show="processing==1">Please Wait...</h5>
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
                  <h4 class="p-3 m-0 text-center">Register now C3</h4>
                  <form name="formvalidate3" id="formvalidate3" method="post" action="thankyou.php">
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
                        <input type="hidden" name="location" value="footersection">
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
     <?php require_once('includes/footer-scripts.php') ?>
      <script type="text/javascript" src="./assets/js/validation.js"></script>
      <script type="text/javascript">
         $(window).scroll(function () {
            var scroll = $(window).scrollTop();
            if (scroll < 300) {
               $('.fixed-top').css('background', 'transparent');
            } else {
               $('.fixed-top').css('background', 'rgba(0, 0, 0, .8)');
            }
         });
         
         $('#myCarousel').carousel({
            interval: 2000
         })
         
         $('#myCarousel2').carousel({
            interval: 3000
         })
         
         $('.carousel .carousel-item').each(function () {
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
      <script type="text/javascript" src="./assets/js/zopimandlazzy.js"></script>
      <script>
         $("#rightPanelRequestCallBack").click(function(){
      
      let proceed = 0;
      let payload = {};
      let user_name = $("#c2_user_name");
      let user_name_val = user_name.val();
      if(user_name_val.trim().length == 0)
      {
         proceed++;
      } else {
         payload['user_name'] = user_name_val.trim();
      }

      let c2_user_email = $("#c2_user_email");
      let c2_user_email_val = c2_user_email.val();
      if(c2_user_email_val.trim().length == 0)
      {
         proceed++;
      } else {
         payload['user_email'] = c2_user_email_val.trim();
      }

      let c2_user_mobile = $("#c2_user_mobile");
      let c2_user_mobile_val = c2_user_mobile.val();
      if(c2_user_mobile_val.trim().length == 0)
      {
         proceed++;
      } else {
         payload['user_mobile'] = c2_user_mobile_val.trim();
      }
      if(proceed == 0)
      {
         let data = JSON.stringify(payload);
         const url = "recordRequest.php";
         let xhr = new XMLHttpRequest()
         xhr.open('POST', url, true)
         xhr.setRequestHeader('Content-type', 'application/json; charset=UTF-8')
         xhr.send(data);
         xhr.onload = function () {
             if(xhr.status === 200) {
                 console.log("Post successfully created!") 
             }
         }

      }
   });
      </script>
   </body>
</html>