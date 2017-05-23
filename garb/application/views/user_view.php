<html>
<head>
	<title>user</title>
</head>
<body>
	<center><h1>Konfirmasi User</h1></center>
	<table style="margin:20px auto;" border="1">
		<tr>
		<th>No</th>
		<th>id </th>
		<th>nama </th>
		<th>email </th>
		<th>telepon</th>
		<th>jk</th>
		<th>foto</th>
		<th>alamat</th>
		<th>password</th>
		</tr>
		<?php
		$no = 1;
		foreach($user as $p){
			?>
			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $p->id_user ?></td>
				<td><?php echo $p->nama_user ?></td>
				<td><?php echo $p->email_user ?></td>
				<td><?php echo $p->telepon_user ?></td>
				<td><?php echo $p->jk_user ?></td>
				<td><?php echo $p->foto_user ?></td>
				<td><?php echo $p->alamat_user ?></td>
				<td><?php echo $p->password_user ?></td>
			</tr>
		<?php } ?>
	</table>
</body>
</html>
		