<?php
include 'connection.php';

session_start();
if (isset($_GET['bookid'])){
    $book_id = $_GET['bookid'];
}
else{
    $book_id = '';
}

$_SESSION['bookid'] =$book_id;

if(isset($_GET['submit'])){
    $mechname = $_GET['mech'];
    $bookid = $_GET['book'];
    $sql1 = "INSERT INTO done_assign (bookid, mechname) VALUES ('$bookid','$mechname')";
    $query1 = mysqli_query($con, $sql1);
    
    if(!$query1){
        $sql2 = "UPDATE appointment SET finished='true' WHERE id=$book_id";        
        mysqli_query($con, $sql2);
        header("Location:sidebar/viewappointments.php");
        
    }

}

?>
<!-- <div style = "background-image: url('images/mechanicimage.png')" background-repeat: repeat; background-attachment: scroll; width:100px height:100px>

</div> -->
    <form method="GET" action="assign.php" align= "center"  ;>
        <h1 align= "center">ASSIGN A MECHANIC</h1>
        <div class="info">
            <input  type="text" name="book" value="<?php 
            echo $_SESSION['bookid'];?>">
            <input  type="text" name="mech" placeholder="mechanic name">
            <input type="submit" value="submit" name="submit">

    </form>
</div>