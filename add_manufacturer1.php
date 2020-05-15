<?php
if(isset($_POST['manufacturer'])){
  $con = mysqli_connect('localhost', 'root', '', 'testdb');
    
$id= mysqli_real_escape_string($con, $_POST['id']);    
$first_name = mysqli_real_escape_string($con, $_POST['first_name']);    
$last_name = mysqli_real_escape_string($con, $_POST['last_name']);    
$company_name = mysqli_real_escape_string($con, $_POST['company_name']); 
    
    
$sql= "INSERT INTO manufacturer(id, first_name, last_name, company_name)
values ('$id','$first_name','$last_name','$company_name')";
mysqli_query($con, $sql);  
    
    header("location:admin_manufacturer.php");
}
?>