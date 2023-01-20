<?php
include "connection.php";

session_start();


$fname = $_POST['fname'];
$email = $_POST['email'];
$password = $_POST['password'];
$phone = trim($_POST['phoneno']);
$department = $_POST['department'];

//$s = "select * from administrator where username = '$uname'";
//$result = mysqli_query($con, $s);
//$num= mysqli_num_rows($result);
//
//if($num == 1){
//    echo 'Username taken' ;
//}

    $reg = "insert into mechanic (fname, email, password, phoneno, department, work_status) values ('$fname','$email','$password','$phone','$department','free')";
    if(mysqli_query($con, $reg))
    {
        header('Location:loginMe.html');
    }
    else{
        header('Location:registerMe.html');
    }

?>