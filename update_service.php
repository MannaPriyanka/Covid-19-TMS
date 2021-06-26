

<?php session_start();
//DB conncetion
include_once('includes/config.php');
error_reporting(0);
//validating Session
if (strlen($_SESSION['aid']==0)) {
  header('location:logout.php');
  } else{

//Code for record deletion
   
$id=$_GET['id'];
$ver=$_GET['verify'];   
$res_type=$_GET['res_type']; 
$req_no=$_GET['req_no'];
$pno=$_GET['pno'];
$query=mysqli_query($con, "update `corona_resource` set `verified`='$ver' where id='$id'");

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://www.fast2sms.com/dev/bulkV2?authorization=x6Ffv48rchwDnPAyigBXaUSROQWNGZLKJ07MseuHjTo9EIbtz5Bcr5Qbkaf9XoW7Nj2xthnKGMu0AOVz&sender_id=TXTIND&message=".urlencode('DEAR USER ,THIS IS FROM COVID-19 180 DEGREE  Your Request for '.$res_type.' Service of Request Number '.$req_no.'have been'.$_GET['type'].' Contact Admin for more information.')."&route=v3&numbers=".urlencode($pno),
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
 echo '<script>alert("Record updated")</script>';
  echo "<script>window.location.href='manage-service.php'</script>";
}








}
?>