<?php
include ('adminmenu.php');
require 'dataconn.php';

$db= $conn;
$tableName="trackreport";
$columns= ['track_id', 'sender_loc','receiver_loc','sent_date','receive_date'];
$fetchData = fetch_data($db, $tableName, $columns);

function fetch_data($db, $tableName, $columns){
 if(empty($db)){
  $msg= "Database connection error";
 }elseif (empty($columns) || !is_array($columns)) {
  $msg="columns Name must be defined in an indexed array";
 }elseif(empty($tableName)){
   $msg= "Table Name is empty";
}else{

$columnName = implode(", ", $columns);
$query = "SELECT ".$columnName." FROM $tableName ";
$result = $db->query($query);

if($result== true){ 
 if ($result->num_rows > 0) {
    $row= mysqli_fetch_all($result, MYSQLI_ASSOC);
    $msg= $row;
 } else {
    $msg= "No Data Found"; 
 }
}else{
  $msg= mysqli_error($db);
}
}
return $msg;
}




?>



<!DOCTYPE html>
<html>
<head>
 
  <h1> Package Sent User: </h1>
</head>
<body>
<div class="container">
 <div class="row">
   <div class="col-sm-8">
    <?php echo $deleteMsg??''; ?>
    <div class="table-responsive">
      <table class="table table-bordered">
       <thead><tr><th>S.N</th>

         <th>Tracking ID</th>
         <th>Sender City</th>
         <th>Receiver City</th>
         <th>Send Date</th>
         <th>Receive Date</th>
        
    </thead>
    <tbody>
  <?php
      if(is_array($fetchData)){      
      $sn=1;
      foreach($fetchData as $data){
    ?>
      <tr>
      	
      <td><?php echo $sn; ?></td>
      <td><?php echo $data['track_id']??''; ?></td>
      <td><?php echo $data['sender_loc']??''; ?></td>
      <td><?php echo $data['receiver_loc']??''; ?></td>
      <td><?php echo $data['sent_date']??''; ?></td>
      <td><?php echo $data['receive_date']??''; ?></td>
      

        
     </tr>
     <?php
      $sn++;}}else{ ?>
      <tr>
        <td colspan="8">
    <?php echo $fetchData; ?>
  </td>
    <tr>
    <?php
    }?>
    </tbody>
     </table>
   </div>
</div>
</div>
</div>
</body>
<style>
	body{

		background: white;
	}
   
   table, th, td{

   	border: 1px solid black;
   	margin-left: 4%;
   	padding: 15px;
    border-spacing:3px;
   }

	</style>
</html>
