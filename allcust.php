<?php
  $connect = mysqli_connect("localhost", "root", "", "bank");
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

h2
{
	font-size:200%;
    color: rgb(179, 13, 52);
	text-align: center;
}
button
{
  border: none; 
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
</header>
<h2><u>ALL CUSTOMERS</u></h2>

<?php
	echo"<table class=' table table-bordered table-hover '>";
	echo"<tr style='background-color:white;'>";
		echo "<th>"; echo"Customer ID";  echo"</th>";
		echo "<th>"; echo"Name";  echo"</th>";
		echo "<th>"; echo"Email-ID";  echo"</th>";
		echo "<th>"; echo"Current Balance";  echo"</th>";
		echo "<th>"; echo"&nbsp"; echo"</th>";
		echo"</tr>";	
		$sql = "SELECT * FROM `customers`";
        $result = mysqli_query($connect, $sql);
        while($row = mysqli_fetch_assoc($result))
		{
			echo "<tr>";
            echo "<form method ='post' action = 'customer.php'>";
            echo "<td>". $row['customer_id'] . "</td>
            <td>". $row['Name'] . "</td>
            <td>". $row['email_id'] . "</td>
            <td>". $row['current_balance'] . "</td>";
           echo "<td> <a href='customer.php'><button type='submit' class='btn btn-default'  name='user'  id='users1' value= '{$row['Name']}' >View Customer</button></a></td>";
            echo "</form>";
           echo  "</tr>";
		}
	echo "</table>";
?>




</body>
</html>
