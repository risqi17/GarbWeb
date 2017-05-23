<html>
<head>
<title>Demo konfirmasi</title>
</head>
<body>
	<h2>Konfirmasi Pembayaran</h2>

	<table border="1">
		<tr>
			<th width="100">id pembayaran</th>
			<th width="120">id pemesanan</th>
			<th width="100">jenis bayar</th>
			<th width="100">jumlah bayar</th>
			<th width="100">status</th>
			<th width="100"></th>
		</tr>
		
		<?php
			foreach($rows as $row){
		?>
		<tr>
			<td><?php echo $row->id_pembayaran; ?></td>
			<td><?php echo $row->id_pemesanan; ?></td>
			<td><?php echo $row->jenis_bayar; ?></td>
			<td><?php echo $row->jumlah_bayar; ?></td>
			<td><?php echo $row->status; ?></td>
			<td align="center"><a href="konfirmasi/update/<?php echo $row->id_pembayaran;?>">Ubah</a>
			<a href="konfirmasi/delete/<?php echo $row->id_pembayaran;?>">Hapus</a></td>
		</tr>
		<?php
			
			}
			?>
		</table>
		
		
		
		
</body>
</html>