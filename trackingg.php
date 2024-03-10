<!DOCTYPE html>
<?php
include ('homeh.php');
require 'dataconn.php';

    $pack_type="";
     $pack_size="";
     $pack_price="";
     $pname="";
     $user_idd="";
     $trackid="";
     $s_city="";
     $r_city="";

session_start();
$user_idd=$_SESSION['user_idd'];
$trackid=$_SESSION['trackid'];
$result= mysqli_query($conn,"SELECT pack_type,pro_name, pack_size, pack_price FROM packtrack WHERE user_idd='$user_idd' and pack_track_id='$trackid'");
 while ($row1 = mysqli_fetch_array($result))
{  

     
        $pack_type=$row1['pack_type'];
      $pname=$row1['pro_name'];
     
     $pack_size=$row1['pack_size'];
     $pack_price=$row1['pack_price'];
     
    
}

$result1= mysqli_query($conn,"SELECT s_city FROM sender_address WHERE user_idd='$user_idd' and pack_track_id='$trackid'");
 while ($row2 = mysqli_fetch_array($result1))
{  
     $s_city=$row2['s_city'];
     
}

$result2= mysqli_query($conn,"SELECT r_city FROM receiver_address WHERE user_idd='$user_idd' and pack_track_id='$trackid'");
 while ($row3 = mysqli_fetch_array($result2))
{  
     $r_city=$row3['r_city'];
     
}



?>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Bootstrap 4.3.1 CDN -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    <!-- FontAwesome 4.7.0 CDN -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
      integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    
    <title>Document</title>
  </head>
  <body>
    <div class="container px-1 px-md-4 py-5 mx-auto">
      <div class="card">
        <div class="row d-flex justify-content-between px-3 top">
          <div class="d-flex">
            <h5>
              YOUR TRACKING ID:
              <span class="text-primary font-weight-bold"><?php    $trackid=$_SESSION['trackid']; echo "$trackid"; ?></span>
            </h5>
          </div>
          <div class="d-flex flex-column text-sm-right">
            <p class="mb-0">
              Expected Arrival <span class="font-weight-bold"> 
                <!--Date inserted -->
                <script>
                var today = new Date();
                var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+(today.getDate()+3);
                document.write(date);
                </script></span>
            </p>
           
          </div>
        </div>
        <!-- Add class "active" to progress -->
        <div class="row d-flex justify-content-center">
          <div class="bar">
            <div class="in" id="nk">
             
            </div>
          </div>
        </div>
        <br/>
        <div>
            <pre>
           <b>  From </b><?php echo "".$s_city;    ?>                                                                                               <b>To </b><?php  echo "".$r_city;   ?>
           </pre>
        </div> 
    
        <div>
           
        </div>


        <div class="row justify-content-between top">
          <div class="row d-flex icon-content">
            <img src="./images/CheckList.png" alt="" class="icon" />
            <div class="d-flex flex-column">
              <p class="font-weight-bold">Order <br />Processed</p>
            </div>
          </div>
          <div class="row d-flex icon-content">
            <img src="./images/Delivery.png" alt="" class="icon" />
            <div class="d-flex flex-column">
              <p class="font-weight-bold">Order <br />Shipped</p>
            </div>
          </div>
          <div class="row d-flex icon-content">
            <img src="./images/Shipping.png" alt="" class="icon" />
            <div class="d-flex flex-column">
              <p class="font-weight-bold">Order <br />En Route</p>
            </div>
          </div>
          <div class="row d-flex icon-content">
            <img src="./images/Home.png" alt="" class="icon" />
            <div class="d-flex flex-column">
              <p class="font-weight-bold">Order <br />Arrival</p>
            </div>
          
            
          </div>

        </div><br>
        <label class="trackl"> Package Category: &nbsp <?php echo "".$pack_type; ?> </label> <br>
        <label class="trackl"> Product name:&nbsp <?php echo "".$pname; ?> </label><br>
        
        <label class="trackl"> Package Size: &nbsp  <?php echo "".$pack_size;  ?>  </label> <br>
        <label class="trackl"> product Price:  &nbsp <?php echo "".$pack_price;  ?></label><br>
        
      </div>
      <a href="homeh.php">
        <input type="button" value="Home" class="btn">
   </a>
    </div>
    
   </body>
   <style>
    @import url("https://rsms.me/inter/inter.css");

    .trackl{

        padding-bottom: 20px;
        margin-left: 90px;
        font-weight: bold;
    }

    b{
           font-weight: bold;
           font-size:17px;
    }
   
    body {
    color: #000;
    overflow-x: hidden;
    
    background: #8c9eff;
    background-repeat: no-repeat;
}

.card {
    z-index: 0;
    background-color: #eceff1;
    padding-bottom: 20px;
    margin-top: 90px;
    margin-bottom: 90px;
    border-radius: 10px;
}

.nk {
    word-wrap: none;
}

.top {
    padding-top: 40px;
    padding-left: 13% !important;
    padding-right: 13% !important;
}


/* Icon progressbar */


/* Progressbar connector */

#progressbar li::after {
    content: '';
    width: 100%;
    height: 12px;
    background-color: #c5cae9;
    position: absolute;
    top: 16px;
    left: 0;
    z-index: -1;
}

#progressbar li:last-child::after {
    border-top-right-radius: 10px;
    border-bottom-right-radius: 10px;
    position: absolute;
    left: -50%;
}

#progressbar li:nth-child(2)::after,
#progressbar li:nth-child(3)::after {
    left: -50%;
}

#progressbar li:first-child::after {
    border-top-left-radius: 10px;
    border-bottom-right-radius: 10px;
    position: absolute;
    left: 50%;
}


/* Color number of the step and the connect tor before it */

#progressbar li.active::before,
#progressbar li.active::after {
    background-color: #651fff;
}

#progressbar li.active::before {
    font-family: FontAwesome;
    content: '\f00c';
}

.icon {
    width: 60px;
    height: 60px;
    margin-right: 15px;
}

.icon-content {
    padding-bottom: 20px;
}

@media screen and (max-width: 992px) {
    .icon-content {
        width: 50%;
    }
}


/* progress bar */

.in {
    animation: fill 180s linear 1;
    height: 100%;
    background-color: green;
}

@keyframes fill {
    0% {
        width: 0%;
    }
    100% {
        width: 100%;
    }
}

.bar {
    border: 1px solid #666;
    height: 30px;
    width: 80%;
}

.btn {
    background: rgb(253, 249, 249);
    margin-left: 47%;
    padding: 10px 30px;
    border-radius: 10px;
    font-weight: 1000;
}





a{
    text-decoration: none;

    

}

li{
    list-style-type: none;
    justify-content: space-between;
    font-size:15px;
    
}

header{
    display: flex;
    flex-direction: row;
    align-items: center;
    padding: 0px 10%;
    background-color: #2C3E50;
    justify-content: space-between;
}

.logo{
    color: #FFF;
    font-weight: 1000;
     font-size: 50px;
}

nav ul{
    display: flex;
    flex-direction: row;
     margin-right:-140px;
}

nav ul li{
    margin-left: 1px;
    margin-right: 1px;
}
nav ul li a{
    color: #FFF;
    display: block;
    padding: 20px 20px;
    border-radius: 1px;
}

nav ul li a:hover{
    color: #DC7633;
}

.cta{
    background-color: #DC7633;
    color: #FFF;
}

.cta:hover{
    background-color: #D35400;
    color: #FFF;
}


   </style>
</html>

