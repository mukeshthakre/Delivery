
<!doctype html>
<?php
include ('adminmenu.php');
$sn=1;

?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  

</head>
  <body>
  
  <section class="py-5">
   <div class="container">
    <div class="row justify-content-center">
     <div class="col-md-12">
      <div class="card">
        <div class="card-header">
            <h5>Registred User:</h5>
        </div>
       <div class="card-body">
       <form action="" method="GET">

<div class="row">

<div class="col-md-4">

<div class="form-group">

&nbsp;&nbsp;<label for="">Enter User Id</label>

<input type="number" name="t1" value="" class="form-control" placeholder="Enter User Id">

</div>

</div>



<div class="col-md-4">

<div class="form-group">

<label for="">Check</label><br>

<button type="submit" class="btn btn-primary">Check</button>
<button type="submit" name="submitt" class="btn btn-primary">All Users</button>

</div>

</div>

</div>
<section class="py-5">

<div class="container">

<div class="row justify-content-center">

<div class="col-md-12">

<div class="card">


</div>

<div class="card mt-3">

<div class="card-body">

<h6>User List</h6>

<hr>

<table class="table table-bordered table-striped"> table-b

<thead>

<tr>

          
         <th>User_id</th>
         <th>fanme</th>
         <th>lname</th>
         <th>Contact</th>
         <th>email</th>
         

</tr>

</thead>
<tbody>
    <?php
    if(isset($_GET['submitt'])){
      
        require 'dataconn.php';
        $sql="SELECT * FROM registration";
         $query1= mysqli_query($conn,$sql);
        if(mysqli_num_rows($query1)>0)
      {
          
          foreach($query1 as $row)
          {
            //echo $row['track_id'].",  ";
   
            ?>
   
   <tr>
      
      

      <td><?php echo $row['user_idd']; ?></td>
<td><?php echo $row['fname']; ?></td>

<td><?php echo $row['lname']; ?></td>

<td><?php echo $row['contact']; ?></td>

<td><?php echo $row['email']; ?></td>

      
        
     </tr>
   
   <?php
      
          }
       }
       else
      {
       ?>
       <tr>
         <td colspan="4"><h5>No Details About User Id. Please Enter Correct User Id..</h5> </td>
   
       </tr>
       
       <?php
      }
   }
    
    else if(isset($_GET['t1']))
    {  
         $t1 = $_GET['t1'];
     require 'dataconn.php';
     $sql="SELECT * FROM registration WHERE user_idd='$t1'";
      $query1= mysqli_query($conn,$sql);
     if(mysqli_num_rows($query1)>0)
   {
       foreach($query1 as $row)
       {
         //echo $row['track_id'].",  ";

         ?>

<tr>
      
<td><?php echo $row['user_idd']; ?></td>
<td><?php echo $row['fname']; ?></td>

<td><?php echo $row['lname']; ?></td>

<td><?php echo $row['contact']; ?></td>

<td><?php echo $row['email']; ?></td>
        
     </tr>

<?php
       }
   

    
    }
    else
   {
    ?>
    <tr>
      <td colspan="4"><h5>No Details About User Id. Please Enter Correct User Id..</h5> </td>

    </tr>
    
    <?php
   }
}
    


   ?> 

</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</section>

</form>
     </div>
   </div>
 </div>
</div>
</div>
</section>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
  <style>
  
@import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap');

body[background]{
    background-size:cover ;
    background-repeat:no-repeat ;
    background-position: center center;
}
#w1{
    margin-left:-5%;
    color: white;
    font-size: 25;
    margin-top:2%;


}

body{
    font-family: 'Quicksand', sans-serif;

}

a{
    text-decoration: none;
    

}

li{
    list-style-type: none;
    justify-content: space-between;
    text-decoration: none;
    
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
     margin-left:-10%;
   
}

nav ul{
    display: flex;
    flex-direction: row;
     margin-right:-140px;
}

nav ul li{
    margin-left: -3px;
    margin-right: -3px;
    text-decoration: none;
}
nav ul li a{
    color: #FFF;
    display: block;
    padding: 20px 20px;
    border-radius: 1px;
    text-decoration: none;
    font-size: large;
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
.log{
    background: none;
    border:none;
    color:white;
    margin-top:19px;

    
}
  </style>
 
</html>

   
