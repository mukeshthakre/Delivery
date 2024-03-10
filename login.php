<!DOCTYPE html>
<html>
<?php
require 'dataconn.php';
if(isset($_POST['submit']))
 {
    $contact = $_POST['contact'];
    $password = $_POST['password'];
    $result= mysqli_query($conn,"SELECT contact,pass FROM registration WHERE contact='$contact' and pass='$password'");
    $row= mysqli_fetch_assoc($result);
    
    if($contact=="9422752449" && $password=="admin")
    {
        echo "<script>
            alert('Admin Logged In successfully');
                    window.location.href='adminhome.php';  
                  </script>";
    }

    else if(mysqli_num_rows($result)>0) {

        if($password==$row["pass"])
        {
            session_start();
            $_SESSION['contact']=$contact;

           echo "<script>
            alert('Logged In successfully');
                    window.location.href='home1.php';  
                  </script>";

        }
        else
        {
          echo "<script>alert('Wrong Password');</script>";
        }

    }
    else
    {
         echo "<script>alert('User not registered');</script>";
    }

}


?>
<head>
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body background="login4.avif">
    <div class="container">
        <form method="POST">
            <h1>Login</h1>
            <label for="contactt">Mobile No.:</label>
            <input type="text" id="contact" name="contact" pattern="[7-9]{1}[0-9]{9}"   title="Enter 10 digit number only" placeholder="Enter your mobile no." pattern="[-0-9]+" required>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" placeholder="Enter your password"  required>
            <input type="submit" name="submit" value="Login">
            <br/>
            <br/>
            <br/>
            <a href="registration.php">New Registration</a>
        </form>
    </div>
</body>
<style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, Helvetica, sans-serif;
}

a{
     margin-left: 30%;
}

body[background]{
    background-size:cover ;

    background-repeat:no-repeat ;
    background-position: center center;
}


.container {
    margin-top: 1%;
    margin-left: 30%;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 30;

}

form {
    width: 400px;
    padding: 40px;
    background-color: #f2f2f2;
    border-radius: 10px;
    box-shadow: 0px 0px 10px 1px rgba(0,0,0,0.5);

}

h1 {
    text-align: center;
    margin-bottom: 30px;
    color: green;
    
}

label {
    display: block;
    margin-bottom: 10px;
    font-size: 65;
}

input[type="text"], input[type="password"] {
    width: 100%;
    padding: 10px;
    border-radius: 5px;
    border: none;
    margin-bottom: 30px;
}

input[type="submit"] {
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    margin-left: 115px;
}

input[type="submit"]:hover {
    background-color: #3e8e41;


}
    </style>
   
</html>
