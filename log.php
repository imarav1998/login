<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="css/log.css">
    <h1 id='logh1'>
    <?php
    $host ="localhost";
    $user = "root";
    $password ="password";
    $dbname = "aravind";
    $port = '3308';

    if ($_SERVER['REQUEST_METHOD']=='POST'){
        $email = $_POST['email'];
        $pass = $_POST['password'];
    }

    $connection = new mysqli($host, $user, $password, $dbname ,$port);
    if($connection->connect_error){
        die("Connection error ". $connection->connect_error);
    }

    $sql = "SELECT pass FROM user_data WHERE email ='$email'";
    $result = $connection->query($sql);
    $row = $result->fetch_assoc();
    if($row['pass'] != $pass){
        echo "Incorrect password or username";
        $btn = "retry";
    }
    else{
        $btn = "signout";
    }

    $sql = "SELECT fname, lname, gender, age, email, pass FROM user_data WHERE email ='$email' AND pass = '$pass'";
    $result = $connection->query($sql);
    $row = $result->fetch_assoc();
    $connection->close();
?>
</h1>
</head>
<body>
    <table class="table1">
        <tr>
            <th>first name</th>
            <th>last name</th>
            <th>gender</th>
            <th>age</th>
            <th>email</th>
        </tr>
        <tr>
            <td><?php echo $row['fname']; ?></td>
            <td><?php echo $row['lname']; ?></td>
            <td><?php echo $row['gender']; ?></td>
            <td><?php echo $row['age']; ?></td>
            <td><?php echo $row['email']; ?></td>
        </tr>
    </table>
    <table class="table2" style="display:none">
        <tr>
            <th>first name</th>
            <th>last name</th>
            <th>gender</th>
            <th>age</th>
            <th>email</th>
            <th>current email</th>
        </tr>
        <form action="log1.php" name="form2" method="POST" onsubmit="return valid()">
        <tr class="tr2">
            <td><input type="text" name="fname" onkeypress=" return filter()"></td>
            <td><input type="text" name="lname" onkeypress=" return filter()"></td>
            <td><select name="gender" id="">
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Others">others</option>
            </select></td>
            <td><input type="number" name="age"></td>
            <td><input type="email" name="nemail"></td>
            <td><input type="email" name="email"></td>
        </tr>
    </table>
    <input type="submit" class="signout table2" style="display:none" value="update">
    </form>
    <div class="signout table1" onclick = "update()">Update</div>
    <div class="signout table2" style="display:none" onclick = "delete1()">delete</div>
    <div class="signout table2" style="display:none" onclick = "update()">back</div>
    <a href="login.html" class="table1"><div class="signout"><?php echo $btn; ?></div></a>
    <form action="delete.php" method="POST" class="form3 table3" style="display:none">
        <input type="email" name="lemail" required="true">
        <input type="submit" value="delete" name="del">
        <input type="button" value="back" onclick="update1()">
    </form>
</body>




<script type="text/javascript">
var table1 = document.getElementsByClassName('table1');
var table2 = document.getElementsByClassName('table2');
var flag =0;
update = ()=>{
    if(flag==0){
        table1[0].style.display='none';
        table1[1].style.display='none';
        table1[2].style.display='none';
        table2[0].style.removeProperty('display');
        table2[1].style.removeProperty('display');
        table2[2].style.removeProperty('display');
        table2[3].style.removeProperty('display');
        flag++;
    }
    else{
        table1[0].style.removeProperty('display');
        table1[1].style.removeProperty('display');
        table1[2].style.removeProperty('display');
        table2[0].style.display='none';
        table2[1].style.display='none';
        table2[2].style.display='none';
        table2[3].style.display='none';
        flag=0;
    }
}

var fname = document.forms['form2']['fname'];
var lname = document.forms['form2']['lname'];
var gender = document.forms['form2']['gender'];
var age = document.forms['form2']['age'];
var email = document.forms['form2']['email'];

function filter(){
    return ((event.charCode > 64 &&  even.charCode < 91) || (event.charCode > 96 && event.charCode < 123));
}
valid = ()=>{
    if(fname.value != "" && lname.value != "" && age.value !="" && email.value !="" ){
        return true;
    }   
    else{
        alert("please fill all fields");
        return false;
    }
}
delete1 = () =>{
    var table3 = document.getElementsByClassName('table3');
    table3[0].style.removeProperty('display');
    table2[0].style.display='none';
    table2[1].style.display='none';
    table2[2].style.display='none';
    table2[3].style.display='none';
}
update1 =()=>{
    var table3 = document.getElementsByClassName('table3');
    table3[0].style.display='none';
    table1[0].style.removeProperty('display');
    table1[1].style.removeProperty('display');
    table1[2].style.removeProperty('display');
}
</script>





</html>
