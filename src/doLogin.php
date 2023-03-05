<?php
        $email = $_POST['email'];
        $password = $_POST['password'];
        $con=mysqli_connect("my-mysql.default.svc.cluster.local","dbuser","123456","hotel_management");
        if (mysqli_connect_errno())
        {
        echo "Failed to connect to MySQL: " .
        mysqli_connect_error();
        }

        $result = mysqli_query($con,"SELECT role,userid FROM users where email = '$email' and password = '$password' ");
        $role="";
        $userID="";
        while($row = $result->fetch_assoc()){
            $role=$row['role'];
            $userID=$row['userid'];
        }
        if($role == ""){
            header("Location: /login.php?notFound");
            die();
        }
        elseif($role == "manager"){
            header("Location:  http://mgr.hotel-booking-378919.com/Managers/managersLoginPage.php?managerID=$userID");
            die();
        }
        elseif($role == "user"){
            header("Location:  http://user.hotel-booking-378919.com/Users/usersLoginPage.php?userID=$userID");
            die();
        }
?>