<?php
session_start();
//include_once('connect.php');
if(isset($_SESSION['username'])){
$id=$_SESSION['admin_id'];
$username=$_SESSION['username'];
}else{
header("location:index.php");
exit();
}

?>
<!DOCTYPE html>
<html>
<head>
<title><?php echo $username;?> -Chem Home Pharmacy System</title>
<link rel="stylesheet" type="text/css" href="style/mystyle.css">
<link rel="stylesheet" href="style/style.css" type="text/css" media="screen"/> 
<link rel="stylesheet" href="style/table.css" type="text/css" media="screen"/> 
<script src="js/function.js" type="text/javascript"></script>
<script src="js/validation_script.js" type="text/javascript"></script>
<script>
function validateForm()
{

//for alphabet characters only
var str=document.form1.first_name.value;
	var valid="abcdefghijklmnopqrstuvwxyz ABCDEFGHIJKLMNOPQRSTUVWXYZ";
	//comparing user input with the characters one by one
	for(i=0;i<str.length;i++)
	{
	//charAt(i) returns the position of character at specific index(i)
	//indexOf returns the position of the first occurence of a specified value in a string. this method returns -1 if the value to search for never ocurs
	if(valid.indexOf(str.charAt(i))==-1)
	{
	alert("First Name Cannot Contain Numerical Values");
	document.form1.first_name.value="";
	document.form1.first_name.focus();
	return false;
	}}
	
if(document.form1.first_name.value=="")
{
alert("Name Field is Empty");
return false;
}

//for alphabet characters only
var str=document.form1.last_name.value;
	var valid="abcdefghijklmnopqrstuvwxyz ABCDEFGHIJKLMNOPQRSTUVWXYZ";
	//comparing user input with the characters one by one
	for(i=0;i<str.length;i++)
	{
	//charAt(i) returns the position of character at specific index(i)
	//indexOf returns the position of the first occurence of a specified value in a string. this method returns -1 if the value to search for never ocurs
	if(valid.indexOf(str.charAt(i))==-1)
	{
	alert("Last Name Cannot Contain Numerical Values");
	document.form1.last_name.value="";
	document.form1.last_name.focus();
	return false;
	}}
	

if(document.form1.last_name.value=="")
{
alert("Name Field is Empty");
return false;
}

}

</script>

 <style>
<style>#left-column {height: 477px;}
 #main {height: 477px;}
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
<div id="tabbed_box" class="tabbed_box">  
    <h4>Manage Cashier</h4> 
<hr/>	
    <div class="tabbed_area">  
	
      
        <ul class="tabs">  
            <li><a href="javascript:tabSwitch('tab_1', 'content_1');" id="tab_1" class="active">View User</a></li>  
            <li><a href="javascript:tabSwitch('tab_2', 'content_2');" id="tab_2">Add User</a></li>  
              
        </ul>  
          
        <div id="content_1" class="content">  
		<?php 
			  
		/* 
		View
        Displays all data from 'Cashier' table
		*/

        // connect to the database
        include_once('connect.php');

        // get results from database
		
        $result = mysqli_query($con,"SELECT * FROM cashier")  or die(mysqli_connect_error());
									    
        // display data in table
        
        echo "<table border='1' cellpadding='5' align='center'>";
        echo "<tr> <th>ID</th><th>Firstname</th><th>Lastname</th><th>Username</th><th>Password</th><th>Update</th><th>Delete</th></tr>";

        // loop through results of database query, displaying them in the table
        while($row = mysqli_fetch_array( $result )) {
                
                // echo out the contents of each row into a table
                echo "<tr>";
                
                echo '<td>' . $row['id'] . '</td>';
                echo '<td>' . $row['first_name'] . '</td>';
				echo '<td>' . $row['last_name'] . '</td>';
				echo '<td>' . $row['username'] . '</td>';
                echo '<td>' . $row['password'] . '</td>';
				?>
				<td><a href="update_cashier.php?username=<?php echo $row['username']?>"><img src="update-icon.png" width="35" height="35" border="0" /></a></td>
				<td><a href="delete_cashier.php?cashier_id=<?php echo $row['cashier_id']?>"><img src="delete-icon.jpg" width="35" height="35" border="0" /></a></td>
				<?php
                    
		 } 
        // close table>
        echo "</table>";
            
         ?> 
        </div>  
        <div id="content_2" class="content">  
		           <!--Cashier-->
		<form name="form1"  onsubmit="return validateForm(this);" action="add_cashier1.php" method="post">
			<table width="220" height="106" border="0" >	
				<tr><td align="center"><input type="text" name="id"  style="width:170px" placeholder="id" required="required"  id="id" /></td></tr>
                <tr><td align="center"><input  type="text" name="first_name" style="width:170px" placeholder="First Name" required="required"  id="first_name" /></td></tr>
				<tr><td align="center"><input type="text" name="last_name"  style="width:170px" placeholder="Last Name" required="required" id="last_name" /></td></tr>
				<tr><td align="center"><input type="text" name="username"  style="width:170px" placeholder="Username" required="required" id="username" /></td></tr>
				<tr><td align="center"><input type="password" name="password"  style="width:170px" placeholder="Password" required="required" id="password"/></td></tr>
				<tr><td align="right"><input type="submit" name="cashier"  value="Submit"></td></tr>
				
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
