<?php
if(isset($_POST['stock'])){
  $con = mysqli_connect('localhost', 'root','', 'testdb');  
    
$drug_name= mysqli_real_escape_string($con, $_POST['drug_name']);    
$Expiry_date = mysqli_real_escape_string($con, $_POST['Expiry_date']);    
$Manufacturer = mysqli_real_escape_string($con, $_POST['Manufacturer']);    
$supplier = mysqli_real_escape_string($con, $_POST['supplier']);    
$quantity = mysqli_real_escape_string($con, $_POST['quantity']);
$cost = mysqli_real_escape_string($con, $_POST['cost']);
    
$sql= "INSERT INTO stock(drug_name, Expiry_date, Manufacturer, supplier,quantity,cost)
values ('$drug_name','$Expiry_date','$Manufacturer','$supplier','$quantity','$cost')";
mysqli_query($con, $sql);    

//if($sql>0) {
    header("location:stock_pharmacist.php");
//}else{
//$message1="<font color=red>Registration Failed, Try again</font>";
//}
	}
?>