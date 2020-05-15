<?php
if(isset($_POST['prescription'])){
  $con = mysqli_connect('localhost', 'root', '', 'testdb');
   
$customer_name = mysqli_real_escape_string($con, $_POST['customer_name']);    
$age = mysqli_real_escape_string($con, $_POST['age']);    
$gender = mysqli_real_escape_string($con, $_POST['gender']);    
$phone = mysqli_real_escape_string($con, $_POST['phone']); 
$drug_name = mysqli_real_escape_string($con, $_POST['drug_name']); 
$strength = mysqli_real_escape_string($con, $_POST['strength']); 
$dose = mysqli_real_escape_string($con, $_POST['dose']); 
$quantity = mysqli_real_escape_string($con, $_POST['quantity']); 
    
    
$sql= "INSERT INTO prescription(customer_name, age, gender, phone,drug_name,strength,dose,quantity)
values ('$customer_name','$age','$gender','$phone','$drug_name','$strength','$dose','$quantity')";
mysqli_query($con, $sql);  
    
    header("location:prescription.php");
}
?>