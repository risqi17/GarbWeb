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

//echo acakangkahuruf(7);

 if($_SERVER['REQUEST_METHOD']=='POST'){
//importing dbConnect.php script 
 require_once('dbConnect.php');
 //Getting values 
 $email = $_POST['email'];
 $password = acakangkahuruf(7);

$cek = mysqli_num_rows(mysqli_query($con, "SELECT * FROM penjahit WHERE email_pjh='$email'"));
 
				 if ($cek > 0) {
				 	//Creating sql query
				 $sql = "UPDATE penjahit SET password_pjh = '$password' WHERE email_pjh='$email'";
				 //executing query
				 mysqli_query($con,$sql);
				 echo "Silakan Login";
				 } else {
				 	echo "Email belum terdaftar";
				 }

 mysqli_close($con);
 }