<?php
session_start();
$server="localhost";
$username="root";
$password="";
$con=mysqli_connect($server,$username,$password,"bank");
if(!$con){
    die("Connection failed");
} 


$flag=false;

if (isset($_POST['transfer']))
{
$sender=$_SESSION['sender'];
$receiver=$_POST["reciever"];
$amount=$_POST["amount"];?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<style>
body
{
	background-color:background-color:rgb(179, 13, 52);
}
</style>
<body>
<h1><strong><font size="+6">GRIP BANK <i class="fa fa-bank" style="font-size:56px"></i></font></strong></h1>
<br>
</body>
</html>

<?php

$sql = "SELECT current_balance FROM customers WHERE Name='$sender'";
$result = $con->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
 if($amount>$row["current_balance"] or $row["current_balance"]-$amount<100){
    echo "<script>swal( 'Transaction Failed:(','Insufficient Balance!','error' ).then(function() { window. location = 'transferrecords.php'; });;</script>";
   
 }
else{
    $sql = "UPDATE `customers` SET current_balance=(current_balance-$amount) WHERE Name='$sender'";
    

if ($con->query($sql) === TRUE) {
  $flag=true;
} else {
  echo "Error updating record: " . $conn->error;
}
 }
 
  }
} else {
  echo "0 results";
} 

if($flag==true){
$sql = "UPDATE `customers` SET current_balance=(current_balance+$amount) WHERE Name='$receiver'";

if ($con->query($sql) === TRUE) {
  $flag=true;  
  
} else {
  echo "Error updating record: " . $con->error;
}
}
if($flag==true){
$sql = "INSERT INTO `transfer` (`transfer_id`, `sender`, `receiver`, `amount`) VALUES ('', '$sender','$receiver','$amount')";
if ($con->query($sql) === TRUE) {
} else 
{
  echo "Error updating record: " . $con->error;
}
}
}
if($flag==true){
echo "<script>swal('Transfered!', 'YAY!!!Transaction Successfull:)','success').then(function() { window. location = 'transferrecords.php'; });;</script>";
}
elseif($flag==false)
{
    echo "<script>
        $('#text2').show()
     </script>";
}
?>