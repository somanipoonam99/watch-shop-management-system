<?php
include('../dbcon.php');
$slid=$_GET['slid'];
$sql="SELECT * FROM `sales` WHERE `sid`='$slid'";
$result=mysqli_query($con,$sql);
$data=mysqli_fetch_assoc($result);
?>
<html>
<body bgcolor="gold">
<a href="sales.php"> BACK </a>
<center>
<div>
<h1> Bill of Watch Shop </h1>
<table border="1">
<tr><td>Bill No:<?php echo $data['sid'];?></td>
<td>Date-of-bill:<?php echo $data['dob'];?> </td></tr>
<tr align="center"> <td>Customer Name:  </td><td> <?php echo $data['cname'];?> </td> </tr>
<tr align="center"> <td> Quantity:</td><td><?php echo $data['quantity'];?> </td> </tr>
<tr align="center"> <td> Warrenty:</td><td><?php echo $data['warrenty'];?> </td> </tr>
<tr align="center"> <td>price: </td><td><?php echo $data['price'];?></td> </tr></tr>
<tr align="center"> <td> Total price<td><?php echo $data['totalprice']; ?></td></tr>
</table>
<h1> Thankyu to visit!!</h1>
<br>
</center>
</div>
</body>
</html>



