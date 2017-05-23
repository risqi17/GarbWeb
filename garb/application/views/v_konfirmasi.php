<html>
<head>
	<title>Konfirmasi Penjahit</title>
</head>
<body>
	<center><h1>Konfirmasi Penjahit</h1></center>
	<table style="margin:20px auto;" border="1">
		<tr>
		<th>ID Penjahit</th>
		<th>Nama Penjahit</th>
		<th>Email Penjahit</th>
		<th>Telepon Penjahit</th>
		<th>Alamat Penjahit</th>
		<th>Jenis Kelamin Penjahit</th>
		<th>Foto Penjahit</th>
		<th>Password Penjahit</th>
		</tr>
		<?php
		foreach($penjahit as $p){
			?>
			<tr>
				<td align="center"><?php echo $p->id_pjh ?></td>
				<td align="center"><?php echo $p->nama_pjh ?></td>
				<td align="center"><?php echo $p->email_pjh ?></td>
				<td align="center"><?php echo $p->telepon_pjh ?></td>
				<td align="center"><?php echo $p->alamat_pjh ?></td>
				<td align="center"><?php echo $p->jk_pjh ?></td>
				<td align="center"><?php echo $p->foto_pjh ?></td>
				<!--<td align="center"><input name="foto" type="file">-->
				<td align="center"><?php echo $p->password_pjh ?></td>
				
			</tr>
		<?php } ?>
	</table>
</body>
</html>
			