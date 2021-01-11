<?php
    $con = mysqli_connect("localhost", "root", "", "bank");
?>
<!DOCTYPE html>
<html>
<head> 
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
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
}
td,tr{
	padding:40px;
}
</style>

<body>
<title>customers</title>
<header>
<h1><strong><font size="+6">GRIP BANK <i class="fa fa-bank" style="font-size:56px"></i></font></strong></h1>
<br>
<button style=float:right; type='submit' class='btn btn-default'><a href="bank.php" ><strong>HOME</strong></a></style></button>

<button style=float:right;><a href="allcust.php"><strong>CUSTOMERS</strong></a></button>
</header>
                   
<?php
echo"<table class=' table table-bordered table-hover '>";
	echo"<tr style='background-color:white;'>";
		
		echo "<th>"; echo"Sender";  echo"</th>";
		echo "<th>"; echo"Receiver";  echo"</th>";
		echo "<th>"; echo"Amount";  echo"</th>";
		
		echo"</tr>";	
        $sql = "SELECT * FROM `transfer`";
        $result = mysqli_query($con, $sql);
        while($row = mysqli_fetch_assoc($result)){
            echo "<tr>";
            echo "<form method ='post' action = 'customer.php'>";
            echo "  <td>". $row['sender'] . "</td>
            <td>". $row['receiver'] . "</td>
            <td>". $row['amount'] . "</td>";
            echo "</form>";
         echo  "</tr>";
        }
		echo "</table>";
        ?>
    
</div>
</body>
</html>