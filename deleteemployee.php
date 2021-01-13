<?php
include('../dbcon.php');
$eid=$_REQUEST['seid'];
$qry= "DELETE FROM `employee` WHERE `eid`='$eid'";
$r= mysqli_query($con,$qry);
if($r == true)
{
?>
<script>
alert('Data Deleted Succesfully');
window.open('employee.php','_self');
</script>
<?php
}
?>
