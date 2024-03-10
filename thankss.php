<?php
 
 include ('homeh.php');
 require 'dataconn.php';
 $fname="";

 session_start();
$contact=$_SESSION['contact'];


$result= mysqli_query($conn,"SELECT fname FROM registration WHERE contact='$contact'");
 while ($row1 = mysqli_fetch_array($result))
{  
     $fname=$row1['fname'];

}

?>
<html>
 
  <body>
      <div class="card">
        
      <div style="border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:0 auto;">
        <i class="checkmark">✓</i>
      </div>
        <h1>Payment Successful</h1> 
        <p>Your Tracking ID <?php
 $tr=$_SESSION['randNumber']; echo"".$tr;
?> </p>
<h2>Thanks </h2><h1><?php echo"".$fname;  ?></h1> <br/>
        <h2> Your Package will be received on  </h2>
       <b><script>
                var today = new Date();
                var date = (today.getDate()+3)+'-'+(today.getMonth()+1)+'-'+today.getFullYear();
                var date1 = (today.getDate()+'-'+(today.getMonth()+1)+'-'+today.getFullYear());
                document.write(date);
                
                </script></b>

      </div>
      <a href="homeh.php">
        <input type="button" value="Home" class="btn">
   </a>
    <style>

      .btn {
    background: rgb(253, 249, 249);
    margin-left: 47%;
    padding: 10px 30px;
    border-radius: 10px;
    font-weight: 1000;
    margin-bottom: 5%;
}

      h2{
        font-size: 39px;

      }
      
        h1 {
          color: #88B04B;
          font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
          font-weight: 900;
          font-size: 38px;
          margin-bottom: 10px;
        }
        p {
          color: #404F5E;
          font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
          font-size:20px;
          margin: 0;
        }
      i {
        color: #9ABC66;
        font-size: 100px;
        line-height: 200px;
        margin-left:-15px;
      }
      .card {
        background: white;
        padding: 60px;
        border-radius: 4px;
        box-shadow: 0 2px 3px #C8D0D8;
        display: inline-block;
        text-align:center;
        margin: 2% 33%;
      }
    </style>
    
    </body>
</html>

