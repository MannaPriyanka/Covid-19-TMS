

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
$query=mysqli_query($con, "update `corona_resource` set `verified`='$ver' where id='$id'");
echo '<script>alert("Record updated")</script>';
  echo "<script>window.location.href='manage-service.php'</script>";
}
?>