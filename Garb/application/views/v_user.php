<html>
<head>
	<title>Tabel User</title>
</head>
<body>
	<center><h1>Tabel User</h1></center>
	<table style="margin:20px auto;" border="1">
		<tr>
		<th>ID User</th>
		<th>Nama User</th>
		<th>Email User</th>
		<th>Telepon User</th>
		<th>Jenis Kelamin User</th>
		<th>Foto User</th>
		<th>Alamat User</th>
		<th>Password User</th>
		</tr>
		<?php
		foreach($user as $p){
			?>
			<tr>
				<td align="center"><?php echo $p->id_user ?></td>
				<td align="center"><?php echo $p->nama_user ?></td>
				<td align="center"><?php echo $p->email_user ?></td>
				<td align="center"><?php echo $p->telepon_user ?></td>
				<td align="center"><?php echo $p->jk_user?></td>
				<td align="center"><?php echo $p->foto_user ?></td>
				<td align="center"><?php echo $p->alamat_user ?></td>
				<td align="center"><?php echo $p->password_user ?></td>
			</tr>
		<?php } ?>
	</table>
</body>
</html>
			