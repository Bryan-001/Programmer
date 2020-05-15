<?php
session_start();
include_once('connect.php');
if(isset($_SESSION['username'])){
$id=$_SESSION['admin_id'];
$user=$_SESSION['username'];
}else{
header("location:index.php");
exit();
}
?>
<!DOCTYPE html>
<html>
<head>
<title><?php echo $user;?> -hem Home Pharmacy System</title>
<link rel="stylesheet" type="text/css" href="style/mystyle.css">
<link rel="stylesheet" href="style/style.css" type="text/css" media="screen" /> 
<link rel="stylesheet" type="text/css" href="style/dashboard_styles.css"  media="screen" />
<script src="js/function.js" type="text/javascript"></script>
<style>
#left_column{
height: 470px;
}

</style>
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
            <li><a href="admin_manufacturer.php">manufacturer</a></li>
            <li><a href="Drug_Store.php">Drug store</a></li>
			<li><a href="logout.php">Logout</a></li>
		</ul>	
</div>
		</div>
<div id="main">
    
 <!-- Dashboard icons -->
            <div class="grid_7">
            	<a href="admin.php" class="dashboard-module">
                	<img src="admin_icon.jpg" width="75" height="75" alt="edit" />
                	<span>Dashboard</span>
                </a>
                <a href="admin_pharmacist.php" class="dashboard-module">
                	<img src="pharmacist_icon.jpg"  width="75" height="75" alt="edit" />
                	<span>Pharmacist</span>
                </a>
                
                  
                <a href="admin_cashier.php" class="dashboard-module">
                	<img src="cashier_icon.jpg" width="75" height="75" alt="edit" />
                	<span>Cashier</span>
                    
                    <a href="admin_manufacturer.php" class="dashboard-module">
                	<img src="manufacturer.jpg" width="75" height="75" alt="edit" />
                	<span>Manufacturer</span>
                
                </a>
                 <a href="Drug_Store.php" class="dashboard-module">
                	<img src="drug-store.jpg" width="75" height="75" alt="edit" />
                	<span>Drug store</span>
                </a>	
            	

            	
			</div>
</div>
<div id="footer" align="Center"> Pharmacy System 2020. Copyright All Rights Reserved</div>
</div>
</body>
</html>
