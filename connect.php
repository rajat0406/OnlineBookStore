<?php  
if (isset($_POST['submit'])) {  
    extract($_POST);  
    $servername = "localhost";  
    $username   = "root";  
    $password   = "";  
    $dbname     = "signup";  
    // Create connection  
    $conn       = new mysqli($servername, $username, $password, $dbname);  
    // Check connection  
    if ($conn->connect_error) {  
        die("Connection failed: " . $conn->connect_error);  
    }  

    $sql = "INSERT INTO form (uname,email,mob,gender,pas,confirmpas)  
    VALUES ('$uname','$email','$mob','$gender','$pas','$confirmpas')";  
    
    if ($conn->query($sql) === TRUE) {  
        header('Location: login.html');  
    } else {  
        echo "Error: Someone already register using this number";/* . $sql . "<br>" . $conn->error;*/  
    }  
    $conn->close();  
} 
/*$userEmail = $_POST['mob'];
$password = $_POST['pas'];
$con=mysqli_connect("localhost","root","","signup");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$qz = "SELECT mob FROM form where mob='".$userEmail."' and pas='".$password."'" ;
$qz = str_replace("\'","",$qz);
$result = mysqli_query($con,$qz);
while($row = mysqli_fetch_array($result))
  {
  echo $row['mob'];
  }
if($con->query($result)===TRUE)
    header('Location:')
mysqli_close($con);*/


?> 