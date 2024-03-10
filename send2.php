<?php


include ('homeh.php');
require 'dataconn.php';
$a=0;
$b=0;
$c=0;

session_start();
$zipcode=$_SESSION['zipcode'];
$zipcode1=$_SESSION['zipcode1'];

$product_price=0;


$result= mysqli_query($conn,"SELECT charge FROM package WHERE s_pincode='$zipcode' and r_pincode='$zipcode1'");
while ($row1 = mysqli_fetch_array($result))
{  
     $a=$row1['charge'];

}
 
 if(isset($_POST['submit']))
 {
     $product_price = $_REQUEST['price'];
     $pname=$_REQUEST['pname'];
    
    $answer = $_POST['r'];  
    if ($answer == "xsamll") 
    {        
       $b=50;
       $c=$a+$b;

       $pack_size="xsmall";
       echo "<script>window.location.href='payment.php';  
                  </script>";
      
        
   }
   else  if ($answer == "samll")  
    {      
        $b=75; 
         $c=$a+$b;

         $pack_size="small";
         echo "<script>window.location.href='payment.php';  
                  </script>";
        
        
          
    }  
   else  if($answer == "medium")
   {
     $b=100;
      $c=$a+$b;

      $pack_size="medium";
     echo "<script>window.location.href='payment.php';  
                  </script>";
   }
   else if($answer == "large")
   {
     $b=120;
      $c=$a+$b;

      $pack_size="large";
      echo "<script>window.location.href='payment.php';  
                  </script>";

   }
   else{
echo "<script>
            alert('Please select size of product');
                    window.location.href='payment.php';  
                  </script>";

   }

   $ans = $_POST['pack_typ'];  
   
   
   $_SESSION['product_price']=$product_price;
   $_SESSION['pack_type']= $ans; 
   $_SESSION['pack_size']= $pack_size;
   $_SESSION['charge']=$c;
   $_SESSION['pname']=$pname;
  


 }

?>

<html>
 <body>
  <br>
   <form method="POST">
    <h1></h1>

   
    <h1>Please Select Your Package Details</h1>
    <img src="bgnk2.jpg">
     
     <h3>Please select Package Weight</h3>
     
     <div class="Wt">
     <div class="box">
    <input type="radio" name="r" id="xsamll"  value="xsamll">
    X-Small<br/>
    Wt : 500gm
    </div>
    <div class="box">
    <input type="radio" name="r" id="samll" value="samll">
     Small<br/>
    Wt : 500gm-2kg
    </div>
    <div class="box">
    <input type="radio" name="r" id="medium" value="medium">  
    Medium<br/>
    Wt : 2kg-5kg
    </div>
    <div class="box">
    <input type="radio" name="r" id="large" value="large">  
    Large<br/>
    Wt : 5kg-10kg
    </div>
    <br/>
    <br/>
</div>
    <h3> Select Your Product Categories</h3>
      <select class="select-box" name="pack_typ" required>
        <option value=""> </option>
        <option value="Electronic" name="p">Electronic</option>
        <option value="Electric" name="p">Electric</option>
        <option value="Beauty" name="p">Beauty</option>
        <option value="Books" name="p">Books</option>
        <option value="Baby" name="p">Baby</option>
        <option value="Computer & Accessories" name="p">Computer & Accessories</option>
        <option value="Garden & Outdoors" name="p">Garden & Outdoor</option>
        <option value="Watches" name="p">watches</option>
      </select><br/><br/>
      
     <h3>Enter Your Product Name</h3>
     <input type="text" name="pname"  pattern="^[a-zA-Z]+$"  title="Please Enter Correct name" class="price"  required>
     <br/>


      <br/>
     <h3>Enter Your Product Price</h3>
     <input type="Number" name="price" pattern="^[0-9]+$" maxlength="3" minlength="6"  title="Enter  digit number only" class="price" required>
     <div class="tacbox">
        <br>
      <input id="checkbox" type="checkbox" required />
     <label for="checkbox"> I agree with the Terms&Conditions of use ,guarantee <br/> that the shipment does not contain any Restricted Items <br/>and Meant for personal use only.  <a href="#">Terms and Conditions</a>.</label>
     </div>
      <br><br>
      <button class="button" onclick=" checkButton()" name="submit" >Continue</button>
      
   </form>

   <style>
    body{
      background:#80808052;
    }
    form{
     margin: auto;
     width: 41%;
     /* border: 3px solid #656762; */
     padding: 10px;
     text-align: center;
     border-radius: 5%;

    }
    img{
      height:200px;
      width:250px;
      border-radius: 50%;

    }
    .wt{
      display:inline-flex;
    }
    .box{
      padding:14px;
      
    }
     .select-box{
      Padding:5px;
      width:50%;
      border-radius: 50%;
      border-radius: 10px;
     }
     .button {
  background-color: #000;
  text-transform: uppercase;
  font-size: 0.8rem;
  font-weight: 600;
  display: block;
  color: #fff;
  width: 60%;
  padding: 1rem;
  border-radius: 0.25rem;
  border: 0;
  cursor: pointer;
  outline: 0;
   margin-left: 23%;
 }
.price{
     Padding:5px;
      width:50%;
      border-radius: 50%;
      border-radius: 10px;
}
    </style>
 </body>
 
</html>