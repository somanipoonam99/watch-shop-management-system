<html>
<body bgcolor="gold">
<center>
<h1> supplier_product Report</h1>
<br>
<?php
include('../dbcon.php');
$qry="SELECT * FROM `supplier_product`";
$run=mysqli_query($con,$qry);
?>
<table align="center" border="1">
<tr>
<th> Supplier Id</th>
<th> Product/th>
</tr>
<?php
while($data=mysqli_fetch_assoc($run))
{
?>
<tr>
<td><?php echo $data['sid']; ?></td>
<td><?php echo $data['pid']; ?></td>
</tr>
<?php
}
?>
</table>
</center>
</body>
</html>