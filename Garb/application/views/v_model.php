<html>
<head>
	<title>Tabel Model</title>
</head>
<body>
	<center><h1>Tabel Model</h1></center>
	<table style="margin:20px auto;" border="1">
		<tr>
		<th>ID Model</th>
		<th>Nama Model</th>
		<th>Ukuran</th>
		<th>Warna</th>
		<th>Harga</th>
		<th>Foto</th>
		</tr>
		<?php
		foreach($model as $p){
			?>
			<tr>
				<td align="center"><?php echo $p->id_model ?></td>
				<td align="center"><?php echo $p->nama_model ?></td>
				<td align="center"><?php echo $p->ukuran ?></td>
				<td align="center"><?php echo $p->warna ?></td>
				<td align="center"><?php echo $p->harga ?></td>
				<td align="center"><?php echo $p->foto ?></td>
			</tr>
		<?php } ?>
	</table>
</body>
</html>
			