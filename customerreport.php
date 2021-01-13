<html>
<body bgcolor="gold">
<center>
<h1> Customer Report</h1>
<table align='center' border='1' >
<tr>
<th> Employee ID</th>
<th> Name</th>
<th>Address</th>
<th>Mobile No</th>
<th>Date-of-Birth</th>
<th>Email-Id</th>
</tr>
</body>
</html>
<?php
//Grid
include ('../dbcon.php');
$sql="SELECT * FROM `customer`";
$run=mysqli_query($con,$sql);
while($data=mysqli_fetch_assoc($run)) 
{
?>
<tr>
<td><?php echo $data['cid']; ?></td>
<td><?php echo $data['name']; ?></td>
<td><?php echo $data['address']; ?></td>
<td><?php echo $data['mobileno']; ?></td>
<td><?php echo $data['date']; ?></td>
<td><?php echo $data['emailid']; ?></td>
</tr>
<?php
}
?>
</table>
</center>
</form>
</html>