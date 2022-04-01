<?php
$servername = "unaux_30388904_localhost";
$username = "root";
$password = "";
$db = "try";
// Create connection
$conn = mysqli_connect($servername, $username, $password,$db);
// Check connection
if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

//inserting

 
$lname = $_POST['lname']; 
$lpassword = $_POST['lpassword']; 
$email = $_POST['email'];


$sql = "INSERT INTO loginform (lname , lpassword , email) VALUES ('$lname' , '$lpassword', '$email')"; 

if(!mysqli_query($conn,$sql))  
{  
    echo 'Not inserted';  
}  
else  
{  
    echo 'Data Inserted';  
} 
header('location:login.html');
?>