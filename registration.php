<?php





session_start();
$name='';
$email='';
$password='';
$error=array();
if(isset($_POST['Register'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];   


$servername='localhost';
$username='root';
$serverpassword='';
$dbname='finalyearproject';

$con=mysqli_connect($servername,$username,$serverpassword,$dbname);




$query = "insert into administrator(name, email, password) values ('$name','$email','$password')";
    if(mysqli_query($con, $query))
    {
        header('Location:loginAd.html');
    }   
    else{
        header('Location:registerAd.html');
    }

}
?>
