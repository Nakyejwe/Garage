<?php include 'connection.php'; ?>

<!doctype html>
<html lang="en">

<head>
    <title>Sidebar 01</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <div class="wrapper d-flex align-items-stretch">
        <nav id="sidebar">
            <div class="p-4 pt-5">
                <a href="#" class="img logo rounded-circle mb-5" style="background-image: url(images/logo.jpg);"></a>
                
                <div class="container text-light" ><h3 class="text-light"><!--?php echo $name ?!--></h3></div>

                <ul class="list-unstyled components mb-5">
                    <li class="active">
                        <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Administrator</a>
                        <ul class="collapse list-unstyled" id="homeSubmenu">
                            <li>
                                <a href="#">Available customers</a>
                            </li>
                            <li>
                                <a href="viewappointments.php">appointments</a>
                            </li>
                            
                        </ul>
                    </li>
                    
                    
                    <li>
                        <a href="emergencies.php">EMERGENCIES</a>
                    </li>
                    
                </ul>

                <div class="footer">
                    <p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script> All rights reserved | Final year project</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
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

            <h2 class="mb-4">ALL CUSTOMERS</h2>
<div class="report main-panel" >
    <div class="row">
        <div class="my-5">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Sr No</th>
                        <th scope="col">Full name</th>
                        <th scope="col">Email(s)</th>                        
                        <th scope="col">Phone Number</th>
                        <th scope="col">Address</th>
                        <th scope="col">Gendr(s)</th>
                </thead>
                <tbody>

                    <?php
                    $sql = "SELECT * FROM customer";
                    $query = mysqli_query($con, $sql);
                    if($query){
                        while($row = mysqli_fetch_assoc($query)){ 
                            $id = $row['id'];  
                            $full_name = $row['full_name'];
                            $email = $row['email'];
                            $phone_no = $row['phone_no'];
                            $address = $row['address'];
                            $gender = $row['gender'];


                        echo '
                        <tr>
                            <td>'.$id.'</td>
                            <td>'.$full_name.'</td>
                            <td>'.$email.'</td>
                            <td>'.$phone_no.'</td>
                            <td>'.$address.'</td>
                            <td>'.$gender.'<td>                            
                        </tr>';

                        }
                    }


                    ?>
               </tbody>
            </table>

        </div>
    </div>
</div>
<script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>