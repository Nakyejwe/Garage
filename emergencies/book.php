<?php
include "connection.php";
/*include "functions.php";*/

session_start();

if(isset($_POST['submit'])){
$name = $_POST['name'];
$email = $_POST['email'];
$Location = $_POST['Location'];
$contact = $_POST['contact'];
$Issue = $_POST['Issue'];



//$s = "select * from administrator where username = '$uname'";
//$result = mysqli_query($con, $s);
//$num= mysqli_num_rows($result);
//
//if($num == 1){
//    echo 'Username taken' ;
//}
    
    $query = "insert into emergency (name, email, Location, contact, Issue) values ('$name','$email','$Location','$contact','$Issue')";
    if(mysqli_query($con, $query))
    {
        echo '<script>alert("Booking Successful !"); window.location.href ="index.php";</script>';
    }
    else{
        header('Location:appointment.php');
    }

}
?>