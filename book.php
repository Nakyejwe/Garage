<?php
include "connection.php";
/*include "functions.php";*/

session_start();

if(isset($_POST['submit'])){
$fullname = $_POST['name'];
$model = $_POST['model'];
$vno = $_POST['vno'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$date = $_POST['date'];
$issue = $_POST['issue'];


//$s = "select * from administrator where username = '$uname'";
//$result = mysqli_query($con, $s);
//$num= mysqli_num_rows($result);
//
//if($num == 1){
//    echo 'Username taken' ;
//}
    
    $query = "insert into appointment(full_name, model_name, vehicle_no, phone, address, date, mech_assign, issue) values ('$fullname','$model', '$vno','$phone','$address','$date','N','$issue')";
    if(mysqli_query($con, $query))
    {
        echo '<script>alert("Booking Successful !"); window.location.href ="index.html";</script>';
    }
    else{
        header('Location:./appointment/form.html');
    }

}
?>