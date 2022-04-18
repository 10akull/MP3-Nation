<html><head><title>display</title>
<style>
.button:hover {
    background-color: #595959;
    color: #cc3399;
}
.button {
    background-color: black;
    color: #cc3399;
    border: 2px solid black;
    padding: 10px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    transition: background-color 0.7s ease;
    cursor: pointer;
    border-radius: 15px;
}  
  input[type=text] {
    padding: 10px 15px;
    margin: 8px 0;
    border: 2px solid black;
    border-radius: 15px;
}  
select {
    padding: 8px 8px;
    border: none;
    border-radius: 4px;
    background-color: black;
    color: #cc3399;
}   
</style>
<script language="javascript">
function change()
{
var c
if(document.f1.n.selectedIndex==0)
{
    c = 350
}
if(document.f1.n.selectedIndex==1)
{
    c = 300
}
if(document.f1.n.selectedIndex==2)
{
    c = 320
}
if(document.f1.n.selectedIndex==3)
{
    c = 280
}
if(document.f1.n.selectedIndex==4)
{
    c = 250
}
document.f1.cost.value=c
}
function mult()
{
    document.f1.tc.value =document.f1.cost.value*document.f1.q.value
}
</script></head>
<body  background="Screenshot_20180203-192113.png"><link rel="stylesheet" href="base.css"><font face="Segoe UI Light" >  
<ul>
<li ><a href="MP3 NATION.html" ><b><i>M P 3 N A T I O N </i></b></a></li>
<li ><b><a href="charts.html">Charts</a></b></li>
<li style="float:right"><b><a href="buy.php">Buy</a></b></li>
<li style="float:right"><b><a href="order.php">Your Order</a></b></li>
</ul><br><br><br><br><center>
<font size="5"><i>ALBUMS AVAILABLE</i></font><br><br>
<div style="background : rgba(204,204,204,0.7); margin-left:7%; width:40% ;padding: 10px 16px ;  border-radius: 15px">
<table cellpadding="10" cellspacing="10" >
<tr><th>No.</th><th>Name</th><th>Artist</th><th>Year</th><th>Cost</th></tr>

<?php
 $conn=mysqli_connect('localhost','root','','buy');
if(!$conn)
{
    die("could not connect".mysqli_error($conn));
}      
$sql = "select * from album";
$result = mysqli_query($conn,$sql);
if (mysqli_num_rows($result)>0)
{
    while($row = mysqli_fetch_assoc($result))
    {
        echo "<tr><td>" . $row["no"] . "</td><td>" . $row["name"] . "</td><td>" . $row["artist"] . "</td><td>" . $row["year"] . "</td><td>" . $row["cost"] . "</td></tr>"  ;
    }
}
else
{
    echo "No rows found";
}  
mysqli_close($conn);
?>
</table></div><br><br><font size="5"><i>GET YOUR ALBUM*</i></font><br><br>
<div style="background : rgba(204,204,204,0.7); margin-left:7%; width:40% ;padding: 10px 16px ;  border-radius: 15px">
<form method="post" action="http://localhost/project/MP3 NATION/buyphp.php" name="f1">
<table cellpadding="12" cellspacing="15" >
    <tr><th>Album</th><td><select name="n" onclick="change()">
    <option>24K Magic</option>
    <option>Dangerous Woman</option>
    <option>Divide</option>
    <option>Starboy</option>
    <option>Communion</option></select></td></tr>
<tr><th>Cost(Rs.)</th><td><input type="text" name="cost" ></td></tr>
<tr><th>Name</th><td><input type="text" name="name" ></td></tr>
<tr><th>E-mail Ad.</th><td><input type="text" name="ad" ></td></tr>
<tr><th>Quantity</th><td><input type="text" onchange="mult()" name="q"></td></tr>
<tr><th>Total Cost(Rs.)</th><td><input type="text" name="tc" length="20"></td></tr>
</table><button class="button" name="buy" type="submit" id="buy">Buy</button>
</form></div> </center><font size="3">*Soft Copy</font><br><br><br>
<div style="background-color:black; color:white ; text-align: center; padding: 14px 16px;"><a href="mailto:akull0201@gmail.com" >Contact Us</a></div></font></body> If ‘Buy’ is clicked after entering relevant details in given text fields:
