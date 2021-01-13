<?php
include('../dbcon.php');
$supid=$_GET['supid'];
$sql="SELECT * FROM `supplier` WHERE `sid`='$supid'";
$result=mysqli_query($con,$sql);
$data=mysqli_fetch_assoc($result);
?>
<html>
<body bgcolor="gold">
<a href="supplier.php"> BACK </a>
<center>
<h1>  Update Supplier Details</h1>
<table>
<form action=" <?php $_SERVER['PHP_SELF']; ?> " method="get">
<tr> <td>Supplier Id: </td><td> <input type="text" name="supid" value="<?php echo $data['sid'];?>" > </td> </tr>
<tr> <td>  Name:</td><td> <input type="text" name="name" value="<?php echo $data['name'];?>" > </td> </tr>
<tr> <td>Mobile No:  </td><td> <input type="text" name="mbno" value="<?php echo $data['mobileno'];?>"> </td> </tr>
<tr> <td>Category:  </td><td> <input type="text" name="category" value="<?php echo $data['category'];?>"> </td> </tr>
<tr> <td>Brand: </td><td> <input type="text" name="brand" value="<?php echo $data['brand'];?> "> </td> </tr>
<tr> <td> Quantity:</td><td> <input type="text" name="quantity" value="<?php echo $data['quantity'];?>"> </td> </tr>
<tr> <td> Date-of-Purchase:</td><td> <input type="text" name="dop" value="<?php echo $data['date'];?>"> </td> </tr>
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
$supid=$_GET['supid'];
$name=$_GET['name'];
$mobile=$_GET['mbno'];
$category=$_GET['category'];
$brand=$_GET['brand'];
$quantity=$_GET['quantity'];
$dop=$_GET['dop'];
$price=$_GET['price'];
$qry= "UPDATE `supplier`". "SET `name`='$name',`mobileno`='$mobile', `category`='$category', `brand`='$brand', `quantity`='$quantity',`date`='$dop',`price`='$price'"." WHERE `sid`='$supid'" ;
$r= mysqli_query($con,$qry);
if($r == true)
{
?>
<script>
alert('Data Updated Succesfully');
window.open('supplier.php','_self');
</script>
<?php
}
}
?>  


