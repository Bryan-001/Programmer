<?php
if(isset($_POST['pharmacist'])){
    
  $con = mysqli_connect('localhost', 'root','', 'testdb');  
$id= mysqli_real_escape_string($con, $_POST['id']);    
$first_name = mysqli_real_escape_string($con, $_POST['first_name']);    
$last_name = mysqli_real_escape_string($con, $_POST['last_name']);    
$username = mysqli_real_escape_string($con, $_POST['username']);    
$password = mysqli_real_escape_string($con, $_POST['password']);    
/*$sql1=mysqli_query($con,"SELECT * FROM pharmacist WHERE username='$username'")or die(mysqli_connect_error());
 $result=mysqli_fetch_array($sql1);
if($result>0){
$message="<font color=blue>sorry the username entered already exists</font>";
 }else{*/
$sql= "INSERT INTO pharmacist(id, first_name, last_name, username, password)
values ('$id','$first_name','$last_name','$username','$password')";
mysqli_query($con, $sql);    
/*$sql=mysqli_query($con,"INSERT INTO pharmacist(id,first_name,last_name,username,password)
VALUES('$id','$first_name','$last_name','$username','$password',NOW())");
*/
//if($sql>0) {
    header("location:admin_pharmacist.php");
//}else{
//$message1="<font color=red>Registration Failed, Try again</font>" ;
//}
	}
?>