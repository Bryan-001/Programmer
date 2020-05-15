<?php
if(isset($_POST['cashier'])){
  $con = mysqli_connect('localhost', 'root', '', 'testdb');
    
$id= mysqli_real_escape_string($con, $_POST['id']);    
$first_name = mysqli_real_escape_string($con, $_POST['first_name']);    
$last_name = mysqli_real_escape_string($con, $_POST['last_name']);    
$username = mysqli_real_escape_string($con, $_POST['username']);    
$password = mysqli_real_escape_string($con, $_POST['password']); 
    
    
$sql= "INSERT INTO cashier(id, first_name, last_name, username, password)
values ('$id','$first_name','$last_name','$username','$password')";
mysqli_query($con, $sql);  
    
    header("location:admin_cashier.php");
}
?>