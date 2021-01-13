<html>
<body bgcolor="gold">
<center>
<h1> Bill Report</h1>

<table align='center' border='1' >
<tr>
<th> Bill No</th>
<th> Date-of-Bill</th>
<th>Customer Name</th>
<th>Quantity</th>
<th>Warrenty</th>
<th>Price</th>
<th>Total Price</th>
<th> Update</th>
<th> Delete </th>
</tr>
</body>
</center>
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
<td><?php echo $data['quantity']; ?></td>
<td><?php echo $data['warrenty']; ?></td>
<td><?php echo $data['price']; ?></td>
<td><?php echo $data['totalprice']; ?></td>
<td><a href="updatesales.php?slid=<?php echo $data['sid']; ?>" target="frm"> Edit </a></td>
<td><a href="deletesales.php?slid=<?php echo $data['sid']; ?>"> Delete </a></td>
</tr>
<?php
}
?>