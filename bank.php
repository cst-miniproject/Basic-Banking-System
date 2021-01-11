<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>

div {
  width: 250px;
  height: 100px;
  background-color:hsl(0, 100%, 75%);
  font-weight: bold;
  position:relative;
  animation: mymove 10s infinite;
}

#div1 {animation-timing-function: linear;}
#div2 {animation-timing-function: ease;}
#div3 {animation-timing-function: ease-in;}
#div4 {animation-timing-function: ease-out;}
#div5 {animation-timing-function: ease-in-out;}

@keyframes mymove {
  from {left: 600px;}
  to {left: 1000px;}
}

body{
	background-color:rgb(179, 13, 52);
	height:1000;
}

h1{
	float:left;
	background-color:hsl(0, 100%, 75%);
	
}

h2
{
	position: relative;
    left: 100px;
	top:-470px;

}

h3
{
	position: relative;
    left: 150px;
	top:-472px;
	
}

h4
{
	position: relative;
    left: 162px;
	top:-474px;
}
button {
  border: none; 
  color: black;  
  position:relative;
  left:162px;
  top:-470px; 
  background-color: hsl(0, 100%, 75%);
  float:left;
  padding: 30px 52px;
}

</style>
</head>
<body>
<title>BANK</title>


<h1><strong><font size="+6">GRIP BANK <i class="fa fa-bank" style="font-size:56px"></i></font></strong></h1>
<br>
<br>
<br>
<br>
<br>

<div id="div1"><font size="+6">Online</font></div>
<div id="div2"><font size="+6">Easy</font></div>
<div id="div3"><font size="+6">Secure</font></div>
<div id="div4"><font size="+6">Quick</font></div>
<div id="div5"><font size="+6">Transfer</font></div>
<br>
<br>
<h2 style="font-family:verdana; font-size:300%" "background-color:powderblue;"><u>The Fastest Way</u></h2>
<h3 style="font-family:verdana; font-size:300%" "background-color:powderblue;"><u>To Transfer</u></h3>
<h4 style="font-family:verdana; font-size:300%" "background-color:powderblue;"><u>Money</u></h4>
<button><a href="allcust.php" button type='submit' class='btn btn-default' >View All Customers</a></button> 

</body>
</html>
