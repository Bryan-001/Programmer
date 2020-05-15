<?php
session_start();
include_once('connect.php');
if(isset($_SESSION['username'])){
$id=$_SESSION['admin_id'];
$username=$_SESSION['username'];
}else{
header("location:index.php");
exit();
}?>
<!DOCTYPE html>
<html>
<head>
<title><?php echo $user;?> -Chem Home Pharmacy System</title>
<link rel="stylesheet" type="text/css" href="style/mystyle.css">
<link rel="stylesheet" href="style/style.css" type="text/css" media="screen" /> 
<link rel="stylesheet" href="style/table.css" type="text/css" media="screen" /> 
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
            <li><a href="admin_manufacturer.php">manufacturer</a></li>
            <li><a href="Drug_store">Drug Store</a></li>
			
			<li><a href="logout.php">Logout</a></li>
		</ul>	
</div>
		</div>
<div id="main">
<div id="tabbed_box" class="tabbed_box">  
    <h4>Manage Drug Store</h4> 
<hr/>	
    <div class="tabbed_area">  
      
        <ul class="tabs">  
            <li><a href="javascript:tabSwitch('tab_1', 'content_1');" id="tab_1" class="active">View Drug Store</a></li>  
              
             
        </ul>  
          
        <div id="content_1" class="content">  
		 
      
		<?php
		/* 
		View
        Displays all data from 'Stock' table
		*/

        // connect to the database
        include_once('connect.php');

        // get results from database
		
        $result = mysqli_query($con,"SELECT * FROM stock") 
                or die(mysqli_connect_error());
		// display data in table
        echo "<table border='1' cellpadding='3'>";
         echo "<tr><th>Name</th><th>Expiry_Date</th><th>Manufacturer</th><th>Supplier</th><th>Quantity</th><th>Cost</th><th>Update</th></tr>";

        // loop through results of database query, displaying them in the table
        while($row = mysqli_fetch_array( $result )) {
                
                // echo out the contents of each row into a table
                echo "<tr>";         
                echo '<td>' . $row['drug_name'] . '</td>';
				echo '<td>' . $row['Expiry_date'] . '</td>';
                echo '<td>' . $row['Manufacturer'] . '</td>';
                echo '<td>' . $row['supplier'] . '</td>';
                echo '<td>' . $row['quantity'] . '</td>';
				echo '<td>' . $row['cost'] . '</td>';?>
	
				<td><a href="update_Drug Store.php?stock_id=<?php echo $row['drug_name']?>"><img src="update-icon.png" width="24" height="24" border="0" /></a></td>
				<?php
		 } 
        // close table>
        echo "</table>";
?> 
        </div>  
   
              
    </div>  
  
</div>
 
</div>
<div id="footer" align="Center"> Pharmacy System 2020. Copyright All Rights Reserved</div>
</div>
</body>
</html>
