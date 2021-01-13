<?php
include('../dbcon.php');
$pdid=$_GET['pdid'];
$sql="SELECT * FROM `product` WHERE `pid`='$pdid'";
$result=mysqli_query($con,$sql);
$data=mysqli_fetch_assoc($result);
?>
<html>
<body bgcolor="gold">
<a href="product.php"> BACK </a>
<center>
<h1>  Update Product Details</h1>
<table>
<form action=" <?php $_SERVER['PHP_SELF']; ?> " method="get">
<tr> <td>Product Id: </td><td> <input type="text" name="pid" value="<?php echo $data['pid'];?>" > </td> </tr>
<tr> <td>Category:  </td><td> <input type="text" name="category" value="<?php echo $data['category'];?>"> </td> </tr>
<tr> <td>Brand: </td><td> <input type="text" name="brand" value="<?php echo $data['brand'];?> "> </td> </tr>
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
$pid=$_GET['pid'];
$category=$_GET['category'];
$brand=$_GET['brand'];
$quantity=$_GET['quantity'];
$warrenty=$_GET['warrenty'];
$price=$_GET['price'];
$qry= "UPDATE `product`". "SET  `category`='$category', `brand`='$brand', `quantity`='$quantity',`warrenty`='$warrenty',`price`='$price'"." WHERE `pid`='$pid'" ;
$r= mysqli_query($con,$qry);
if($r == true)
{
?>
<script>
alert('Data Updated Succesfully');
window.open('product.php','_self');
</script>
<?php
}
}
?>  


