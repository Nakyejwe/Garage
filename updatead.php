
<?php include 'connection.php'; ?>


<div class="report main-panel" >
<div class="row">
    <div class="container col-md-2">

    </div>

<div class="my-5">
    <h2>Users </h2>


    <table class="table">
        <thead>
            <tr>
                <th scope="col">Sr No</th>
                <th scope="col">Full name</th>
                <th scope="col">model name(s)</th>
                <th scope="col">number plate</th>
                <th scope="col">phone</th>
                <th scope="col">Address</th>
                <th scope="col">date</th>
                <th scope="col">mech_assign</th>
                <th scope="col">Issue</th>
            </tr>
        </thead>
        <tbody>

        <?php


$sql="select * from appointment";
$result=mysqli_query($con,$sql);
if($result){
    while($row=mysqli_fetch_assoc($result)){

        $id=$row['id'];
        $fname=$row['full_name'];
        $model=$row['model_name'];
        $no=$row['vehicle_no'];
        $phone=$row['phone'];
        $address=$row['address'];
        $date=$row['date'];
        $mech=$row['mech_assign'];
        $issue=$row['issue'];
        echo '<tr>
        <th scope="row">'.$id.'</th>
        <td>'.$fname.'</td>
        <td>'.$model.'</td>
        <td>'.$no.'</td>
        <td>'.$phone.'</td>
        <td>'.$address.'</td>
        <td>'.$date.'</td>
        <td>'.$mech.'</td>
        <td>'.$issue.'</td>
        <td>
       
            <button class="btn btn-success" > <a href="../moduser.php?updateid='.$id.'" class="text-dark" >Alter</a></button>
     
        </td>
        </tr>
        ';
    }
}

?>




        </tbody>
    </table>

</div>




