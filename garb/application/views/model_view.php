<html>
<head>
	<title>model</title>
</head>
<body>
	<center><h1>Konfirmasi Model</h1></center>
	<table style="margin:20px auto;" border="1">
		<tr>
		<th>No</th>
		<th>id model</th>
		<th>nama model</th>
		<th>ukuran</th>
		<th>warna</th>
		<th>harga</th>
		<th>foto</th>
		</tr>
		<?php
		$no = 1;
		foreach($model as $p){
			?>
			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $p->id_model ?></td>
				<td><?php echo $p->nama_model ?></td>
				<td><?php echo $p->ukuran ?></td>
				<td><?php echo $p->warna ?></td>
				<td><?php echo $p->harga ?></td>
				<td><?php echo $p->foto ?></td>
			</tr>
		<?php } ?>
	</table>
</body>
</html>
		