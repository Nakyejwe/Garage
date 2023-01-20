


<?php

include 'connection.php';
if(isset($_GET['id'])){
$id = $_GET['id'];

$sql= "select * from appointment where id='$id' AND finished='true'";
$result=mysqli_query($con,$sql) or die(mysqli_error($con));
$row=mysqli_fetch_assoc($result);
$name=$row['mech_assign'];
}
?>

<!doctype html>
<html lang="en">
  <head>
  	<title>Mechanics Panel</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="bootstrap/css/bootstrap.css">

  </head>
  <body>
		
		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
				<div class="p-4 pt-5">
		  		<a href="#" class="img logo rounded-circle mb-5" style="background-image: url(images/logo.jpg);"></a>
	 




          <div class="container text-light" ><h3 class="text-light"></h3></div>


   
          <ul class="list-unstyled components mb-5">
	          <li class="active">
	            <a href="availableappointments.php" /*data-toggle="collapse"*/ aria-expanded="false" class="dropdown-toggle">Available Appointments</a>
	            <ul class="collapse list-unstyled" id="homeSubmenu">

	            </ul>
	          </li>
	          <li>
	              <a href="index.php"> Finished Appointments</a>
	          </li>	          
	        </ul>

	        <div class="footer">
	        	<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						  <a>All rights reserved | final year project</a>
						  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
	        </div>

	      </div>
    	</nav>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">

            <button type="button" id="sidebarCollapse" class="btn btn-primary">
              <i class="fa fa-bars"></i>
              <span class="sr-only">Toggle Menu</span>
            </button>
            <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#"><a class="btn btn-primary" href="logout.php">Logout</a></a>
                    </li>
                </ul>
            </div>            
          </div>
        </nav>

        <h2 class="mb-4">The mechanic</h2>
        <!--p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p!-->
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
                <th scope="col">Issue</th>
            </tr>
        </thead>
        <tbody>

        <?php


$sql="select * from appointment Where finished = 'false'";
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
        
        </tr>
        ';
    }
}

?>
            
            

      </div>
		</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>

