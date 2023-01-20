<?php
session_start();
        try{
            $db = new PDO('mysql:host=localhost;dbname=finalyearproject','root','');
            $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $e){
            die('Please check your database');
        }
?>

<!doctype html>
<html lang="en">

<head>
    <title>Sidebar 01</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <div class="wrapper d-flex align-items-stretch">
        <nav id="sidebar">
            <div class="p-4 pt-5">
                <a href="#" class="img logo rounded-circle mb-5" style="background-image: url(images/logo.jpg);"></a>

                <ul class="list-unstyled components mb-5">
                    <li>
                        <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false"
                            class="dropdown-toggle">customer</a>
                        <ul class="collapse list-unstyled" id="homeSubmenu">

                            <li>
                                <a href="../appointment.php">Schedule appointments</a>
                            </li>

                        </ul>
                    </li>

                    <li>
                        <a href="find_garage.php">Find Nearby Garage</a>
                    </li>
                    <li>
                        <a href="checkstatus.php">check status</a>
                    </li>
                    <li>
                        <a href="notificationss.php">Notifications</a>
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
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
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

            <h1 class="mb-4 center">MY NOTIFICATIONS</h1>
    
                <div class="table-responsive">
	<table class="table table-bordered table-striped table-hover project_table">
		<thead>
			<tr>
               
                <th width = "150px">ISSUE DATE</th>
                <th>ISSUE</th>
            
			</tr>
		</thead>
		<tbody>
            <?php
		    $query = $db->query("SELECT * FROM notifictaions");
             $rows = $query->fetchAll(PDO::FETCH_OBJ);
             foreach($rows as $row){
               $CustomerName = $row->CustomerName;
               $Issue = $row->Issue;
               $NotificationDate = $row->NotificationDate;
               $id = $row->id;
               $run = $db->query("SELECT  CustomerName,Issue, NotificationDate FROM notifictaions WHERE id = '$id'");
               $run_rows = $run->fetchAll(PDO::FETCH_OBJ);
               foreach($run_rows as $runrow){
                $Issue = $runrow->Issue;
               ?>
               <tr>
                
          
                <td><?php echo $NotificationDate; ?></td>
                <td><?php echo $Issue; ?></td>
                <!-- <td><button class="btn btn-success" > <a href="Editappointment.php?updateid='.$id.'" class="text-dark" >Edit Appointment</a></button> -->
     
        </td>
               </tr>
               <?php
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