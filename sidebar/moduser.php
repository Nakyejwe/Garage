
<?php
include 'connection.php';

$id=$_GET['updateid'];

$sql="select * from appointment where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);

$id=$row['id'];
        $fname=$row['full_name'];
        $model=$row['model_name'];
        $no=$row['vehicle_no'];
        $phone=$row['phone'];
        $address=$row['address'];
        $date=$row['date'];
        $mech=$row['mech_assign'];
        $issue=$row['issue'];

if(isset($_POST['submit'])){

  $fname=$_POST['full_name'];
  $model=$_POST['model_name'];
  $no=$_POST['vehicle_no'];
  $phone=$_POST['phone'];
  $address=$_POST['address'];
  $date=$_POST['date'];
  $mech=$_POST['mech_assign'];
  $issue=$_POST['issue'];
  


  
    
    $sql="update appointment set id=$id, full_name='$fname', model_name='$model', vehicle_no='$no', phone='$phone', address='$address' ,date='$date' ,mech_assign='$mech', issue='$issue' where id=$id ";
    $result=mysqli_query($con, $sql);
    if($result){
      header('location:index2.php') ;
    }else{
      die(mysqli_error($con));
    }

  
  
}

?>

<html>

<head>
    <title>Contact form</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <style>
        html,
        body {
            min-height: 100%;
            padding: 0;
            margin: 0;
            font-family: Roboto, Arial, sans-serif;
            font-size: 14px;
            color: #666;
        }
        
        h1 {
            margin: 0 0 20px;
            font-weight: 400;
            color: #1c87c9;
        }
        
        p {
            margin: 0 0 5px;
        }
        
        .main-block {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: #1c87c9;
        }
        
        form {
            padding: 25px;
            margin: 25px;
            box-shadow: 0 2px 5px #f5f5f5;
            background: #f5f5f5;
        }
        
        .fas {
            margin: 25px 10px 0;
            font-size: 72px;
            color: #fff;
        }
        
        .fa-envelope {
            transform: rotate(-20deg);
        }
        
        .fa-at,
        .fa-mail-bulk {
            transform: rotate(10deg);
        }
        
        input,
        textarea {
            width: calc(100% - 18px);
            padding: 8px;
            margin-bottom: 20px;
            border: 1px solid #1c87c9;
            outline: none;
        }
        
        input::placeholder {
            color: #666;
        }
        
        button {
            width: 100%;
            padding: 10px;
            border: none;
            background: #1c87c9;
            font-size: 16px;
            font-weight: 400;
            color: #fff;
        }
        
        button:hover {
            background: #2371a0;
        }
        
        @media (min-width: 568px) {
            .main-block {
                flex-direction: row;
            }
            .left-part,
            form {
                width: 50%;
            }
            .fa-envelope {
                margin-top: 0;
                margin-left: 20%;
            }
            .fa-at {
                margin-top: -10%;
                margin-left: 65%;
            }
            .fa-mail-bulk {
                margin-top: 2%;
                margin-left: 28%;
            }
        }
    </style>
</head>

<body>
    <div class="main-block">
        <div class="left-part">
            <i class="fas fa-envelope"></i>
            <i class="fas fa-at"></i>
            <i class="fas fa-mail-bulk"></i>
        </div>
        <form method="POST">
            <h1>BOOK AN APPOINTMENT</h1>
            <div class="info">
                <input  type="text" name="full_name" value="<?php echo $fname ?>" placeholder="full name">
                <input  type="text" name="model_name"  value="<?php echo $model ?>" placeholder="model name">
                <input  type="text" name="vehicle_no" value="<?php echo $no ?>" placeholder="vehicle no">
                <input  type ="number" name="phone" value="<?php echo $phone ?>" placeholder="Phone number">
                <input  type ="text"name="address" value="<?php echo $address ?>" placeholder="address">
                <input  type="date" name="date" value="<?php echo $date ?>" placeholder="appointment date">
                <input  type="text" name="mech_assign" value="<?php echo $mech ?>" placeholder="appointment date">
                
            </div>
            <p>Brief description of the mechanical issue</p>
            <div>
                <textarea rows="2" name = "issue"></textarea>
            </div>
            <button type="submit" name="submit">Cancel</button>
            <button type="submit" name="submit">Submit</button>
        </form>
    </div>
</body>

</html>





