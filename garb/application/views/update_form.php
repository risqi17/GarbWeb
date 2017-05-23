<html>
<head>
	<title> Demo Crud</title>
<head>
<body>
	<h2> Demo Crud</h2>
	<p><strong>Ubah Data</strong></p>
	
	<form action="create" method="POST">
		<?php echo $model->labels['username'];?><br/>
		<input type="text" name="username" size="10" maxlength="10" value="<?php echo  $model->username;?>"/><br/><br/>
		
		<?php echo $model->labels['nama_admin'];?><br/>
		<input type="text" name="nama_admin" size="30" maxlength="25" value="<?php echo  $model->nama_admin;?>"/><br/><br/>
		
		<?php echo $model->labels['email'];?><br/>
		<textarea name="email"><?php echo $model->email;?></textarea><br/><br/>
		
		<?php echo $model->labels['password'];?><br/>
		<textarea name="password"><?php echo $model->password;?></textarea><br/><br/>
		
		<input type="submit" name="btnUbah" value="simpan"/>
		<input type="button" value="batal" onclick="javascript:history.go(-1);"/>
	</form>
</body>
</html>