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
	 
 
 $curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://www.fast2sms.com/dev/bulkV2?authorization=izcLHXI5Y8PQkBxCElKteT04WjVqANS7fOvdy6JaDM3mrRphuo2aOthIdP9sBuwXrib35xQTmZ6jHVUf&sender_id=TXTIND&message=".urlencode('DEAR USER ,This Message is from COVID-19 180 DEGREE  Your Request Number for '.$res_type. ' Service is'.$reqno.'')."&route=v3&numbers=".urlencode($phone),
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_SSL_VERIFYHOST => 0,
  CURLOPT_SSL_VERIFYPEER => 0,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "cache-control: no-cache"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo '<script>alert("Your test request submitted successfully. request number is "+"'.$reqno.'")</script>';
  echo "<script>window.location.href='add-resource.php'</script>";
   //echo $response;
  
}
 
 
 
} 
	
	
	
	
	


  
 
else {
    echo "<script>alert('Something went wrong. Please try again.');</script>";  
echo "<script>window.location.href='add-resource.php'</script>";
}



}


?>