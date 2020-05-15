<?php
if(isset($_POST['prescription'])){
  $con = mysqli_connect('localhost', 'root','', 'testdb');  
$customer_id= mysqli_real_escape_string($con, $_POST['customer_id']);    
$sustomer_name = mysqli_real_escape_string($con, $_POST['Customer_name']);    
$Age = mysqli_real_escape_string($con, $_POST['Age']);    
$Gender = mysqli_real_escape_string($con, $_POST['Gender']);    
$Phone= mysqli_real_escape_string($con, $_POST['Phone']);
$drug name= mysqli_real_escape_string($con, $_POST['drug name']); 
$strength= mysqli_real_escape_string($con, $_POST['strength']); 
$dose= mysqli_real_escape_string($con, $_POST['dose']); 
$quantity= mysqli_real_escape_string($con, $_POST['quantity']); 
/*$sql1=mysqli_query($con,"SELECT * FROM prescription WHERE username='$username'")or die(mysqli_connect_error());
 $result=mysqli_fetch_array($sql1);
if($result>0){
$message="<font color=blue>sorry the username entered already exists</font>";
 }else{*/
$sql= "INSERT INTO prescription(customer_id, first_name, last_name, username, password)
values ('$id','$first_name','$last_name','$username','$password')";
mysqli_query($con, $sql);    
/*$sql=mysqli_query($con,"INSERT INTO cashier(id,first_name,last_name,username,password)
VALUES('$id','$first_name','$last_name','$username','$password',NOW())");
*/
//if($sql>0) {
    header("location:stock_pharmacist.php");
//}else{
//$message1="<font color=red>Registration Failed, Try again</font>";
//}
	}
?>