<?php
include ('homeh.php');
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>



<div class="container">
  <form action="mailto:mukeshcollegework@gmail.com" method="post" enctype="text/plain">
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

    <label for="country">Contact Number</label>
    <input type="text" id="number" name="Number" placeholder="Contact No.">
      
    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Please Type Your Query..." style="height:200px"></textarea>

    <input type="submit" value="Send">
  </form>
</div>

</body>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
  margin: 10px 391px 10px;
}

</style>
</html>

<?php

include('footer.php')
?>