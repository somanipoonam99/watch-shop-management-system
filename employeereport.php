<html>
<body bgcolor="gold">
<center>
<h1> Employee Report</h1>
<br>
<?php
include('../dbcon.php');
$qry="SELECT * FROM `employee`";
$run=mysqli_query($con,$qry);
?>
<table align="center" border="1">
<tr>
<th>  Employee Id</th>
<th> Name</th>
<th> Address</th>
<th> Mobile No</th>
<th>Email_Id</th>
<th>Date-of-Join</th>
<th> Salary</td></th>
</tr>
<?php
while($data=mysqli_fetch_assoc($run))
{
?>
<tr>
<td><?php echo $data['eid']; ?></td>
<td><?php echo $data['name']; ?></td>
<td><?php echo $data['address']; ?></td>
<td><?php echo $data['mobileno']; ?></td>
<td><?php echo $data['email']; ?></td>
<td><?php echo $data['date']; ?></td>
<td><?php echo $data['salary']; ?></td>
</tr>
<?php
}
?>
</table>
</center>
</body>
</html>