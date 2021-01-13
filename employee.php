<html>
<head>
<title> Watch shop management system </title>
</head>
<body bgcolor="gold">
<center>
<h1> Employee Details</h1>
<table>
<form action=" <?php $_SERVER['PHP_SELF']; ?> " method="post">
<tr> <td>Employee Id: </td><td> <input type="text" name="eid"  required> </td> </tr>
<tr> <td>Name:</td><td> <input type="text" name="name"  required> </td> </tr>
<tr> <td>Address:  </td><td> <input type="text" name="add"  required> </td> </tr>
<tr> <td>Mobile No: </td><td> <input type="text" name="mbno"  required> </td> </tr>
<tr> <td>Email ID: </td><td> <input type="text" name="email"  required> </td> </tr>
<tr> <td> Date-Of-Join:</td><td> <input type="text" name="doj" placeholder="yy-mm-dd"  required> </td> </tr>
<tr> <td>Salary: </td><td> <input type="text" name="sal"  required> </td> </tr>
</table>
<br>
<input type="reset" value="CLEAR" name="clear">  &nbsp;&nbsp;<input type="submit" value="INSERT" name="insert">&nbsp;&nbsp;
<br>
<br>
</center>
</form>
<table align='center' border='1' >
<tr>
<th> Employee ID</th>
<th> Name</th>
<th>Address</th>
<th>Mobile No</th>
<th>Email-ID</th>
<th>Date-of-Join</th>
<th>Salary</th>
<th> Update</th>
<th>Delete </th>
</tr>
</body>
</html>
<?php
//Grid
include ('../dbcon.php');
$sql="SELECT * FROM `employee`";
$run=mysqli_query($con,$sql);
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
<td><a href="updateemployee.php?seid=<?php echo $data['eid']; ?>" target="frm"> Edit </a></td>
<td><a href="deleteemployee.php?seid=<?php echo $data['eid']; ?>"> Delete </a></td>
</tr>
<?php
}
?>
</table>

<?php
if(isset($_POST['insert']))
{
include ("../dbcon.php");
$empid=$_POST['eid'];
$name=$_POST['name'];
$address=$_POST['add'];
$mobileno=$_POST['mbno'];
$email=$_POST['email'];
$date=$_POST['doj'];
$salary=$_POST['sal'];
//validation
 $name_valid = $mobileno_valid = $email_valid = $salary_valid = false; 

//check name

if(preg_match('/[^a-zA-Z\s]/',$name))
{
?>
<script>
 alert('Only Alphabets are allowed in name');
 window.open('employee.php','_self');
</script>
<?php
}
else
{
$name_valid=true;
}
if(filter_var($email, FILTER_VALIDATE_EMAIL))
{
$email_valid=true;
}
else
{
?>
<script>
 alert('Invalid Email Address');
 window.open('employee.php','_self');
</script>
<?php
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
 window.open('employee.php','_self');
</script>
<?php
}
if(preg_match('/^\d+$/',$salary))
{
$salary_valid=true;
}
else{
?>
<script>
 alert('Invalid salary');
 window.open('employee.php','_self');
</script>
<?php
}
if($name_valid && $mobileno_valid && $email_valid && $salary_valid)
{
$qry="INSERT INTO `employee`(`eid`, `name`, `address`, `mobileno`,`email` ,`date`, `salary`) VALUES ($empid,'$name','$address','$mobileno','$email','$date','$salary')";
$run=mysqli_query($con,$qry);
if($run==true)
{
 ?>
<script>
 alert('Data Inserted Succesfully');
 window.open('employee.php','_self');
</script>

<?php
}
}
}
?>
