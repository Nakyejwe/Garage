<?php 
if (isset($_POST["submit_address"]))
{
    $address = $_POST["address"];
    $address = str_replace(" ", "+", $address);
}
?>

<html>
   <header></header>
   <body>
   <div>
                <iframe width="100%" height="800"
                    src="https://maps.google.com/maps?q=<?php echo $address; ?> garage-&output=embed"></iframe>

            </div>
   </body>
</html>