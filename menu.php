<html>
<head>
<title>  Watch shop management system </title>
<style>
body{
background-color:pink;
}
.menu{
width:50%;
height:100px;
margin:0px auto;
}
.menu ul{
padding:0px;
}
.menu ul li{
float:Left;
background-color:black;
color:white;
width:200px;
height:50px;
line-height:50px;
font-size:25px;
text-align:center;
list-style:none;
opacity:0.6;
}
.menu ul li ul{
display:none;
}
.menu ul li:hover > ul{
display:block;
}
.menu ul li:hover{
background-color:#32CD32;
opacity:0.9;
}
.menu ul li ul li{
position:relative;
}
}
</style>
</head>
<body>
<center>
<h1> Admin </h1>
<div class="menu">
<ul>
<li> <a href="employee.php" target="frm"> Employee</a></li>
<li> <a href="customer.php" target="frm"> Customer </a></li>
<li> <a href="supplier.php" target="frm">Supplier</a></li>
<li> <a href="product.php" target="frm"> Product</a></li>
<li> <a href="sales.php" target="frm"> Bill </a></li>
<li> <a href="employeereport.php" target="frm"> Employee Report</a></li>
<li> <a href="customerreport.php" target="frm"> Customer Report</a></li>
<li> <a href="productreport.php" target="frm"> Product Report</a></li>
<li> <a href="billreport.php" target="frm"> Bill Report</a></li>
</ul>
</div>
</body>
</center>
</html>