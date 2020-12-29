
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>updated</title>
</head>
<body>
<?php
    $host ="localhost";
    $user = "root";
    $password ="password";
    $dbname = "aravind";
    $port = '3308';

    $con = new mysqli($host, $user, $password, $dbname ,$port);
    if($con->connect_error){
        die("Connection error ". $con->connect_error);
    }

    if ($_SERVER['REQUEST_METHOD']=='POST'){
        $email = $_POST['email'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $gender = $_POST['gender'];
        $age = $_POST['age'];
        $nemail = $_POST['nemail'];


        $sql = "UPDATE user_data SET fname= '$fname',lname= '$lname',gender= '$gender',age= $age,email= '$nemail'  WHERE email= '$email' ";
        if (mysqli_query($con, $sql)) {
            echo "updated successfully";
        } 
        else {
            echo "Error updating record: " . mysqli_error($con);
        }
    }

    $con->close();
?>
<a href="login.html">LOGIN</a>
</body>
</html>