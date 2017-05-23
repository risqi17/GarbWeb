<html>
<head>
<title>daftar user</title>
</head>

<body>
<div id="container">
	<h1>Silahkan isi data</h1>
	
<div id="body">
<form action="<?php echo site_url('input/insert')?>" method="POST">

		Id : <input type="text" name="id" placeholder="id"><br><br>

		Nama : <input type="text" name="nama" placeholder="username"><br><br>
		
		Email : <input type="text" name="email" placeholder="email"><br><br>

		Telephone : <input type="text" name="telepon" placeholder="telepon"><br><br>

		Jenis Kelamin :
		<input type="radio" name="jk" value="p" >
		<input type="radio" name="jk" value="l" >
		<!--<input type="submit" name="enter" value="enter">--><br><br>
	<!--<div class="upload">-->
	<!--	<p>Masukkan Foto</p><br>-->

		Foto :
		<input type="file" name="foto" size="20">
		<!--<input type="submit" value="uploud" name="upload">--><br><br>

		Alamat : <input type="text" name="alamat" placeholder="alamat"><br><br>

		Password : <input type="password" name="password" placeholder="password"><br><br>
		<input type="submit" name="simpan" value="daftar">
		
</form>
</div>

</div>
</body>
</html> 