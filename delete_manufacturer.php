<?php
session_start();
include_once('connect.php');
if(isset($_SESSION['username'])){
$id=$_SESSION['admin_id'];
$username=$_SESSION['username'];
}else{
header("location:index.php");
exit();
}
$id=$_GET[pharmacist_id];
$sql="DELETE * from manufacturer where manufacturer_id='$id'";
mysqli_query($sql);
//$rows=mysql_fetch_assoc($result);
header("location:admin_manufacturer.php");
?>


