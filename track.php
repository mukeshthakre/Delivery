<html>

<?php
include ('homeh.php');
require 'dataconn.php';
session_start();
$contact=$_SESSION['contact'];
$user_idd="";

 $result= mysqli_query($conn,"SELECT user_idd FROM registration WHERE contact='$contact'");
 while ($row1 = mysqli_fetch_array($result))
{  
     $user_idd=$row1['user_idd'];
     $_SESSION['user_idd']=$user_idd;

     

}
  
  if (isset($_POST["submit"]))
  {
       $trackid= $_POST["submit"];
        $_SESSION['trackid']=$trackid;
        echo "<script>
                 window.location.href='trackingg.php'; 
                  </script>";
  }

?>

<h1>Track Your Order  </h1>
<body>

	<?php
		$result1= mysqli_query($conn,"SELECT pack_track_id FROM packtrack WHERE user_idd='$user_idd'");

		$rowcount = mysqli_num_rows( $result1 );
      
    
            

		if($rowcount>0)
		{

		
		     while ($row2 = mysqli_fetch_array($result1))
              {  
      	
                echo "<div class='tid'>";
         
      	  
                $user_idd1=$row2['pack_track_id'];
                echo "<a >";

                echo "<form method='POST'> <input type='submit' name='submit'  onclick='text($user_idd1)' value='$user_idd1'> </form>";

                    echo "</a>";
                    echo "</div>";
        
               }
          }
      else
       {
	       echo "<h2> Thanks, you have no orders for tracking </h2>";
        }

 ?>	
</body>




<style>

	input[type="submit"] 
{
	width: 200px;
	height: 85px;
	color:black;
     border:dotted;
     font-size: 35px;
}

body{
background: white;

}

.tid{
	padding-block: 12px;
	display: block;
	border-block: solid;
	width: 100px;
	position: center;
	align-items: center;
}
h1{
	 font-size: 35px;
}
</style>	
<script type="text/javascript">
	     function text($user_idd1)
        {
            
             
                 
        }
</script>
</html>
