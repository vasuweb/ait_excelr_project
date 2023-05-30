<div class="mainbanner">
		<div class="container h-100">
			
			<div class="row align-items-center h-100">
				<div class="col-md-12 mx-auto">
					<div class="bannertitle1">We don't just TRAIN</div>
					<div class="bannertitle2">We build CAREERS</div>
          <div class="row">
            <div class="col-md-6">
              <div class="selectsrh fright d-flex">
                <div class="btn btn-primary selectbtn">I’m looking for</div>
                <div class="bannerslt" ng-init="course='Data Science'">
                  <select ng-model="course" class="form-control" required id="courses">  
                    <!--<option value="">Select Course</option> -->
                    <option value="reactjs">React Js</option>
                    <option value="angular">Angular</option>
                    <option value="mern">MERN</option>
                    <option value="ui-development">UI Development</option>
                    <option value="automation-testing">Automation Testing</option>
                    <option value="aws+devops">AWS + DevOps</option>
                    <option value="java-fullstack">Java - Fullstack</option>
                    <option value="python-fullstack">Python - Fullstack</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="selectsrh d-flex">
                <div class="btn btn-primary selectbtn">My location is</div>
                <div class="bannerslt" ng-init="location='Bangalore'">
                  <select ng-model="location" class="form-control" required id="location">  
                    <!--<option value="">Select Location</option> -->
                    <option value="bangalore">Bangalore</option>
                    <option value="hyderabad">Hyderabad</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
					<div class="text-center">
						<button class="btn btn-primary bannerbtn mr-2 searchByCourseLocation">Search</button>
              <button type="submit" data-toggle="modal" data-target="#myModal" class="btn btn-primary bannerbtn hidden-xs">Enquire Now</button>
					</div>
				</div>
			</div>		
		</div>
	</div>