<?php
	$title = "Order | FurnitureOnline.com";
	include "header.php";
	setcookie("nama");
	setcookie("harga");
	setcookie("nama_barang");
	setcookie("alamat");
	setcookie("telphone");
	setcookie("kota");
	setcookie("time");
?>
<table width="75%" align="center">
	<tr>
		<td colspan="2" align="center" class="blue" ><font class="judul">FORM PEMESANAN</font></td>
	</tr>
	<tr>
		<td align="center" width="40%" class="border">
			<table>
				<tr>
					<?php
					    if(@$_GET['id_barang']){
						include "koneksi.php";
						$no=1;
						$query = mysql_query("SELECT * FROM tb_barang WHERE id_barang = '$_GET[id_barang]'");
						while($data=mysql_fetch_array($query)){
					?>
					<td align="center">
					<font class="judul"><?php echo $data['nama_barang'];?></font><br/><br/>
					<img title="<?php echo $data['nama_barang'];?>" class="img" src="img/<?php echo $data['produk'];?>" width="300"><br/><p/>
					Price : IDR <b><?php echo $data['harga'];?></b><br/>
					</td>
					<?php } } ?>
				</tr>
			</table>
		</td>
		<td align="center" width="60%">
			<form action="" method="post">
			<?php
			    if(@$_GET['id_barang']){
				include "koneksi.php";
				$no=1;
				$query = mysql_query("SELECT * FROM tb_barang WHERE id_barang = '$_GET[id_barang]'");
				while($data=mysql_fetch_array($query)){
			?>
			<input type="hidden" name="id_barang" value="<?php echo $data['id_barang'];?>">
			<input type="hidden" name="nama_barang" value="<?php echo $data['nama_barang'];?>">
			<input type="hidden" name="harga" value="<?php echo $data['harga'];?>">
			<?php } } ?>
			<table width="100%">
				<tr>
					<td width="20%"><b>* Nama</b></td>
					<td><input type="text" placeholder="Nama" name="nama" id="nama" required="required"></td>
				</tr>
				<tr>
					<td width="20%"><b>* Alamat</b></td>
					<td><textarea name="alamat" id="alamat" placeholder="alamat" required="required"></textarea></td>
				</tr>
				<tr>
					<td width="20%"><b>* Kota</b></td>
					<td>
						<select name="kota" id="kota" required="required">
							<option value="">Pilih</option>
							<option value="bogor">Bogor</option>
							<option value="bandung">Bandung</option>
							<option value="jakarta">Jakarta</option>
							<option value="tangerang">Tangerang</option>
							<option value="bekasi">Bekasi</option>
						</select>
					</td>
				</tr>
				<tr>
					<td width="20%"><b>* Telp.</b></td>
					<td><input type="text" name="telp" id="telp" required="required"></td>
				</tr>
				<tr>
					<td width="20%"><b>* Email</b></td>
					<td><input type="text" name="email" id="email" placeholder="email@email.com" required="required"></td>
				</tr>
				<tr>
					<td coslapn="2">&nbsp;<p></td>
				</tr>
				<tr>
					<td colspan="2">
						<table width="100%">
							<tr>
								<td width="50%"><a class="button" title="Kembali ke halaman Utama"href="index.php">Back</a></td>
								<td align="right" width="50%"><button class=button-tag name="proses">Checkout</button></td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
			</form>
		</td>
	</tr>
</table>
<?php

if(isset($_POST['proses'])){
	//Mendefinisikan ke database
	include "koneksi.php";

	//Input
	$nama		= $_POST['nama'];
	$alamat		= $_POST['alamat'];
	$kota		= $_POST['kota'];
	$telp		= $_POST['telp'];
	$email		= $_POST['email'];
	$id_barang	= $_POST['id_barang'];
	$nama_barang	= $_POST['nama_barang'];
	$harga	= $_POST['harga'];

		//Eksekusi Ke Database
		$query = mysql_query("INSERT INTO tb_pemesanan VALUES('','$id_barang','$nama','$alamat','$kota','$telp','$email',now())");

				//set cookie
				setcookie("nama", $nama);
				setcookie("harga", $harga);
				setcookie("nama_barang", $nama_barang);
				setcookie("alamat", $alamat);
				setcookie("telphone", $telp);
				setcookie("kota", $kota);
				setcookie("time", $time);

		//Respon Jika Sukses dan Jika Salah
		if($query==1){
			echo "<script>window.location='konfirmasi.php'</script>";

		}else{
			echo "<script>alert('Pemesanan Gagal Diproses !');javascript:history.back();</script>";
		}

	
}

?>
<?php
	include "footer.php";
?>