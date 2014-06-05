<?php
	$title = "Home | FurnitureOnline.com";
	include "header.php";
?>
	<table width="75%" align="center" cellpadding="5">
		<tr>
			<td width="30%" align="center" class="blue"><font class="judul">HOT DEAL !!</font></td>
			<td colspan="2" align="center" class="blue" ><font class="judul">HOT PRODUK | BEST SELLER</font></td>
		</tr>
		<tr>
			<td rowspan="2" width="30%"><img width="285" height="350" src="assets/promo.png"/></td>
			<td colspan="2" align="center"><font class"judul">Produk Best Seller, Grab it Fast dude !!</font></td>
		</tr>
		<tr>
			<?php
		include "koneksi.php";
		$no=1;
		$query = mysql_query("SELECT * FROM tb_barang where status=1 limit 2");
		while($data=mysql_fetch_assoc($query)){
		?>
				<td align="center" width="35%">
					<font class="judul"><?php echo $data['nama_barang'];?></font><br/><br/>
					<img title="<?php echo $data['nama_barang'];?>" class="img" src="img/<?php echo $data['produk'];?>" width="300"><br/><p/>
					Price : IDR <b><?php echo $data['harga'];?></b><br/><p/><br/>
					<a class="button" href="form.php?p=form&amp;id_barang=<?php echo $data['id_barang']; ?>">Buy</a><br/>
				</td>
		<?php } ?>
		</tr>
	</table>
	<table width="75%" align="center" cellpadding="5" border="0">
		<tr>	
			<td colspan="4" width="25%" align="center" class="blue"><a style="color:white;text-decoration:none;font-weight:bold;font-size:15px;" href="index.php">KATALOG PRODUK KAMI</a></td>
		</tr>
		<tr>
		<?php
		include "koneksi.php";
		$query = mysql_query("SELECT * FROM tb_barang where id_barang <=4 ORDER BY id_barang ASC");
		while($data=mysql_fetch_array($query)){
		?>
				<td align="center" class="border">
					<br/><font class="judul"><?php echo $data['nama_barang'];?></font><br/><br/>
					<img title="<?php echo $data['nama_barang'];?>" class="img" src="img/<?php echo $data['produk'];?>" width="200" height="137"><br/><p/>
					Price : IDR <b><?php echo $data['harga'];?></b><br/><hr class="hr">
					<a class="button" href="form.php?p=form&amp;id_barang=<?php echo $data['id_barang']; ?>">Buy</a><p/>
				</td>
			<?php } ?>
		</tr>
		<tr>
			<td></td>
		</tr>
		<tr>
		<?php
		include "koneksi.php";
		$query = mysql_query("SELECT * FROM tb_barang where id_barang >=5 ORDER BY id_barang ASC limit 4");
		while($data=mysql_fetch_array($query)){
		?>
				<td align="center" class="border">
					<br/><font class="judul"><?php echo $data['nama_barang'];?></font><br/><br/>
					<img title="<?php echo $data['nama_barang'];?>" class="img" src="img/<?php echo $data['produk'];?>" width="200" height="137"><br/><p/>
					Price : IDR <b><?php echo $data['harga'];?></b><br/><hr class="hr">
					<a class="button" href="form.php?p=form&amp;id_barang=<?php echo $data['id_barang']; ?>">Buy</a><p/>
				</td>
			<?php } ?>
		</tr>
	</table>
				<?php
					$p=@$_GET['p'];
					if($p==""){
					$p="footer";
					}
					include "$p.php";
				?>
</body>
</html>