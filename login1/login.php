<?php
$servername = "sql103.unaux.com";
$username = "unaux_30388904";
$password = "Aryan123";
$db = "unaux_30388904_localhost";
// Create connection
$conn = mysqli_connect($servername, $username, $password,$db);
// Check connection
if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully";


if(isset($_POST['lname'])){

    $lname = $_POST['lname'];
    $lpassword= $_POST['lpassword'];

    
    $result=mysqli_query($conn,"select * from loginform where lname='".$lname."'AND lpassword='".$lpassword."' ")or die (mysqli_connect_error());

   
//     $numberOfRows = MYSQLI_NUM_ROWS($sql);
//     while($studid = mysqli_fetch_object($sql))
//             {
//             echo "$lname";
//             }
//             $result = mysqli_query($conn, $sql);

// echo $lname, $lpassword;
//             $sql = "SELECT * FROM users WHERE user_name='$lname' AND password='$lpassword'";

//             $result = mysqli_query($conn, $sql);
// echo '<script>alert("Validated")</script>';
            if (mysqli_num_rows($result) === 1) {
                // echo '<script>alert("Validated")</script>';
                header('location:Experiment/EXP.html');
                $row = mysqli_fetch_assoc($result);
    
                // if ($row['user_name'] === $lname && $row['password'] === $lpassword) {
    
                //     echo "Logged in!";
    
                //     $_SESSION['user_name'] = $row['user_name'];
    
                //     $_SESSION['name'] = $row['name'];
    
                //     $_SESSION['id'] = $row['id'];
    
           
    
                //     exit();
                // }
                // else{
                //      echo ' Incorrect id check again';
                //  exit();
                //      }
}
else{
    echo '<script>alert(" Not Valid")</script>';
    exit();
}
}
// header('location:Experiment/EXP.html');
?>