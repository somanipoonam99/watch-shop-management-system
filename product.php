<html>
<body bgcolor="gold">
<center>
<h1> Product Details</h1>
<table>
<form action=" <?php $_SERVER['PHP_SELF']; ?> " method="post">
<tr> <td>Product Id: </td><td> <input type="text" name="pid"> </td> </tr>
<tr> <td>Category:  </td><td> <select name="category"> 
<option> MALE </option>
<option> FEMALE </option>
</select>
</td> </tr>
<tr> <td>Brand:</td><td> <select name="brand" > 
<option> select </option>
<?php 
include ('../dbcon.php');
$query=mysqli_query($con,"SELECT *  FROM `product`");
while($r=mysqli_fetch_array($query))
{
echo "<option> $r[2] </option>";
}
?>
</select></td></tr> 
<tr> <td>Quantity:</td><td> <input type="text" name="quantity"> </td> </tr>
<tr> <td>Warrenty:</td><td> <input type="text" name="warrenty"> </td> </tr>
<tr> <td>Price:</td><td> <input type="text" name="price"> </td> </tr>
</table>
<br>
<input type="reset" value="CLEAR" name="reset">  &nbsp;&nbsp;<input type="submit" value="INSERT" name="insert">&nbsp;&nbsp;
<br>
<br>
</center>
</form>
<table align='center' border='1' >
<tr>
<th> Prouct ID</th>
<th>Category</th>
<th>Brand</th>
<th>Quanitity</th>
<th>Warrenty</th>
<th>Price</th>
<th> Update</th>
<th>Delete </th>
</tr>
</body>
</html>
<?php
//Grid
include ('../dbcon.php');
$sql="SELECT * FROM `product`";
$run=mysqli_query($con,$sql);
while($data=mysqli_fetch_assoc($run)) 
{
?>
<tr>
<td><?php echo $data['pid']; ?></td>
<td><?php echo $data['category']; ?></td>
<td><?php echo $data['brand']; ?></td>
<td><?php echo $data['quantity']; ?></td>
<td><?php echo $data['warrenty']; ?></td>
<td><?php echo $data['price']; ?></td>
<td><a href="updateproduct.php?pdid=<?php echo $data['pid']; ?>" target="frm"> Edit </a></td>
<td><a href="deleteproduct.php?pdid=<?php echo $data['pid']; ?>"> Delete </a></td>
</tr>
<?php
}
?>
</table>
<?php
include ("../dbcon.php");
if(isset($_POST['insert']))
{
$pid=$_POST['pid'];
$category=$_POST['category'];
$brand=$_POST['brand'];
$quantity=$_POST['quantity'];
$warrenty=$_POST['warrenty'];
$price=$_POST['price'];
{
$qry="INSERT INTO `product`(`pid`, `category`, `brand`, `quantity`, `warrenty`,`price`) VALUES ($pid,'$category','$brand','$quantity','$warrenty','$price')";
$run=mysqli_query($con,$qry);
if($run==true)
{
 ?>
<script>
 alert('Data Inserted Succesfully');
 window.open('product.php','_self');
</script>
<?php
}
}
}
?>

