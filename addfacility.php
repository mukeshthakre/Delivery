

<html>
<?php
 include ('adminmenu.php');
 require 'dataconn.php';
 if(isset($_POST['add'])) 
{
         
        $spincode = $_REQUEST['spincode'];
        $rpincode = $_REQUEST['rpincode'];
        $charges = $_REQUEST['charges'];
        

        $duplicate=mysqli_query($conn,"SELECT * FROM package WHERE s_pincode='$spincode' and r_pincode='$rpincode'");
        if(mysqli_num_rows($duplicate)>0)
        {
           echo "<script>
            alert('Pincode is already Exit'); </script>";

        }
        else
        {
          if($spincode!=$rpincode)
          {
            $sql = "INSERT INTO package VALUES ('$spincode','$rpincode','$charges')";
            (mysqli_query($conn, $sql));
             echo "<script>
            alert('New Facility Added Successfully'); </script>";
          }
          else
          {
            echo "<script>
            alert('Please enter valid pincode');
                    window.location.href='addfacility.php';  
                  </script>";
          }
        }

        // We are going to insert the data into our registration table
        

        

        
      }
    else if(isset($_POST['delete'])) 
      {
         
        $spincode = $_REQUEST['spincode'];
        $rpincode = $_REQUEST['rpincode'];
        $charges = $_REQUEST['charges'];
        

        $duplicate=mysqli_query($conn,"SELECT * FROM package WHERE s_pincode='$spincode' and r_pincode='$rpincode'");
        if(mysqli_num_rows($duplicate)>0)
        {
           
            $sql = "DELETE from package where s_pincode='$spincode' and r_pincode='$rpincode' ";
            (mysqli_query($conn, $sql));
             echo "<script>
            alert(' Facility Deleted Successfully'); </script>";
          

        }
        else
        {
          
            echo "<script>
            alert('Please enter valid pincode');
                    window.location.href='addfacility.php';  
                  </script>";
          
        }

        // We are going to insert the data into our registration table
        

        

        
      }
      

        

      

        // Close connection
        mysqli_close($conn);
?>


<body >
	<h1>Add New Facility </h1>
	<div class="f1">
  <form method="POST">
  	      <div class="form-group" ><br/><br/>
         <label class="label">Sender Pincode</label>
          <input type="number" class="t" name="spincode" pattern="[0-9]{6}" maxlength="6" minlength="6"  title="Enter 6 digit pincode only" required><br/>
        </div>
        <div class="form-group">
         <label class="label">Receiver Pincode</label>
         <input type="number" class="t" name="rpincode" pattern="[0-9]{6}" maxlength="6" minlength="6"  title="Enter 6 digit pincode only" required><br/>
        </div>
        <div class="form-group">
         <label class="label">Delevery Charges</label>
         <input type="number" class="t" name="charges" pattern="^[0-9]+$" required><br/>
       </div>
       <div class="button-group">
       <button type="submit" name="add" value="Add">Add Facility</button>
       <button type="submit" name="delete" value="Delete">Delete Facility</button>
       
       

 

       </div>

  </form>
</div>

</body>
<style>
	.button-group
	{
      
	}
	.b
	{
        margin: 3 auto;
		align-items: center;
		justify-content: center;
		display: inline-block;
		size: 10px;
	}
.f1{
	display: grid;
  background-color: white;	
  max-width: 500px;
  max-height: 80%;
  margin: 0 auto;
  padding: 60px;
  border: 1px solid #ccc;
  border-radius: 7px;
  font-family: Arial, sans-serif;
  align-items: center;
  justify-content: center;
}

.label{
	padding: 15px;

}

input[type="number"]
{
	
  display: grid;

	

}

body{
    
	background-color: lightgray;
}

.form-group {
  margin-bottom: 20px;
}

h1{
	text-align: center;
  margin-top: 10;
  margin-bottom: 30;
}


</style>



</html>