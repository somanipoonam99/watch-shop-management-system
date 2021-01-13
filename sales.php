<html>
<body bgcolor="gold">
<center>
<h1> Bill Details</h1>
<form action=" <?php $_SERVER['PHP_SELF']; ?> " method="post">
<table>
<tr> <td> Bill No: </td><td> <input type="text" name="sid"> </td> </tr>
<tr> <td>Date-of-Bill:  </td><td> <input type="text"  name="dob"  placeholder="yy-mm-dd" required> </td> </tr>
<tr> <td>Customer Name:</td><td> <input type="text" name="cname" required> </td> </tr>
<tr> <td>Brand:</td><td> <select name="brand" required> 
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
<tr> <td>Warrenty:</td><td> <input type="text" name="warrenty" required> </td> </tr>
<tr> <td>Price:</td><td> <input type="text" name="price" required> </td> </tr>
<tr> <td> <input type="hidden" name="totalprice" > </td> </tr>
</table>
</table>
<br>
<input type="reset" value="CLEAR" name="new"> 
 &nbsp;&nbsp;<input type="submit" value="INSERT" name="insert">&nbsp;&nbsp;
<br>
<br>
</center>
</form>
<table align='center' border='1' >
<tr>
<th> Bill No</th>
<th> Date-of-Bill</th>
<th>Customer Name</th>
<th>Brand</th>
<th>Quantity</th>
<th>Warrenty</th>
<th>Price</th>
<th>Total Price</th>
<th> Update</th>
<th> Delete </th>
<th>Print</th>
</tr>
</body>
</html>
<?php
//Grid
include ('../dbcon.php');
$sql="SELECT * FROM `sales`";
$run=mysqli_query($con,$sql);
while($data=mysqli_fetch_assoc($run)) 
{
?>
<tr>
<td><?php echo $data['sid']; ?></td>
<td><?php echo $data['dob']; ?></td>
<td><?php echo $data['cname']; ?></td>
<td><?php echo $data['brand']; ?></td>
<td><?php echo $data['quantity']; ?></td>
<td><?php echo $data['warrenty']; ?></td>
<td><?php echo $data['price']; ?></td>
<td><?php echo $data['totalprice']; ?></td>
<td><a href="updatesales.php?slid=<?php echo $data['sid']; ?>" target="frm"> Edit </a></td>
<td><a href="deletesales.php?slid=<?php echo $data['sid']; ?>"> Delete </a></td>
<td><a href="printbill.php?slid=<?php echo $data['sid']; ?>"> Print </a></td>
</tr>
<?php
}
?>
</table>
<?php
if(isset($_POST['insert']))
{
include ("../dbcon.php");
$sid=$_POST['sid'];
$dob=$_POST['dob'];
$cname=$_POST['cname'];
$brand=$_POST['brand'];
$quantity=$_POST['quantity'];
$warrenty=$_POST['warrenty'];
$price=$_POST['price'];
//validation
$cname_valid = false; 

//check name

if(preg_match('/[^a-zA-Z\s]/',$cname))
{
?>
<script>
 alert('Only Alphabets are allowed in name');
 window.open('sales.php','_self');
</script>
<?php
}
else
{
$cname_valid=true;
}
if($cname_valid )
{
$totalprice=$price*$quantity;
echo " Total Price= .$totalprice.";
//$totalprice=$_POST['totalprice'];
//$qry=INSERT INTO `sales` (`sid`, `dob`, `cname`, `pname`, `quantity`, `warrenty`, `price`, `totalprice`) VALUES ('101', '2019-02-12', 'poonam', 'xyz', '2', '5 year', '1500', '3000');

$qry="INSERT INTO `sales`(`sid`, `dob`, `cname`, `brand`, `quantity`, `warrenty`,`price`,`totalprice`) VALUES ($sid,'$dob','$cname','$brand','$quantity','$warrenty','$price','$totalprice')";
$run=mysqli_query($con,$qry);
if($run==true)
{
 ?>
<script>
 alert('Data Inserted Succesfully');
 window.open('sales.php','_self');
</script>
<?php
}
}
}
?>

