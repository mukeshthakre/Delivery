<?php


include ('homeh.php');
require 'dataconn.php';

$a=0;
$b=0;
$c=0;

     

    


if(isset($_POST['submit']))
 {
     
     $zipcode = $_POST['Pincode1'];
     $zipcode1= $_POST['Pincode2'];
     $product_price = $_REQUEST['price'];
     $result= mysqli_query($conn,"SELECT charge FROM package WHERE s_pincode='$zipcode' and r_pincode='$zipcode1'");
    while ($row1 = mysqli_fetch_array($result))
    {  
     $a=$row1['charge'];

    }
    
    $answer = $_POST['r'];  
    if ($answer == "xsmall") 
    {        
       $b=50;
       $c=$a+$b;     
   }
   else  if ($answer == "small")  
    {      
        $b=75; 
         $c=$a+$b;      
    }  
   else  if($answer == "medium")
   {
     $b=100;
      $c=$a+$b;  
   }
   else if($answer == "large")
   {
     $b=120;
      $c=$a+$b;
   }

   
}
?>
<html>
 <body>
  <br>
   <form method="POST">
    
   <h1>Please Check Your Package Cost</h1>
   <span class="field__label" for="zipcode">Sender Zip code</span>
   <input type="text" class="price" name="Pincode1">
   
   <h4 class="h4">To</h4>
   <span class="field__label" for="zipcode">Receiver Zip code</span>
   <input  type="text" class="price" name="Pincode2" >
     
     <h3 class="h1">Please select Package Weight</h3>
     
     <div class="Wt">
     <div class="box">
    <input type="radio" name="r" value="xsmall">
    X-Small<br/>
    Wt : 500gm
    </div>
    <div class="box">
    <input type="radio" name="r" value="small">
     Small<br/>
    Wt : 500gm-2kg
    </div>
    <div class="box">
    <input type="radio" name="r" value="medium">  
    Medium<br/>
    Wt : 2kg-5kg
    </div>
    <div class="box">
    <input type="radio" name="r" value="large">  
    Large<br/>
    Wt : 5kg-10kg
    </div>
    
    <br>
</div>
<br/>
<div class="d3">
    <h3> Select Your Product Categories</h3>
      <select class="select-box">
        <option value=""> </option>
        <option value="Electronic">Electronic</option>
        <option value="Electric">Electric</option>
        <option value="Beauty">Beauty</option>
        <option value="Books">Books</option>
        <option value="Baby">Baby</option>
        <option value="Computer & Accessories">Computer & Accessories</option>
        <option value="Garden & Outdoors">Garden & Outdoor</option>
        <option value="Watches">watches</option>
      </select>
      
     <h3>Enter Your Product Price</h3>
     <input type="Number" name="price" value="" class="price">

   </div>
     
      <br><br>
      <input type="submit" name="submit" value="CHECK HERE" class="button" onclick="text()">
      <h2>Your Total charge to send package <?php echo"".$c; ?>  </h2>
   </form>
   <style>
    .h4{
      margin-left: 16%;
    }
    .h1{
      margin-left: 13%;
    }
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
      margin-left:16%;
    }
    .box{
      padding:10px;
    }
     .select-box{
      Padding:5px;
      width:40%;
      border-radius: 50%;
      border-radius: 10px;
     }
     .button {
  background-color: #000;
  text-transform: uppercase;
  margin-left:30%;
  font-size: 0.8rem;
  font-weight: 600;
  display: block;
  color: #fff;
  width: 50%;
  padding: 1rem;
  border-radius: 0.25rem;
  border: 0;
  cursor: pointer;
  outline: 0;
}
.price{
     Padding:5px;
      width:30%;
      border-radius: 50%;
      border-radius: 10px;
}
.d3{

  margin-left:12%;
}
    </style>

    <script>
      function text()
      {

      }

    </script>
 </body>
</html>