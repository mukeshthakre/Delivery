<?php
include ('homeh.php');
require 'dataconn.php';

session_start();
$c=$_SESSION['charge'];

$pack_size=$_SESSION['pack_size'];
$pack_type=$_SESSION['pack_type'];
$pack_price=$_SESSION['product_price'];
$pname=$_SESSION['pname'];

$randNumber=rand();
$_SESSION['randNumber']=$randNumber;

 


$name=$_SESSION['name'];
$contact1=$_SESSION['contact1'];
$houseno=$_SESSION['houseno'];
$area=$_SESSION['area'];
$zipcode=$_SESSION['zipcode'];
$city=$_SESSION['city'];
$state=$_SESSION['state'];

 $name1=$_SESSION['name1'];
 $contact2=$_SESSION['contact2'];
 $houseno1=$_SESSION['houseno1'];
 $area1=$_SESSION['area1'];
 $zipcode1=$_SESSION['zipcode1'];
 $city1=$_SESSION['city1'];
 $state1=$_SESSION['state1'];
 $curr_date=0;
 $curr=0;
 $email;

               
$next_date=date('Y-m-d', strtotime("+3 days")); 
$curr_date=date('Y-m-d');

 $contact=$_SESSION['contact'];
 $result= mysqli_query($conn,"SELECT user_idd, email FROM registration WHERE contact='$contact'");
 while ($row1 = mysqli_fetch_array($result))
{  
     $user_idd=$row1['user_idd'];
     $email1=$row1['email'];

}

$c_pay="Card Payment";
$u_pay="UPI Payment";
$cash_pay="COD Payment";

if(isset($_POST['submit']))
{
  $cardno = $_POST['cardno'];
  $cvvno = $_POST['cvvno'];
  $upiid =$_POST['upiid'];
  $cashon =$_POST['cashon'];
  
  $month = $_POST['month'];
  $year = $_POST['year'];

  $subject='Your Package sent Successfully';

  $headers="From: mukeshthakre015@gmail.com" . "\r\n" .
"CC: somebodyelse@example.com";

  $message='Thanks for sending your Package, your package will be receive on '.$next_date.'
   You can track your order through this tracking id is' .$randNumber ;

   $accept = $_POST['pay'];
       if ($accept == "card") 
      {        

        if(strlen($cardno)== 16 && strlen($cvvno)== 3 )
        {
         
          $sql = "INSERT INTO payment VALUES ('','$c_pay','$cardno','$cvvno','$month','$year','','$c','$user_idd','$randNumber')";
          (mysqli_query($conn, $sql));

          $sql3 = "INSERT INTO packtrack VALUES ('','$pack_type','$pname','$pack_size','$pack_price','$randNumber','$user_idd','$curr_date','$next_date')";
          (mysqli_query($conn, $sql3));

           $subject='Your Package will send Successfully';

            $headers="From: mukeshthakre210@gmail.com" . "\r\n" ;

            $message='Thanks for sending your Package, You have done card payment. your package will be receive on  '.$next_date. '.'.' '.
                     'Your package will pickup from'.' ' .$city. ' '.'and will sent on'.' '.$city1.'. '.'You can track your order through this tracking id is'.' ' .$randNumber.'. ' ;
          
          
            $to      = 'mukeshrameshthakre@gmail.com';
            $subject1 = 'the subject';
           $message1 = 'hello';
           $headers = 'From: mukeshthakrebabai@gmail.com' . "\r\n" .
                     'Reply-To: mukeshthakrebabai@gmail.com' . "\r\n" .
                     'X-Mailer: PHP/' . phpversion();

            mail($email1, $subject, $message, $headers);
        $sql1 = "INSERT INTO sender_address VALUES ('','$name','$contact1','$houseno','$area','$zipcode','$city','$state','$user_idd','$randNumber')";
           (mysqli_query($conn, $sql1));

        $sql2 = "INSERT INTO receiver_address VALUES ('','$name1','$contact2','$houseno1','$area1','$zipcode1','$city1','$state1','$user_idd','$randNumber')";
           (mysqli_query($conn, $sql2));

        $sqll = "INSERT INTO trackreport VALUES ('$user_idd','$randNumber','$city','$city1','$curr_date','$next_date')";
          (mysqli_query($conn, $sqll));   
                  

                   echo "<script>
            alert('thanks for Doing Card Payment');
                    window.location.href='thankss.php';  
                  </script>";

                 
          }
          else
          {
            echo "<script>
            alert('Please enter correct card Details');
                    window.location.href='Payment.php';  
                  </script>";

          }
        
      }
    else  if ($accept == "upi") 
      {  
          

          $sql = "INSERT INTO payment VALUES ('','$u_pay','','','','','$upiid','$c','$user_idd','$randNumber')";
          (mysqli_query($conn, $sql));
          $sql3 = "INSERT INTO packtrack VALUES ('','$pack_type','$pname','$pack_size','$pack_price','$randNumber','$user_idd','$curr_date','$next_date')";
          (mysqli_query($conn, $sql3));
          echo "<script>
            alert('thanks for Doing UPI Payment');
                    window.location.href='thankss.php';  
                  </script>";


          $subject='Your Package will send Successfully';
          $headers="From: mukeshthakre210@gmail.com" . "\r\n" ;
          $message='Thanks for sending your Package, You have done upi payment.your package will be receive on  '.$next_date. '.'.' '.
                     'Your package will pickup from'.' ' .$city. ' '.'and will sent on'.' '.$city1.'. '.'You can track your order through this tracking id is'.' ' .$randNumber.'. ' ;
          
          
         
          
         
          $headers = 'From: mukeshthakrebabai@gmail.com' . "\r\n" .
                     'Reply-To: mukeshthakrebabai@gmail.com' . "\r\n" .
                     'X-Mailer: PHP/' . phpversion();

            mail($email1, $subject, $message, $headers);
            $sql1 = "INSERT INTO sender_address VALUES ('','$name','$contact1','$houseno','$area','$zipcode','$city','$state','$user_idd','$randNumber')";
      (mysqli_query($conn, $sql1));

      $sql2 = "INSERT INTO receiver_address VALUES ('','$name1','$contact2','$houseno1','$area1','$zipcode1','$city1','$state1','$user_idd','$randNumber')";
      (mysqli_query($conn, $sql2));

      $sqll = "INSERT INTO trackreport VALUES ('$user_idd','$randNumber','$city','$city1','$curr_date','$next_date')";
          (mysqli_query($conn, $sqll));
         echo "<script>
            alert('thanks for Doing Card Payment');
                    window.location.href='thankss.php';  
                  </script>";
                  
           
      
        
      }
    else if ($accept == "pod") 
      {   
         if(strlen($cashon)!=0)   
         {

         $sql = "INSERT INTO payment VALUES ('','$cash_pay','','','','','','$c','$user_idd','$randNumber')";
          (mysqli_query($conn, $sql));
          $sql3 = "INSERT INTO packtrack VALUES ('','$pack_type','$pname','$pack_size','$pack_price','$randNumber','$user_idd','$curr_date','$next_date')";
          (mysqli_query($conn, $sql3));


          $result= mysqli_query($conn,"SELECT user_idd, email FROM registration WHERE contact='$contact'");
         while ($row1 = mysqli_fetch_array($result))
           {  
              $user_idd=$row1['user_idd'];
                $email1=$row1['email'];

            }

          $subject='Your Package will send Successfully';

          $headers="From: mukeshthakre210@gmail.com" . "\r\n" ;

         $message='Thanks for sending your Package,  You have done POD payment. your package will be receive on  '.$next_date. '.'.' '.
                     'Your package will pickup from'.' ' .$city. ' '.'and will sent on'.' '.$city1.'. '.'You can track your order through this tracking id is'.' ' .$randNumber.'. ' ;
          
          
          $to      = 'mukeshrameshthakre@gmail.com';
          $subject1 = 'the subject';
          $message1 = 'hello';
          $headers = 'From: mukeshthakrebabai@gmail.com' . "\r\n" .
                     'Reply-To: mukeshthakrebabai@gmail.com' . "\r\n" .
                     'X-Mailer: PHP/' . phpversion();

            mail($email1, $subject, $message, $headers);
          $sql1 = "INSERT INTO sender_address VALUES ('','$name','$contact1','$houseno','$area','$zipcode','$city','$state','$user_idd','$randNumber')";
          (mysqli_query($conn, $sql1));

          $sql2 = "INSERT INTO receiver_address VALUES ('','$name1','$contact2','$houseno1','$area1','$zipcode1','$city1','$state1','$user_idd','$randNumber')";
          (mysqli_query($conn, $sql2));

          $sqll = "INSERT INTO trackreport VALUES ('$user_idd','$randNumber','$city','$city1','$curr_date','$next_date')";
          (mysqli_query($conn, $sqll));

           echo "<script>
            alert('thanks for Doing Card Payment');
                    window.location.href='thankss.php';  
                  </script>";
                 
                    
        }
         else
        {
         echo "<script>
            alert('Please enter correct  Details');
                    window.location.href='Payment.php';  
                  </script>";

        }



       
      }
      else
        {
         echo "<script>
            alert('Please select payment option');
                    window.location.href='Payment.php';  
                  </script>";

        }



      
 }
        
 ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Form</title>
     <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    
</head>

<body>
    <div class="wrapper">
        <h2>Payment Form</h2>
        <form method="POST">
           <div class="input-group">
                <div class="input-box">
                    <h4>Payment Using Card</h4>
                    <input type="radio" name="pay" id="bc1" value="card" class="radio" onclick="text(0)" checked>
                    <label for="bc1"><span><i class="fa fa-cc-visa"></i> Credit Card</span></label>
                    </div>
            </div>
            <div class="input-group" >
                <div class="input-box">
                    <input type="tel" name="cardno" placeholder="Card Number" pattern="[0-9]{16}" maxlength="16" minlength="16"  title="Enter 16 digit Card no. only" class="name" id="card"  >
                    <i class="fa fa-credit-card icon" id="card5"></i>
                </div>
            </div>
            <div class="input-group" id="card4">
                <div class="input-box" >
                    <input type="number" placeholder="Card CVC" name="cvvno" pattern="[0-9]{3}" maxlength="3" minlength="3"  title="Enter 3 digit CVV only" class="name"  >
                    <i class="fa fa-user icon"></i>
                </div>
                <div class="input-box" >
                    <select name="month">
                        <option name="m" value="01">01</option>
                        <option name="m" value="02">02</option>
                        <option name="m" value="03">03</option>
                        <option name="m" value="04">04</option>
                        <option name="m" value="05">05</option>
                        <option name="m" value="06">06</option>
                        <option name="m" value="07">07</option>
                        <option name="m" value="08">08</option>
                        <option name="m" value="09">09</option>
                        <option name="m" value="10">10</option>
                        <option name="m" value="11">11</option>
                        <option name="m" value="12">12</option>
                    </select>
                    <select name="year">
                        <option name="y" value="2027">2027</option>
                        <option name="y" value="2028">2028</option>
                        <option name="y" value="2029">2029</option>
                        <option name="y" value="2030">2030</option>
                    </select>
                </div>
            </div>
            <div class="input-group">
                <div class="input-box">
                    <h4>Payment Using UPI</h4>
                    <input type="radio" name="pay" id="bc2" value="upi" class="radio2" onclick="text(1)" >
                    <label for="bc2" style=" margin-bottom: 10px;"><span><i class="fa fa-cc-paypal"></i> UPI</span></label>
                    <input type="Text" placeholder="UPI ID" pattern="^[a-zA-Z0-9.-]{2, 256}@[a-zA-Z][a-zA-Z]{2, 64}$"   title="Please Enter Correct Upi id" name="upiid" class="name2" id="card1">
                  </div>
                </div>
                <div class="input-group">
                <div class="input-box">
                    <h4>Pay On Delivery</h4>
                    <input type="radio" name="pay" id="bc3"  value="pod" class="radio2" onclick="text(2)">
                    <label for="bc3" style=" margin-bottom: 10px;"><span><i class="fa fa-cc-paypal"></i> Pay On Delivery</span></label>
                    <input type="Text" placeholder="" name="cashon" class="name2" value="<?php echo"".$c; ?>" id="card2" readonly>
                  </div>
                  
                </div>
                <h2>Your Total charges is <b><?php echo"".$c; ?></b></h2>
            <div class="input-group">
                <div class="input-box">
                    <button type="submit" name="submit">Continue</button>
                </div>
            </div>
        </form>
    </div>
    <style>
      body{
        background:#80808052;
      }
      .wrapper{
  background-color: #fff;
  width: 500px;
  padding: 25px;
  margin: 25px auto 0;
  box-shadow: 0px 0px 20px rgba(0,0,0,0.5);
}
.wrapper h2{
  background-color: #fcfcfc;
  color: #7ed321;
  font-size: 24px;
  padding: 10px;
  margin-bottom: 20px;
  text-align: center;
  border: 1px dotted #333;
}
h4{
  padding-bottom: 5px;
  color: #7ed321;
}
.input-group{
  margin-bottom: 8px;
  width: 100%;
  position: relative;
  display: flex;
  flex-direction: row;
  padding: 5px 0;
}
.input-box{
  width: 100%;
  margin-right: 12px;
  position: relative;
}
.input-box:last-child{
  margin-right: 0;
}
.name{
  padding: 14px 10px 14px 50px;
  width: 100%;
  background-color: #fcfcfc;
  border: 1px solid #00000033;
  outline: none;
  letter-spacing: 1px;
  transition: 0.3s;
  border-radius: 3px;
  color: #333;
}
.name:focus, .dob:focus{
  -webkit-box-shadow:0 0 2px 1px #7ed32180;
  -moz-box-shadow:0 0 2px 1px #7ed32180;
  box-shadow: 0 0 2px 1px #7ed32180;
  border: 1px solid #7ed321;
}
.name2{
  padding: 14px 10px 14px 50px;
  width: 100%;
  background-color: #fcfcfc;
  border: 1px solid #00000033;
  outline: none;
  letter-spacing: 1px;
  transition: 0.3s;
  border-radius: 3px;
  color: #333;
}
.name2:focus, .dob:focus{
  -webkit-box-shadow:0 0 2px 1px #7ed32180;
  -moz-box-shadow:0 0 2px 1px #7ed32180;
  box-shadow: 0 0 2px 1px #7ed32180;
  border: 1px solid #7ed321;
}
.input-box .icon{
  width: 48px;
  display: flex;
  justify-content: center;
  align-items: center;
  position: absolute;
  top: 0px;
  left: 0px;
  bottom: 0px;
  color: #333;
  background-color: #f1f1f1;
  border-radius: 2px 0 0 2px;
  transition: 0.3s;
  font-size: 20px;
  pointer-events: none;
  border: 1px solid #00000033;
  border-right: none;
}
.name:focus + .icon{
  background-color: #7ed321;
  color: #fff;
  border-right: 1px solid #7ed321;
  border: none;
  transition: 1s;
}
.dob{
  width: 30%;
  padding: 14px;
  text-align: center;
  background-color: #fcfcfc;
  transition: 0.3s;
  outline: none;
  border: 1px solid #c0bfbf;
  border-radius: 3px;
}
.radio{
  display: none;
}
.radio2{
  display: none;
 
}
.input-box label{
  width: 50%;
  padding: 13px;
  background-color: #fcfcfc;
  display: inline-block;
  float: left;
  text-align: center;
  border: 1px solid #c0bfbf;
}
.input-box label:first-of-type{
  border-top-left-radius: 3px;
  border-bottom-left-radius: 3px;
  border-right: none;
}
.input-box label:last-of-type{
  border-top-right-radius: 3px;
  border-bottom-right-radius: 3px;
}
.radio:checked + label{
  background-color: #7ed321;
  color: #fff;
  transition: 0.5s;
}
.radio2:checked + label{
  background-color: #7ed321;
  color: #fff;
  transition: 0.5s;
  
}
.input-box select{
  display: inline-block;
  width: 50%;
  padding: 12px;
  background-color: #fcfcfc;
  float: left;
  text-align: center;
  font-size: 16px;
  outline: none;
  border: 1px solid #c0bfbf;
  cursor: pointer;
  transition: all 0.2s ease;
}
.input-box select:focus{
  background-color: #7ed321;
  color: #fff;
  text-align: center;
}
button{
  width: 100%;
  background: transparent;
  border: none;
  background: #7ed321;
  color: #fff;
  padding: 15px;
  border-radius: 4px;
  font-size: 16px;
  transition: all 0.35s ease;
}
button:hover{
  cursor: pointer;
  background: #5eb105;
}

    </style>

    <script>
      function text(x){
        if (x == 0) 
        {
          
          document.getElementById("card1").style.display ="none";
          document.getElementById("card2").style.display ="none";
          document.getElementById("card").style.display = "block";
          document.getElementById("card4").style.display ="block";
          document.getElementById("card5").style.display ="block";
         
        } 
        
        else if (x == 1) 
        {
          
          document.getElementById("card1").style.display ="block";
          document.getElementById("card2").style.display ="none";
          document.getElementById("card").style.display ="none";
          document.getElementById("card4").style.display ="none";
          document.getElementById("card5").style.display ="none";
         

        } 
        
        else if (x == 2) 
        {
          
          document.getElementById("card2").style.display ="block";
          document.getElementById("card1").style.display ="none";
          document.getElementById("card").style.display ="none";
          document.getElementById("card4").style.display ="none";
          document.getElementById("card5").style.display ="none";
        } 
        
      }
      </script>
</body>

</html>