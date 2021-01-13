<?php
include('../dbcon.php');
$supid=$_REQUEST['supid'];
$qry= "DELETE FROM `supplier` WHERE `sid`='$supid'";
$r= mysqli_query($con,$qry);
if($r == true)
{
?>
<script>
alert('Data Deleted Succesfully');
window.open('supplier.php','_self');
</script>
<?php
}
?>