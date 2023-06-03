$(document).ready(function(){

	let aitCourseNames = [
		"reactjs", 
		"angular", 
		"mern", 
		"ui-development", 
		"automation-testing", 
		"aws+devops", 
		"java-fullstack", 
		"python-fullstack"
	];

	let locationNames = [
		"bangalore", 
		"hyderabad"
	];

	let pageNames = [
			{"name":"reactjs", "pageLink":"reactjs_training_"},
			{"name":"angular", "pageLink":"angular_training_"},
			{"name":"mern", "pageLink":"mern_training_"},
			{"name":"ui-development", "pageLink":"ui-development_training_"},
			{"name":"automation-testing", "pageLink":"automation_testing_training_"},
			{"name":"java-fullstack", "pageLink":"java_fullstack_training_"},
			{"name":"aws+devops", "pageLink":"aws_training_"},
			{"name":"python-fullstack", "pageLink":"python_fullstack_training_"}
		];

	let requestBtnLocation = "";

/**
 * Method to validate & redirect user based on the course & location selected
 * Returns to new page (if request is valid, else stop on the index page only)
 */
$(".searchByCourseLocation").click(function(){
	let courseName = document.getElementById("courses");
	let selectedCourseName = courseName.options[courseName.selectedIndex].value;
	// alert(selectedCourseName);

	let location = document.getElementById("location");
	let locationName = location.options[location.selectedIndex].value;
	// alert(locationName)
	if((selectedCourseName.length > 0 && aitCourseNames.includes(selectedCourseName)) && (locationName.length > 0 && locationNames.includes(locationName)))
	{
		let pageLink = "";
		pageNames.forEach(pageData=>{
			if(pageData.name == selectedCourseName)
			{
				pageLink = pageData.pageLink+locationName+".php";
			}
		});
		window.open(pageLink, "_blank");
	}
});

function submitRequest()
{
	// let loginForm = document.getElementById("loginForm");

	// loginForm.addEventListener("submit", (e) => {
	//   e.preventDefault();

	//   let username = document.getElementById("username");
	//   let password = document.getElementById("password");

	//   if (username.value == "" || password.value == "") {
	//     alert("Ensure you input a value in both fields!");
	//   } else {
	//     // perform operation with form input
	//     alert("This form has been successfully submitted!");
	//     console.log(
	//       `This form has a username of ${username.value} and password of ${password.value}`
	//     );

	//     username.value = "";
	//     password.value = "";
	//   }
	// });
}

	$("#homePageRequestFormSubmitBtn").click(function(){
		// alert("Form submitted");
		// homePageRequestFormErrorMsg -- Form error message
		// homePageRequestForm -- Form name
		
		let callAjaxFlag = 0;
		let errorBorderCode = "1px solid red";
		let successBorderCode = "1px solid #ced4da";


		let errorMsgDiv 	= document.getElementById("homePageRequestFormErrorMsg");
		let userNameFld 	= $("#hp_username");//document.getElementById("hp_username");
		let userEmailFld 	= $("#hp_email");//document.getElementById("hp_email");
		let userMobileFld 	= $("#hp_mobile");//document.getElementById("hp_mobile");
		let userCourseFld 	= $("#hp_course");//document.getElementById("hp_course");
		let userCityFld 	= $("#hp_city");//document.getElementById("hp_city");

		// let uName = $("#hp_username").val();
		// alert(uName);

		//user name
		let userName = userNameFld.val();
		userName = userName.trim();
		if(userName.length == 0)
		{
			callAjaxFlag++;
			// userNameFld.style.border = errorBorderCode;
			userNameFld.css("border",errorBorderCode);
		} else {
			// userNameFld.style.border = successBorderCode;
			userNameFld.css("border",successBorderCode);
		}

		//email 
		let userEmail = userEmailFld.val();
		userEmail = userEmail.trim();
		var validRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;

		if(userEmail.length == 0 || !userEmail.match(validRegex))
		{
			callAjaxFlag++;
			userEmailFld.css("border",errorBorderCode);
			// userEmailFld.style.border = errorBorderCode;
		} else {
			userEmailFld.css("border",successBorderCode);
		}

		// Mobile
		let userMobile = userMobileFld.val();
		userMobile = userMobile.trim();
		if(userMobile.length == 0)
		{
			callAjaxFlag++;
			userMobileFld.css("border",errorBorderCode);
		} else {
			userMobileFld.css("border",successBorderCode);
		}

		//Course name
		let userCourse = userCourseFld.val();
		userCourse = userCourse.trim();
		if(userCourse.length == 0)
		{
			callAjaxFlag++;
			userCourseFld.css("border",errorBorderCode);
		} else {
			userCourseFld.css("border",successBorderCode);
		}

		//City name
		let userCity = userCityFld.val();
		userCity = userCity.trim();
		if(userCity.length == 0)
		{
			callAjaxFlag++;
			userCityFld.css("border",errorBorderCode);
		} else {
			userCityFld.css("border",successBorderCode);
		}

		if(callAjaxFlag == 0)
		{
			errorMsgDiv.innerHTML = "";
			let payload = {"userName":userName, "userMobile":userMobile, "userEmail":userEmail, "userCourse":userCourse,"userCity":userCity};


			//  e.preventDefault();
			$.ajax({
	            type: "POST",
	            url: 'recordRequest.php',
	            data: payload,
	            success: function(response)
	            {
	                var jsonData = JSON.parse(response);
	 				console.log(jsonData);
	           }
       		});

			/*
			if (window.XMLHttpRequest) {// code for IE7+, Firefox, Chrome, Opera, Safari
		        xmlhttp=new XMLHttpRequest();
		    } else {// code for IE6, IE5
		        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		    }

		    xmlhttp.onreadystatechange=function() {
		        if (xmlhttp.readyState == 4 && xmlhttp.status == 200){
		            // document.getElementById("txtName").innerHTML=xmlhttp.responseText;
		            alert("Success");
		        }
		    }

		    xmlhttp.open("POST","recordRequest.php", payload);
    		xmlhttp.send();
    		*/


		} else {
			errorMsgDiv.innerHTML = "Please fill in the fields highlighted in <b>red</b> border.";
		}

	});


	$(".sideRequest").click(function(){
		requestBtnLocation = "Clicked on Request A Callback from Side Panel";		
	});

	$(".desktopRequestBtn").click(function(){
		requestBtnLocation = "Desktop - Clicked on Request A Callback from footer";
	});

	$(".mobileRequestBtn").click(function(){
		requestBtnLocation = "Mobile - Clicked on Request A Callback from footer";		
	});

	
	

});
