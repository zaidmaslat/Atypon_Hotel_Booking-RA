<?php 
$con=mysqli_connect("my-mysql.default.svc.cluster.local","dbuser","123456","hotel_management");
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " .
mysqli_connect_error();
}
    if (!isset($_GET['userName'])) {
        echo 'No ID was specified.';
    }
    $name = $_GET['userName'];

    if (!isset($_GET['email'])) {
        echo 'No email was specified.';
    }
    $email = $_GET['email'];

    if (!isset($_GET['password'])) {
        echo 'No password was specified.';
    }
    $password = $_GET['password'];
    
    if (!isset($_GET['role'])) {
        echo 'role was specified.';
    }
    $role = $_GET['role'];



    mysqli_query($con,"INSERT INTO users (userName,email,password,role) values ('$name','$email','$password','$role') ");

    $result = mysqli_query($con,"SELECT userid FROM users where userName = '$name' and email = '$email' and password = '$password'");

    $userID="";
    while($row = $result->fetch_assoc()){
        $userID=$row['userid'];
    }

    if($role == ""){
        header("Location: /login.php?notFound");
        die();
    }
    elseif($role == "manager"){
        header("Location: /Managers/managersLoginPage.php?managerID=$userID");
        die();
    }
    elseif($role == "user"){
        header("Location: /Users/usersLoginPage.php?userID=$userID");
        die();
    }
?>
