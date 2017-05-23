<html>
<head>
	<title>Konfirmasi Pembayaran</title>
</head>
<body>
	<center><h1>Konfirmasi Pembayaran</h1></center>
	<table style="margin:20px auto;" border="1">
		<tr>
		<th>No</th>
		<th>id pembayaran</th>
		<th>id pemesan</th>
		<th>jenis bayar</th>
		<th>status</th>
		</tr>
		<?php
		$no = 1;
		foreach($pembayaran as $p){
			?>
			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $p->id_pembayaran ?></td>
				<td><?php echo $p->id_pemesanan ?></td>
				<td><?php echo $p->jenis_bayar ?></td>
				<td><?php echo $p->status ?></td>
				
			</tr>
		<?php } ?>
	</table>
</body>
</html>
		
			