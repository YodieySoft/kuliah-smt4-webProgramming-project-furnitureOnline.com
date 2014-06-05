<?php
	$title = "Konfirmasi | FurnitureOnline.com";
	include "header.php";
	if ($_COOKIE["nama"]==""){
	//isi halaman utama
	echo("
	<table width='75%' align='center' cellpadding='5'>
		<tr>
			<td colspan='2' align='center' class='blue' ><font class='judul'>ERROR | SILAHKAN MELAKUKAN PEMESANAN</font></td>
		</tr>
		<tr>
			<td align='center'>
			<p><br><p><br>
			Silahkan melakukan pemesanan terlebih dahulu, sebelum melakukan konfirmasi pembayaran.
			<p><br><p><br><p><br>
			</td>
	</table>
	");
	}else{
		?>
<table width="75%" align="center" cellpadding="5" class="border">
		<tr>
			<td colspan="2" align="center" class="blue" ><font class="judul">KONFIRMASI PEMESANAN</font></td>
		</tr>
		<tr>
			<td><p><br>
			Kepada <b><?php echo $_COOKIE["nama"];?></b>,<br/><br/>
			Terima Kasih telah melakukan pemesanan di <a href="http://www.furnitureonline.com"><font color="blue">FurnitureOnline.com</font></a>.<p/>
			Mohon Melakukan pembayaran dalam jangka waktu 24jam. Jika tidak pemesanan Anda akan dibatalkan.<p/>
			Lakukan Transfer Sebesar <b>IDR. <?php echo $_COOKIE['harga'];?>,-</b><p/>
			Ke Nomor Rekening Berikut : <p/><center><img src="assets/payment.png"></center><p/>
			Untuk Tahap akhir proses pemesanan, silakan lakukan konfirmasi pembayaran dengan menghubungi kontak kami, agar pesanan Anda dapat langsung Kami Proses.<p/>
			Berikut konfirmasi pemesanan untuk pengiriman barang anda.<p/><p/>
		<center>
			<table width="75%">
				<tr>
					<td align="right" colspan="4">Tanggal Pemesanan <?php echo $_COOKIE['time'];?></td>
				</tr>
				<tr align="center">
					<td class="blue">Nama Produk</td>
					<td class="blue">Harga Rp</td>
					<td class="blue">Alamat Pengiriman</td>
					<td class="blue">No.telp</td>
				</tr>
				<tr height="30">
					<td class="border"><?php echo $_COOKIE['nama_barang'];?></td>
					<td class="border"><?php echo $_COOKIE['harga'];?></td>
					<td class="border"><?php echo $_COOKIE['alamat'];?>, <?php echo $_COOKIE['kota'];?></td>
					<td class="border"><?php echo $_COOKIE['telphone'];?></td>
				</tr>
			</table>
		</center>
		<p/>
			</td>
		</tr>
</table>
<p/><br/>
<center><a onClick="window.print()" class="button" href="?print">Print</a></center>
<?php	}
?>

				<?php
					include "footer.php";
				?>