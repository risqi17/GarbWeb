<html>
<head>
<title>daftar admin</title>
</head>

<body>
<div id="container">
	<h1>Silahkan isi data</h1>
	
<div id="body">
<form action="<?php echo base_url('daftar/insert')?>" method="POST">

		Username  : <input type="text" name="username" placeholder="username"><br><br>

		Nama      : <input type="text" name="nama" placeholder="nama"><br><br>
		
		Email     : <input type="text" name="email" placeholder="email"><br><br>
		
		Password  : <input type="password" name="password" placeholder="password"><br><br>
		
		<input type="submit" name="simpan" value="daftar">
		
</form>
</div>

</div>
</body>
</html> 