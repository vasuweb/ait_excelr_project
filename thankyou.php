<?php
echo "<pre>";
// echo $_SERVER['HTTP_REFERER'];
print_r($_POST);
die;
if(isset($_POST)){

	$servername = "localhost";
	$username = "";
	$password = "";
	$dataBase = "ait_excelr";

 	define("DB_HOST", "localhost");
    define("DB_USER", "root");
    define("DB_PASSWORD", "");
    define("DB_DATABASE", "ait_excelr");

    $mysqlConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);

	$ip = $_SERVER['REMOTE_ADDR'];
	// Create connection
	// $mysqlConn = mysqli_connect($servername, $username, $password, $dataBase);
	
	if ($mysqlConn) {
	  // die("Connection failed: " . $conn->connect_error);

	} else {
		$previousPath = $_SERVER['HTTP_REFERER'];
		$urlArr = explode("/", $previousPath);
		$fileName = $urlArr[count($urlArr)-1];
		// $fileName = str_ireplace(".php", $fileName);

		$enquiry_name = "'".trim($_POST['name'])."'";
		$enquiry_email = "'".trim($_POST['email'])."'";
		$enquiry_mobile = "'".trim($_POST['mobile'])."'";
		$enquiry_course = (isset($_POST['course'])) ? "'".trim($_POST['course'])."'" : "''";
		$enquiry_city = (isset($_POST['city'])) ? "'".trim($_POST['city'])."'" : "''";
		$enquiry_from_page = "'".$fileName."'";
		$enquiry_popup_location = (isset($_POST['location'])) ? "'".trim($_POST['location'])."'":"''";
		$enquiry_ip_address = "'".$ip."'";
		$enquiry_dts = "'".date("Y-m-d H:i:s")."'";

		$sql = "INSERT INTO `user_enquiry`(`enquiry_name`, `enquiry_email`, `enquiry_mobile`, `enquiry_course`, `enquiry_city`, `enquiry_from_page`, `enquiry_popup_location`, `enquiry_ip_address`, `enquiry_dts`) VALUES ($enquiry_name,$enquiry_email,$enquiry_mobile,$enquiry_course,$enquiry_city,$enquiry_from_page, $enquiry_popup_location,$enquiry_ip_address,$enquiry_dts)";

		$inserted = mysqli_query($mysqlConn, $sql);
		if ($inserted) {
		  // echo "New record created successfully";
		} else {
		  // echo "Error: " . $sql . "<br>" . $mysqlConn->error;
		}

		// $mysqlConn->close();
	}

	// echo "<pre>";
	// print_r($_POST);
	die;
}

// require_once('includes/header.php');

?>


<h1>Thank you</h1>

<?php 
// require_once('includes/footer.php');
?>