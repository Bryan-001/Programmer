<?php session_start(); ?>

<?php
if(!isset($_SESSION['valid'])) {
	header('Location: admin_pharmacist.php');
}
?>

<?php
//including the database connection file
include("connect.php");

//getting id of the data from url
$id = $_GET['Username'];

//deleting the row from table
$result=mysqli_query($mysqli, "DELETE FROM user WHERE Username=$Username");

//redirecting to the display page (view.php in our case)
header("Location:view.php");
?>
