<html>
<?php


include ('homeh.php');
require 'dataconn.php';
$name=0;

session_start();


$contact=$_SESSION['contact'];
 $result= mysqli_query($conn,"SELECT fname FROM registration WHERE contact='$contact'");
  while($row1 = mysqli_fetch_array($result))
{  
     $name=$row1['fname'];

}


?>

<h1>  thanks <?php  echo"".$name  ?> For sending your package </h1>


</html>