<?php
 function acakangkahuruf($panjang)
{
    $karakter= 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz123456789';
    $string = '';
    for ($i = 0; $i < $panjang; $i++) {
  $pos = rand(0, strlen($karakter)-1);
  $string .= $karakter{$pos};
    }
    return $string;
}
 
 if($_SERVER['REQUEST_METHOD']=='POST'){
 $id = $_POST['id'];
 $nama = $_POST['nama'];
 $jk = $_POST['jk'];
 $email = $_POST['email'];
 $password = $_POST['password'];
 $ver_code = acakangkahuruf(20);
 
 require_once('dbConnect.php');
 
	 if($nama == '' || $id == '' || $jk == '' || $email == '' || $password == ''){
	 	echo 'Isi semua form';
	 } else{
	 	
	 	$sql = "SELECT * FROM penjahit WHERE id_pjh='$id' AND email_pjh='$email'";
	 	$cek = mysqli_fetch_array(mysqli_query($con,$sql));

	 	if (isset($cek)) {
	 		echo 'User telah terdaftar';
	 	}else{
	 		$sql = "INSERT INTO penjahit VALUES ('$id','$nama','$email','','','$jk','','$password','$ver_code')";
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