<?php
include('../dbcon.php');
$slid=$_GET['slid'];
$sql="SELECT * FROM `sales` WHERE `sid`='$slid'";
$result=mysqli_query($con,$sql);
$data=mysqli_fetch_assoc($result);
?>
<html>
<body bgcolor="gold">
<a href="sales.php.php"> BACK </a>
<center>
<h1>  Update Bill Details</h1>
<table>
<form action=" <?php $_SERVER['PHP_SELF']; ?> " method="get">
<tr> <td>Bill No: </td><td> <input type="text" name="sid" value="<?php echo $data['sid'];?>" > </td> </tr>
<tr> <td> Date-of-bill:</td><td> <input type="text" name="dob" value="<?php echo $data['dob'];?>" > </td> </tr>
<tr> <td>Customer Name:  </td><td> <input type="text" name="cname" value="<?php echo $data['cname'];?>"> </td> </tr>
<tr> <td>Brand:</td><td> <input type="text" name="brand" value="<?php  echo $data['brand'];?>"> </td> </tr>
<tr> <td> Quantity:</td><td> <input type="text" name="quantity" value="<?php echo $data['quantity'];?>"> </td> </tr>
<tr> <td> Warrenty:</td><td> <input type="text" name="warrenty" value="<?php echo $data['warrenty'];?>"> </td> </tr>
<tr> <td>price: </td><td> <input type="text" name="price" value="<?php echo $data['price'];?> "> </td> </tr>
</table>
<br>
<input type="submit" value="UPDATE" name="update">
</center>
</body>
</html>
<?php
if(isset($_GET['update']))
{
include('../dbcon.php');
$sid=$_GET['sid'];
$dob=$_GET['dob'];
$cname=$_GET['cname'];
$brand=$_GET['brand'];
$quantity=$_GET['quantity'];
$warrenty=$_GET['warrenty'];
$price=$_GET['price'];
$qry= "UPDATE `sales`". "SET `dob`='$dob', `cname`='$cname', `brand`='$brand', `quantity`='$quantity',`warrenty`='$warrenty',`price`='$price'"." WHERE `sid`='$sid'" ;
$r= mysqli_query($con,$qry);
if($r == true)
{
?>
<script>
alert('Data Updated Succesfully');
window.open('sales.php','_self');
</script>
<?php
}
}
?>  


