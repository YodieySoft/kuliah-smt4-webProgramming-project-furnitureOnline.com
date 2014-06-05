<!DOCTYPE HTML>
<?php
date_default_timezone_set("Asia/Jakarta");
$time = date('l\, d-m-Y H:i');
?>
<html><?php error_reporting(0);?>
<link rel="stylesheet" href="css/style.css">
<head>
<link rel="icon" type="image/png" href="assets/favicon.ico">
<title><?php echo("$title"); ?></title>
</head>
<body>
	<table width="75%" align="center" cellpadding="5">
		<tr>
			<td rowspan="2" width="5%" align="center"><img width="60" height="60" src="assets/logo.png"/></td>
			<td width="25%" align="left"><a style="color:black;text-decoration:none;font-weight:bold;font-size:24px;" href="index.php">FurnitureOnline.com</a></td>
			<td rowspan="2" width="25%" align="center"></td>
			<td rowspan="2" width="10%" align="center" class="blue"><a style="font-weight:bold; font-size:15px;" class=button-header href="index.php">HOME</a></td>
		<?php
		if ($_COOKIE["username"]!=""){
		echo("
			<td rowspan='2' width='25%' align='center' class='blue'><a style='font-weight:bold; font-size:15px;' class=button-header href='tampil.php'>DATA PEMESANAN</a></td>
			<td rowspan='2' width='10%' align='center' class='blue'><a style='font-weight:bold; font-size:15px;' class=button-header href='logout.php'>LOGOUT</a>
			");
		}else{echo("
			<td rowspan='2' width='25%' align='center' class='blue'><a style='font-weight:bold; font-size:15px;' class=button-header href='konfirmasi.php'>KONFIRMASI ORDER</a></td>
			<td rowspan='2' width='10%' align='center' class='blue'><a style='font-weight:bold; font-size:15px;' class=button-header href='login.php'>LOGIN</a></td>
			");}
				?>
			</td>
		</tr>
		<tr>
			<td width="25%"align="center"><a style="color:black;text-decoration:none;font-size:15px;" href="index.php">The Best Furniture Online Shop</a></td>
		</tr>
	</table>
	<hr>
	<table width="75%" align="center" cellpadding="5">
		<tr>
			<td width="50%">Selamat datang <b><?php echo $_COOKIE["username"];echo(" - "), $_COOKIE["nama"];?></b>,</td>
			<td align="right" width="50%"><?php echo("$time");?></td>
		</tr>
	</table>
