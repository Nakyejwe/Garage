<?php 

include "connection.php";

session_start();


if(isset($_POST['email']) && isset($_POST['password'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $s = "select * from mechanic where email = '$email' && password = '$password'";
    $result = mysqli_query($con, $s);
    $num = mysqli_num_rows($result);
    $row = mysqli_fetch_assoc($result);
    $id = $row['id'];
       
        if($num >0){
            $query = "select id from mechanic where email = '$email' && password = '$password'";
            $result = mysqli_query($con, $query);
            $_SESSION['id'] = $result;
            header ("location: sidebarm/index.php?id=$id");
        }
        else{
            header("Location: loginAd.html");
            echo("USER HAS NOT GONE TO HOME");
        }
}

?>