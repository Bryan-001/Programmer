<?php
session_start();
//include_once('connect.php');
if(isset($_SESSION['username'])){
$id=$_SESSION['pharmacist_id'];
$username=$_SESSION['username'];
}else{
header("location:index.php");
exit();
}
?>
<!DOCTYPE html>
<html>
<head>
<title> Chem Home Pharmacy System</title>
<link rel="stylesheet" type="text/css" href="style/mystyle.css">
<link rel="stylesheet" href="style/style.css" type="text/css" media="screen" /> 
<link rel="stylesheet" href="style/table.css" type="text/css" media="screen" /> 
<script src="js/function.js" type="text/javascript"></script>
<style>#left-column {height: 477px;}
 #main {height: 477px;
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
			<li><a href="pharmacist.php">Dashboard</a></li>
			<li><a href="prescription.php">Prescription</a></li>
			<li><a href="stock_pharmacist.php">Stock</a></li>
			<li><a href="logout.php">Logout</a></li>
		</ul>	
</div>
		</div>
<div id="main">
<div id="tabbed_box" class="tabbed_box">  
    <h4>Manage Stock</h4> 
<hr/>	
    <div class="tabbed_area">  
      
        <ul class="tabs">  
            <li><a href="javascript:tabSwitch('tab_1', 'content_1');" id="tab_1" class="active">View Stock</a></li>  
            <li><a href="javascript:tabSwitch('tab_2', 'content_2');" id="tab_2">Add Medicine</a></li>  
             
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
		
        $result = mysqli_query($con,"SELECT * FROM stock")  or die(mysqli_connect_error());
        
		// display data in table
        echo "<table border='1' cellpadding='3'>";
         echo "<tr><th>Name</th><th>Expiry_Date</th><th>Manufacturer</th><th>Supplier</th><th>Quantity</th><th>Cost</th> <th>Delete</th></tr>";

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
				<td><a href="delete_stock.php?drug_name=<?php echo $row['drug_name']?>"><img src="delete-icon.jpg" width="24" height="24" border="0" /></a></td>
				<?php
		 } 
        // close table>
        echo "</table>";
?> 
        </div>  
        <div id="content_2" class="content">  
         <!--Add Drug-->
		
			<form name="form1ss" onsubmit="return validateForm(this);" action="add_stock1.php" method="post">
			<table width="420" height="106" border="0" >	
				
                <tr><td align="center"><input type="text" name="drug_name" style="width:170px" placeholder="Drug Name" required="required" id="drug_name" /></td></tr>
				<tr><td align="center"><input type="text" name="Expiry_date" style="width:170px" placeholder="Expiry_date" required="required" id="Expiry_date"/></td></tr>
				<tr><td align="center"><input type="text" name="Manufacturer" style="width:170px" placeholder="Manufacturing Company"  required="required" id="Manufacturer" /></td></tr>  
				<tr><td align="center"><input type="text" name="supplier" style="width:170px" placeholder="Supplier" required="required" id="supplier" /></td></tr>  
				<tr><td align="center"><input type="text" name="quantity" style="width:170px" placeholder="Quantity" required="required" id="quantity" /></td></tr>  
				<tr><td align="center"><input type="text" name="cost" style="width:170px" placeholder="Cost" required="required" id="cost" /></td></tr>
                
				<tr><td align="center"><input type="submit" name="stock" id="submit"/></td></tr>
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
