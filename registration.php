<html>
<h1 >Delhivery</h1>
<?php

require 'dataconn.php';

if(isset($_POST['submit'])) 
{
         

        // Taking all 5 values from the form data(input)
        $first_name = $_REQUEST['fname'];
        $last_name = $_REQUEST['lname'];
        $contact = $_REQUEST['contact'];
        $email = $_REQUEST['email'];
        $pass = $_REQUEST['password'];
        $cpass = $_REQUEST['cpassword'];

        
        $duplicate=mysqli_query($conn,"SELECT * FROM registration WHERE contact='$contact' or email='$email'");
        if(mysqli_num_rows($duplicate)>0)
        {
           echo "<script>
            alert('Contact or Email id has alredy taken'); </script>";

        }
        else
        {
          if($pass == $cpass)
          {
            $sql = "INSERT INTO registration VALUES ('','$first_name','$last_name','$contact','$email','$pass')";
            (mysqli_query($conn, $sql));
             echo "<script>
            alert('Registration Completed');
                    window.location.href='login.php';  
                  </script>";
          }
          else
          {
            echo "<script>
            alert('Password Does not match');
                    window.location.href='Registration.php';  
                  </script>";
          }
        }
      
        
        // We are going to insert the data into our registration table
        

        

        // Close connection
        mysqli_close($conn);
      }

        
?>

<form method="POST" >
  <div class="container">
  <h2>Registration For User</h2>
  <div class="form-group">
    <label for="fname">First Name:</label>
    <input type="text" id="username" name="fname" pattern="^[a-zA-Z ]+$" minlength="3" title="Please Enter Alphabets only" required>
  </div>
  <div class="form-group">
    <label for="lname">Last Name:</label>
    <input type="text" id="username" name="lname" pattern="^[a-zA-Z ]+$" minlength="3"title="Please Enter Alphabets only" required>
  </div>
  <div class="form-group">
    <label for="username">Mobile No.:</label>
    <input type="text" id="username" pattern="[7-9]{1}[0-9]{9}"  title="Enter 10 digit number only and correct number" name="contact" required>
  </div>
  <div class="form-group">
    <label for="email">Email Id.:</label>
    <input type="email" id="email" name="email" pattern="[a-z0-9._%+\-]+@[a-z0-9.\-]+\.[a-z]{2,}$" title="Please enter email in format" required>
  </div>
  <div class="form-group">
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
   title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters" required>
  </div>
   <div class="form-group">
    <label for="password">Confirm Password:</label>
    <input type="password" id="cpassword" name="cpassword" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
   title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters" required>
  </div>
  
  <button type="submit" name="submit" value="submit">Submit</button>
  <br/>
  </div>
  <a href="login.php">alredy exit's user</a>
</form>
<script type="text/javascript">
  function allLetter(inputtxt)
  {
   var letters = /^[A-Za-z]+$/;
   if(inputtxt.value.match(letters))
     {
      return true;
     }
   else
     {
     alert("Please provide correct information");
     return false;
     }
  }
</script>


  

<style>
  a{
margin-left: 80;

  }
  form {
  max-width: 350px;
  margin: 0 auto;
  padding: 15px;
  border: 1px solid #ccc;
  border-radius: 5px;
  font-family: Arial, sans-serif;
  align-items: center;
  justify-content: center;
 
}

h1{
text-align: center;
  font-weight: bold;
  color: green;
  font-size: 65;
  display: block;
  margin-bottom: 10;
}

.container {
   
    align-items: center;
    justify-content: center;
     
  }

h2 {
  text-align: center;
  margin-top: 10;
  margin-bottom: 30;
}

.form-group {
  margin-bottom: 20px;
}

label {
  display: block;
  font-weight: bold;
  margin-left:15%;
}

input[type="text"],
input[type="email"],
input[type="password"] 
{
  display: block;
  width: 60%;
  padding: 4px;
  border: 1px solid #ccc;
  border-radius: 5px;
  font-size: 16px;
  margin-left:15%;
}

button[type="submit"] {
  display: block;
  width:60%;
  padding: 8px;
  margin-top: 10px;
  border: none;
  background-color: #4CAF50;
  color: #fff;
  font-size: 16px;
  border-radius: 5px;
  cursor: pointer;
  margin-left:15%;
}

button[type="submit"]:hover {
  background-color: #3e8e41;

}

  </style>

</html>
