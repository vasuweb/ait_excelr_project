<?php
// recordRequest.php
// echo "<pre>";
print_r($_POST);
if(isset($_REQUEST['data']))
{
	print_r(json_decode($_REQUEST['data']));
	echo 123; die;
}
// header('Status: 200');
// echo json_encode($_POST);
echo json_encode($_POST);
die;
?>