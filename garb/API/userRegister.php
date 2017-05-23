<?php
 
 if($_SERVER['REQUEST_METHOD']=='POST'){
 $id = $_POST['id'];
 $nama = $_POST['nama'];
 $jk = $_POST['jk'];
 $email = $_POST['email'];
 $password = $_POST['password'];
 
 require_once('dbConnect.php');
 
	 if($nama == '' || $id == '' || $jk == '' || $email == '' || $password == ''){
	 	echo 'Isi semua form';
	 } else{
	 	
	 	$sql = "SELECT * FROM user WHERE id_user='$id' AND email_user='$email'";
	 	$cek = mysqli_fetch_array(mysqli_query($con,$sql));

	 	if (isset($cek)) {
	 		echo 'User telah terdaftar';
	 	}else{
	 		$sql = "INSERT INTO user VALUES ('$id','$nama','$email','','$jk','','','$password')";
	 		if(mysqli_query($con,$sql)){
				 echo "Berhasil Daftar";
				 }else{
				 echo "Gagal Daftar";
				 
			}
	 	}
	 	mysqli_close($con);
	 }
 }else{
echo 'error';
}