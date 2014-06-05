<?php
	$title = "Data Pemesanan | FurnitureOnline.com";
	include "header.php";
	if ($_COOKIE["username"]!=""){
	//isi halaman utama
?>

<center><b><h2>DATA PEMESANAN</h2></b></center>
<table width="75%" align="center" cellpadding="5" class="border" border="0">
	<tr>
		<td height="30" align="center" class="blue"<b>NO.</b></td>
		<td height="30" align="center" class="blue"><b>NAMA</b></td>
		<td height="30" align="center" class="blue"><b>NAMA BARANG</b></td>
		<td height="30" align="center" class="blue"><b>ALAMAT</b></td>
		<td height="30" align="center" class="blue"><b>KOTA</b></td>
		<td height="30" align="center" class="blue"><b>TELPHONE</b></td>
		<td height="30" align="center" class="blue"><b>EMAIL</b></td>
	</tr>
<?php 
include "koneksi.php";
$no=1;
$query = mysql_query("SELECT tb_barang.*, tb_pemesanan.* FROM tb_pemesanan INNER JOIN tb_barang ON tb_barang.id_barang = tb_pemesanan.id_barang ORDER BY id_pemesanan DESC");
while($data=mysql_fetch_array($query)){
?>
	<tr>
		<td align="center"><?php echo $no++;?></td>
		<td><?php echo $data['nama_pemesan'];?></td>
		<td><?php echo $data['nama_barang'];?></td>
		<td><?php echo $data['alamat'];?></td>
		<td><?php echo $data['kota'];?></td>
		<td><?php echo $data['telphone'];?></td>
		<td><?php echo $data['email'];?></td>
	</tr>
<?php } ?>
</table>
<?php }else{ ?>
		<table width="75%" align="center" cellpadding="5">
		<tr>
			<td colspan="2" align="center" class="blue" ><font class="judul">ERROR | SILAHKAN MELAKUKAN LOGIN TERLEBIH DAHULU</font></td>
		</tr>
		<tr>
			<td align="center">
			<?php include "form_login.php";?>
			</td>
	</table>
<?php } ?>
<?php
	include "footer.php";
?>