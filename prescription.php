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
<title><?php echo $username;?> -Chem Home Pharmacy System </title>
<link rel="stylesheet" type="text/css" href="style/mystyle.css">
<link rel="stylesheet" href="style/style.css" type="text/css" media="screen" /> 
<link rel="stylesheet" href="style/table.css" type="text/css" media="screen" /> 
<script src="js/function.js" type="text/javascript"></script>
<script type="text/javascript" SRC="js/jquery-1.4.2.min.js"></script>
	<script type="text/javascript" SRC="js/superfish/hoverIntent.js"></script>
	<script type="text/javascript" SRC="js/superfish/superfish.js"></script>
	<script type="text/javascript" SRC="js/superfish/supersubs.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){ 
			$("ul.sf-menu").supersubs({ 
				minWidth:    12, 
				maxWidth:    27, 
				extraWidth:  1    
								  
			}).superfish();
							
		}); 
	</script>
	<script>
function validateForm() {
    var value = document.form1.customer_name.value;
	if(value.match(/^[a-zA-Z]+(\s{1}[a-zA-Z]+)*$/)) {
        return true;
    } else {
        alert('Name Cannot contain numbers');
        return false;
    }
}
</script>
	<script SRC="js/cufon-yui.js" type="text/javascript"></script>
	<script SRC="js/Liberation_Sans_font.js" type="text/javascript"></script>
	<script SRC="js/jquery.pngFix.pack.js"></script>
	<script type="text/javascript">
		Cufon.replace('h1,h2,h3,h4,h5,h6');
		Cufon.replace('.logo', { color: '-linear-gradient(0.5=#FFF, 0.7=#DDD)' }); 
	</script>
   <style>#left-column {
       height: 477px;
       }
 #main 
       {
           height: 477px;
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
    <h4>Prescription</h4> 
<hr/>	
    <div class="tabbed_area">  
      
        <ul class="tabs">  
            <li><a href="javascript:tabSwitch('tab_1', 'content_1');" id="tab_1" class="active">View Prescription</a></li>  
            <li><a href="javascript:tabSwitch('tab_2', 'content_2');" id="tab_2">Create New</a></li>  
              
        </ul>  
          
        <div id="content_1" class="content">  
		<?php 
		/* 
		View
        Displays all data from 'prescription' table
		*/
        // connect to the database
        include_once('connect.php');
       // get results from database
       $result = mysqli_query($con,"SELECT * FROM prescription")or die(mysqli_connect_error());
		// display data in table
        echo "<table border='1' cellpadding='5'align='center'>";
        echo "<tr><th>Name</th><th>Age</th> <th>Gender</th> <th>Phone</th> <th>Drug_Name</th> <th>Strength</th><th>Dose</th> <th>Quantity</th><th>Delete</th></tr>";
        // loop through results of database query, displaying them in the table
        while($row = mysqli_fetch_array( $result )) {
                // echo out the contents of each row into a table
                echo "<tr>";
                echo '<td>' . $row['customer_name'] . '</td>';
                echo '<td>' . $row['age'] . '</td>'; 
                echo '<td>' . $row['gender'] . '</td>';
                echo '<td>' . $row['phone'] . '</td>';
                echo '<td>' . $row['drug_name'] . '</td>';
                echo '<td>' . $row['strength'] . '</td>';
				echo '<td>' . $row['dose'] . '</td>';
				echo '<td>' . $row['quantity'] . '</td>';
				?>
				
				<td><a href="delete_prescription.php?customer_name=<?php echo $row['customer_name']?>">
				<img src="delete-icon.jpg" width="35" height="35" border="0" /></a></td>
				<?php
		 } 
        // close table>
        echo "</table>";
?> 
        </div>  
        <div id="content_2" class="content"> 
		
						
			<div id="table_1">
		           <!--Pharmacist-->
				   
		<form name="form1" onsubmit="return validateForm(this);" action="add_prescription.php" method="post" >
			<table width="200" height="106" border="0" >
				<tr><td align="left"><input type="text" name="customer_name" placeholder="Name" style="width:170px"  id="customer_name" required="required" /></td></tr>
				<tr><td align="left"><input type="text" name="age" style="width:170px"  placeholder="Age" id="age" required="required" /></td></tr>
				<tr><td align="left"><input type="text" name="sex" style="width:170px" required="required" placeholder="Gender" id="gender"/></td></tr>  
				<tr><td align="left"><input type="text" name="phone" placeholder="Phone"  style="width:170px" id="phone" required="required" /></td></tr>  
                  <tr><td align="left"><input type="text" name="drug_name" style="width:170px"  id="drug_name" placeholder="Drug_Name" /></td></tr>  
                <tr><td align="left"><input type="text" name="strength" style="width:170px"  id="strength"placeholder="Strength" /></td></tr>
				<tr><td align="left"><input type="text" name="dose" style="width:170px" id="dose" placeholder="Dose" /></td></tr>
				<tr><td align="left"><input type="text" name="quantity" style="width:170px" id="quantity"placeholder="Quantity"/></td></tr>
				
				<tr><td><input type="submit" name="prescription" value="Submit"/></td></tr>
            </table>
		</form>
	
		</div>
		</div>  
    </div>  
</div>
</div>
<div id="footer" align="Center"> Pharmacy System 2020. Copyright All Rights Reserved</div>
</div>
</body>
</html>
