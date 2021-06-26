<?php session_start();
//DB conncetion
include_once('includes/config.php');
//error_reporting(0);
//validating Session

if(isset($_POST['submit'])){

//getting post values
$pname=$_POST['pname'];
$pid=$_POST['pid'];
$sid=$_POST['sid'];
$title=$_POST['title'];
$serv_desc=$_POST['desc'];
$phone=$_POST['phone'];
$sms_check=$_POST['sms'];

$addno= mt_rand(100000000, 999999999);
$compfile=$_FILES["compfile"]["name"];
move_uploaded_file($_FILES["compfile"]["tmp_name"],"PATIENT_PRESCRIPTION/".$_FILES["compfile"]["name"]);
$desc=$_POST['desc'];


$query="INSERT INTO `patient_record`(`reg_no`,`patient_name`, `patient_id`, `patient_phone`, `sms`, `staff_id`, `prescription_file`, `extra_note`)VALUES('$addno','$pname','$pid','$phone','$sms_check','$sid','$compfile','$desc')";
$result = mysqli_multi_query($con, $query);
if ($result) {
echo '<script>alert("Your Patient Record submitted successfully. Record number is "+"'.$addno.'")</script>';
  echo "<script>window.location.href='dashboard.php'</script>";
} 
else {
    echo "<script>alert('Something went wrong. Please try again.');</script>";  
echo "<script>window.location.href='dashboard.php'</script>";
}



}


?>