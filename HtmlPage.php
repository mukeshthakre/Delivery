<?php

if(isset($_POST['submit'])) {
            echo "This is Button1  is selected";
        }
 ?>

<html>
<h1 >Delhivery</h1>
 


<form method="POST" >
  <h2>Registration For User</h2>
  <div class="form-group">
    <label for="fname">First Name:</label>
    <input type="text" id="username" name="username" required>
  </div>
  <div class="form-group">
    <label for="lname">Last Name:</label>
    <input type="text" id="username" name="username" required>
  </div>
  <div class="form-group">
    <label for="username">Mobile No.:</label>
    <input type="text" id="username" name="username" required>
  </div>
  <div class="form-group">
    <label for="email">Email Id.:</label>
    <input type="email" id="email" name="email" required>
  </div>
  <div class="form-group">
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>
  </div>
  
  <button type="submit" name="submit" value="submit" onclick="show()">Submit</button>
</form>


  

<style>
  form {
  max-width: 400px;
  margin: 0 auto;
  padding: 20px;
  border: 1px solid #ccc;
  border-radius: 5px;
  font-family: Arial, sans-serif;
 
}

h1{
text-align: center;
  font-weight: bold;
  color: green;
  size:100;
  display: block;
}
h2 {
  text-align: center;
  margin-top: 0;
}

.form-group {
  margin-bottom: 20px;
}

label {
  display: block;
  font-weight: bold;
}

input[type="text"],
input[type="email"],
input[type="password"] 
{
  display: block;
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
  font-size: 16px;
}

button[type="submit"] {
  display: block;
  width: 100%;
  padding: 10px;
  margin-top: 10px;
  border: none;
  background-color: #4CAF50;
  color: #fff;
  font-size: 16px;
  border-radius: 5px;
  cursor: pointer;
}

button[type="submit"]:hover {
  background-color: #3e8e41;
}

  </style>
</html>