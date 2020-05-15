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
if(isset($_POST['submit'])){
$drug_name=$_POST['drug_name'];
$Expiry_date=$_POST['Expiry_date'];
$Manufacturer=$_POST['Manufacturer'];
$supplier=$_POST['supplier'];
$quantity=$_POST['quantity'];
$cost=$_POST['cost'];
  
// get value of id that sent from address bar
$drug_name=$_POST['drug_name'];

// Retrieve data from database 
$sql="UPDATE stock SET drug_name='$drug_name',Expiry_date='$Expiry_date', Manufacturer='$Manufacturer',supplier='$supplier', cost='$cost' WHERE drug_name='$drug_name'";
if($sql>0) {
    header("location:admin.php");
} v      nuelse{
$message1="<font color=red>Update Failed, Try again</font>";
}}
?>
<!DOCTYPE html>
<html>
<head>
<title>Chem Home Pharmacy System</title>
<link rel="stylesheet" type="text/css" href="style/mystyle.css">
<link rel="stylesheet" href="style/style.css" type="text/css" media="screen" /> 
<script src="js/function.js" type="text/javascript"></script>
 <style>#left-column {height: 477px;}
 #main {height: 477px;}</style>
</head>
<body>
<div id="content">
<div id="header">
<h1><a href="#"><img src="hd_logo.jpg"></a>Chem Home Pharmacy System</h1></div>
<div id="left_column">
<div id="button">
<ul>
			<li><a href="admin.php">Dashboard</a></li>
			<li><a href="admin_pharmacist.php">Pharmacist</a></li>
			<li><a href="admin_cashier.php">Cashier</a></li>
            <li><a href="admin_manufacturer.php">Manufacturer</a></li>
            <li><a href="Drug_Store.php">Drug store</a></li>
			<li><a href="logout.php">Logout</a></li>
			
		</ul>	
</div>
		</div>
<div id="main">
<div id="tabbed_box" class="tabbed_box">  
    <h4>Manage stock</h4> 
<hr/>	
    <div class="tabbed_area">  
      
        <ul class="tabs">  
            <li><a href="javascript:tabSwitch('tab_1', 'content_1');" id="tab_1" class="active">Update stock</a></li>  
              
        </ul>  
          
        <div id="content_1" class="content">  
		
          <form name="myform" onsubmit="return validateForm(this);" action="update_Drug_store.php" method="post" >
			<table width="420" height="106" border="0" >	
				<tr><td align="center"><input name="drug_name" type="text" style="width:170px" placeholder="Drug_Name" id="drug_name" value="<?php include_once('connect.php'); echo $_GET['drug_name']?>" /></td></tr>  
				<tr><td align="center"><input name="Expiry_date" type="text" style="width:170px" placeholder="Expiry_Date" value="<?php include_once('connect.php'); echo $_GET['Expiry_date']?>" id="Expiry_date" /></td></tr>
				<tr><td align="center"><input name="Manufacturer" type="text" style="width:170px" placeholder="Manufacturer" id="Manufacturer" value="<?php include_once('connect.php'); echo $_GET['Manufacturer']?>" /></td></tr>
				<tr><td align="center"><input name="supplier" type="text" style="width:170px" placeholder="Supplier" id="supplier"value="<?php include_once('connect.php'); echo $_GET['supplier']?>" /></td></tr>
				<tr><td align="center"><input name="stock" type="submit" value="Update"/></td></tr>
            </table>
		</form>
		</div>  
    </div>  
</div>
</div>
<div id="footer" align="Center"> Pharmacy System 2020. Copyright All Rights Reserved</div>
</div>
</body>
</html>
