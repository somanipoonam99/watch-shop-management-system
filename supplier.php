<html>
<body bgcolor="gold">
<center>
<h1> Supplier Details</h1>
<table>
<form action=" <?php $_SERVER['PHP_SELF']; ?> " method="post">
<tr> <td>Supplier Id: </td><td> <input type="text" name="supid" required> </td> </tr>
<tr> <td>Name:</td><td> <input type="text" name="name" required> </td> </tr>
<tr> <td>Mobile No:</td><td> <input type="text" name="mbno" required> </td> </tr>
<tr> <td>Category:  </td><td> <input type="text" name="category" required ></td></tr>
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
</select></td> </tr>
<tr> <td>Quantity:</td><td> <input type="text" name="quantity" required> </td> </tr>
<tr> <td>Date-Of-Purchase:</td><td> <input type="text" name="dop" placeholder="yy-mm-dd" required> </td> </tr>
<tr> <td>Price:</td><td> <input type="text" name="price" required> </td> </tr>
</table>
<br>
<input type="submit" value="CLEAR" name="clear">  &nbsp;&nbsp;<input type="submit" value="INSERT" name="insert">
<br>
<br>
</center>
</form>
<table align='center' border='1' >
<tr>
<th> Supplier Id</th>
<th> Name</th>
<th>Mobile No</th>
<th>Category</th>
<th>Brand</th>
<th>Quantity</th>
<th>Date-of-Purchase</th>
<th>Price</th>
<th> Update</th>
<th>Delete </th>
</tr>
</body>
</html>
<?php
//Grid
include ('../dbcon.php');
$sql="SELECT * FROM `supplier`";
$run=mysqli_query($con,$sql);
while($data=mysqli_fetch_assoc($run)) 
{
?>
<tr>
<td><?php echo $data['sid']; ?></td>
<td><?php echo $data['name']; ?></td>
<td><?php echo $data['mobileno']; ?></td>
<td><?php echo $data['category']; ?></td>
<td><?php echo $data['brand']; ?></td>
<td><?php echo $data['quantity']; ?></td>
<td><?php echo $data['date']; ?></td>
<td><?php echo $data['price']; ?></td>
<td><a href="updatesupplier.php?supid=<?php echo $data['sid']; ?>" target="frm"> Edit </a></td>
<td><a href="deletesupplier.php?supid=<?php echo $data['sid']; ?>"> Delete </a></td>
</tr>
<?php
}
?>
</table>
<?php
include ('../dbcon.php');
if(isset($_POST['insert']))
{
$supid=$_POST['supid'];
$name=$_POST['name'];
$mobileno=$_POST['mbno'];
$category=$_POST['category'];
$brand=$_POST['brand'];
$quantity=$_POST['quantity'];
$date=$_POST['dop'];
$price=$_POST['price'];
//validation
$name_valid =$mobileno_valid= false; 
//check name
if(preg_match('/[^a-zA-Z\s]/',$name))
{
?>
<script>
 alert('Only Alphabets are allowed in name');
 window.open('supplier.php','_self');
</script>
<?php
}
else
{
$name_valid=true;
}
//check mobileno
if(preg_match("/^[6789]{1}\d{9}$/",$mobileno))
{
$mobileno_valid=true;
}
else
{
?>
<script>
 alert('Invalid Mobile No');
 window.open('supplier.php','_self');
</script>
<?php
}
if($name_valid && $mobileno_valid)
{
$qry="INSERT INTO `supplier`(`sid`, `name`, `mobileno`, `category`, `brand`,`quantity`,`date`,`price`) VALUES ($supid,'$name','$mobileno','$category','$brand','$quantity','$date','$price')";
$run=mysqli_query($con,$qry);
if($run==true)
{
 ?>
<script>
 alert('Data Inserted Succesfully');
 window.open('supplier.php','_self');
</script>
<?php
}
}
}
?>

