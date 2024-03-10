<!DOCTYPE html>
<?php
include ('homeh.php');
require 'dataconn.php';
session_start();
$contact=$_SESSION['contact'];
 $result= mysqli_query($conn,"SELECT user_idd FROM registration WHERE contact='$contact'");
 while ($row1 = mysqli_fetch_array($result))
{  
     $user_idd=$row1['user_idd'];

}

if(isset($_POST['submit']))
{
        $t1 = $_POST['t1'];
        $rate = $_POST['rate'];
      
      
         $sql = "INSERT INTO feedback VALUES ('','$rate','$t1','$user_idd')";
         (mysqli_query($conn, $sql));

         echo "<script>
            alert('Thanks for Providing Your Feedback');
                    window.location.href='feedback.php';  
                  </script>";
          
     
}


?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>feedback form</title>
</head>
<body>
    <form method="POST">
        <h1>Feedback form</h1><br>
        <h4>We would love to hear your thoughts, suggestions, concerns or problem with anything so we can improve!</h4><br>
        <h3>Rating For Delhivery </h3>
        <input type="radio" id="Bad" value="Bad" name="rate">
        <label for="Bad">Bad</label><br>
        <input type="radio" id="Best" value="Best" name="rate">
        <label for="Best">Best</label><br>
        <input type="radio" id="Excellent" value="Excellent" name="rate">
        <label for="Excelllent">Excellent</label><br><br>
        <h3>Describe Your Feedback</h3>
        <input type="textarea" placeholder="Enter Your feedback" pattern="^[a-zA-Z0-9 ]+$" minlength="10"title="Please Enter your feedback only"id="t1" name="t1" rows="5"  value=""required>
         
            
        <br><br>
        <input type="submit" name="submit" class="submit">
    </form>
    <style>
        #t1{

            width: 80%;
            height: 100px;

        }


            body{
                background:whitesmoke;
            }


        *{
            margin: 0;
            padding: 0;
           
        }
        form{
            background-color:rgba(230, 211, 170, 0.849);
            margin: auto;
            border: 1px solid black;
            border-radius: 1.8%;

            width: 50%;
            padding: 3%;
            margin-top: 3%;
        }
        h1{
            text-align: center;
        }
       
        
        .submit{
            padding: 1em 3em;
            border-radius: 15%;
            font-weight: bold;
            background-color: rgb(166, 102, 226);
        }
    </style>
</body>
</html>