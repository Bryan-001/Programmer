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
$id=$_POST['id'];
$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$username=$_POST['username'];
$password=$_POST['password'];
 
// get value of id that sent from address bar
$username=$_POST['username'];

// Retrieve data from database 
$sql="UPDATE cashier SET id='$id',first_name='$first_name', last_name='$last_name',username='$username', password='$password' WHERE username='$username'";
if($sql>0) {
    header("location:admin.php");
}else{
$message1="<font color=red>Update Failed, Try again</font>";
}}
?>
<!DOCTYPE html>
<html>
<head>
<title><?php echo $username;?> -Chem Home Pharmacy System</title>
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
    <h4>Manage Users</h4> 
<hr/>	
    <div class="tabbed_area">  
      
        <ul class="tabs">  
            <li><a href="javascript:tabSwitch('tab_1', 'content_1');" id="tab_1" class="active">Update User</a></li>  
              
        </ul>  
          
        <div id="content_1" class="content">  
		
          <form name="myform" onsubmit="return validateForm(this);" action="update_cashier.php" method="post" >
			<table width="420" height="106" border="0" >	
				<tr><td align="center"><input name="id" type="text" style="width:170px" placeholder="ID" id="id" value="<?php include_once('connect.php'); echo $_GET['id']?>" /></td></tr>  
				<tr><td align="center"><input name="first_name" type="text" style="width:170px" placeholder="First Name" value="<?php include_once('connect.php'); echo $_GET['first_name']?>" id="first_name" /></td></tr>
				<tr><td align="center"><input name="last_name" type="text" style="width:170px" placeholder="Last Name" id="last_name" value="<?php include_once('connect.php'); echo $_GET['last_name']?>" /></td></tr>
				<tr><td align="center"><input name="username" type="text" style="width:170px" placeholder="Username" id="username"value="<?php include_once('connect.php'); echo $_GET['username']?>" /></td></tr>
				<tr><td align="center"><input name="password" placeholder="Password" id="password"value="<?php include_once('connect.php'); echo $_GET['password']?>"type="password" style="width:170px"/></td></tr>
				<tr><td align="center"><input name="submit" type="submit" value="Update"/></td></tr>
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
