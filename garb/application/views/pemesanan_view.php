<html>
<head>
	<title>pemesanan</title>
</head>
<body>
	<center><h1>Konfirmasi Pemesanan</h1></center>
	<table style="margin:20px auto;" border="1">
		<tr>
		<th>No</th>
		<th>id pemesanan</th>
		<th>id user</th>
		<th>id penjahit</th>
		<th>id model</th>
		<th>keterangan</th>
		<th>jumlah</th>
		<th>estimasi waktu</th>
		<th>total harga</th>
		</tr>
		<?php
		$no = 1;
		foreach($pemesanan as $p){
			?>
			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $p->id_pemesanan ?></td>
				<td><?php echo $p->id_user ?></td>
				<td><?php echo $p->id_pjh ?></td>
				<td><?php echo $p->id_model ?></td>
				<td><?php echo $p->keterangan ?></td>
				<td><?php echo $p->jumlah ?></td>
				<td><?php echo $p->estimasi_waktu ?></td>
				<td><?php echo $p->total_harga ?></td>
				
			</tr>
		<?php } ?>
	</table>
</body>
</html>
		