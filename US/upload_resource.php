<?php session_start();
//DB conncetion
include_once('includes/config.php');
//error_reporting(0);
//validating Session

if(isset($_POST['submit'])){

//getting post values
$res_type=$_POST['type'];
$state=$_POST['state'];
$city=$_POST['city'];
$title=$_POST['title'];
$serv_desc=$_POST['desc'];
$phone=$_POST['phone'];
$sms_check=$_POST['sms'];
$alt_phone=$_POST['al_phone'];
$reqno= mt_rand(100000000, 999999999);
$email=$_POST['email'];
$google_location= $_POST['loc'];

$query="INSERT INTO `corona_resource` (`req_no`,`res_type`, `state`, `city`, `title`, `serv_desc`, `phone`, `sms_check`, `alt_phone`, `email`, `google_location`)VALUES('$reqno','$res_type','$state','$city','$title','$serv_desc','$phone','$sms_check','$alt_phone','$email','$google_location')";
$result = mysqli_multi_query($con, $query);
if ($result) {
echo '<script>alert("Your test request submitted successfully. request number is "+"'.$reqno.'")</script>';
  echo "<script>window.location.href='add-resource.php'</script>";
} 
else {
    echo "<script>alert('Something went wrong. Please try again.');</script>";  
echo "<script>window.location.href='add-resource.php'</script>";
}



}


?>