<html>
<body bgcolor="gold">
<center>
<h1> Product Report</h1>
<br>
<table align='center' border='1' >
<tr>
<th> Prouct ID</th>
<th>Category</th>
<th>Brand</th>
<th>Quanitity</th>
<th>Warrenty</th>
<th>Price</th>

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
</tr>
<?php
}
?>
</table>