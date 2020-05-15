<?php
function connect(){
$dbserver = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname="testdb";
    
    $link=mysqli_connect($dbserver,$dbuser,$dbpass,$dbname) or die ("could not connect".
          mysqli_connect_error());
          return($link);
    
}
$con=connect();
    
if(isset($_POST["Register"])){
    
    $id=$_POST["id"];
    $first_name=$_POST["first_name"];
    $last_name=$_POST["last_name"];
    $username=$_POST["username"];
    $userType=$_POST["userType"];
    $password=$_POST["password"];
    
    //print_r($_POST);

$sql="INSERT INTO user(id,first_name,last_name,username, userType,password)
       VALUES('$id','$first_name','$last_name','$username', '$userType','$password')";
    
    if (mysqli_query($con,$sql)){
        echo "success";
    }
    else{
        echo"Error".mysqli_error($con);
    }
   
}
?>

   