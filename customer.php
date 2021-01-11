<?php
session_start();
$server="localhost";
$username="root";
$password="";
$connect=mysqli_connect($server,$username,$password,"bank");
if(!$connect){
    die("Connection failed");

}
$_SESSION['user']=$_POST['user'];
$_SESSION['sender']=$_SESSION['user'];
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body{
	background-color:hsl(0, 100%, 75%);
}
header
{
	background-color:rgb(179, 13, 52);
	
}
img
{
float:left;
}
h2
{
	font-size:200%;
    color: rgb(179, 13, 52);
	text-align: center;
}
h3
{
    font-size:200%;
    color: rgb(179, 13, 52);
	
	}
button
{
  border: black; 
  color: black;    
  background-color:rgb(179, 13, 52);
  float:left;
  padding: 30px 52px;
  text-align: center;
  border-radius: 50%;
  color:black;
}
table,td,tr{
	border:1px  solid black;
	border-collapse:collapse;
	class:center;
}
td,tr{
	padding:40px;
}

</style>
</head>
<body>
<title>customers</title>
<header>
<h1><strong><font size="+6">GRIP BANK <i class="fa fa-bank" style="font-size:56px"></i></font></strong></h1>
<br>
<button style=float:right; type='submit' class='btn btn-default'><a href="bank.php" ><strong>HOME</strong></a></style></button>
<button style=float:right;><a href="transferrecords.php"><strong>TRANSFEER RECORDS</strong></a></button>
<button style=float:right;><a href="allcust.php"><strong>CUSTOMERS</strong></a></button>
</header>
<h2><u>CUSTOMER DETAILS</u></h2>
<?php
	echo"<table class='  table table-bordered table-hover  center'>";
	echo"<tr style='background-color:white;'>";
		echo "<th>"; echo"customer id";  echo"</th>";
		echo "<th>"; echo"Name";  echo"</th>";
		echo "<th>"; echo"email-id";  echo"</th>";
		echo "<th>"; echo"current balance";  echo"</th>";
		echo"</tr>";	
        if (isset($_SESSION['user']))
        {
          $user=$_SESSION['user'];
          $result=mysqli_query($connect,"SELECT * FROM customers WHERE Name='$user'");
          while($row=mysqli_fetch_array($result))
          {
            echo "<td> ".$row['customer_id']."</td><br>";
            echo "<td> ".$row['Name']."</td><br>";
            echo "<td> ".$row['email_id']."</td><br>";
            echo "<td> ".$row['current_balance']."</td>";
          }         
        }
      ?>
	  
</table>	  
 <br>  
 <br>
 <br>
 <br>
 <br>
  <div >
                    <form action="pay.php" method="POST">
                        
                    
                    <h3><u>MONEY TRANSFER</u></h3>
                    </div><br><br>
                    <b style="font-size:1.2em;">Sender</b> : <span style="font-size:1.2em;"><input id="myinput" name="sender" disabled type="text" style="width:40%;border:none;" value='<?php echo "$user";?>'></input></span>

                        <br><br><br>
                        <b style="font-size:1.2em;">Select Reciever:</b>
                <select name="reciever" id="dropdown" required>
                    <option>Select Reciever</option>
                <?php
                $db = mysqli_connect("localhost", "root", "", "bank");
                $res = mysqli_query($db, "SELECT * FROM customers WHERE Name!='$user'");
                while($row = mysqli_fetch_array($res)) {
                    echo("<option> "."  ".$row['Name']."</option>");
                }
                ?>
                </select>
                <br><br><br>
                        <b style="font-size:1.2em;">Amount to be transferred &#8377;:</b>
                        <input name="amount" type="number" style="width:35%;" min="100" required>
                        <br><br><br>
                        <button id="transfer"  name="transfer" class="btn btn-default" ><b>Transfer</b></button>
                        </form>
        </div>
</body>
</html>
