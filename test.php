<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sucessful</title>
  <link rel="stylesheet" href="css/main1.css">
</head>
<body>
<h1 class="ph2"><?php
  $servername = "127.0.0.1";
  $username ="root";
  $password = "password";
  $dbname = "aravind";
  $port = "3308";

  if ($_SERVER['REQUEST_METHOD']=='POST'){
      $fname =strtoupper($_POST['name']) ;
      $lname = strtoupper($_POST['last-name']);
      $gndr = $_POST['gender'][0];
      $age = $_POST['age'];
      $email = $_POST['email'];
      $pass = $_POST['password'];
  }

  $con = new mysqli($servername, $username, $password, $dbname, $port);
  if($con->connect_error){
      die("connection failed". $con->connect_error);
  }
  $sql = "INSERT INTO user_data VALUE('$fname', '$lname', '$gndr', $age, '$email', '$pass');";
  if ($con->query($sql) === TRUE) {
   echo "Account created successfully";
    } 
    else if($con->error ==="Duplicate entry '$email' for key 'PRIMARY'"){
      echo 'Account already created';
    }
    else{
      echo $con->error;
    }
    $con->close();
?></h1>
</body>
</html>
