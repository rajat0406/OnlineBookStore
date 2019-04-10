<?php 

    if (isset($_POST['submit_login'])) {  
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

    $userMobile = mysqli_escape_string($conn,$_POST['mob']);
    $password = mysqli_escape_string($conn, $_POST['pas']);
    // Check connection
    if (mysqli_connect_errno())
    {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    $query = "SELECT * FROM form where mob='$userMobile' and pas='$password'" ;


    $result = mysqli_query($conn,$query);

    if(mysqli_num_rows($result)){

        $_SESSION['mob']= $userMobile;
        header('Location: UserLogin.html');
    }
    else
    {
        echo "Invalid Mobile no. or password";
    }
}
?>