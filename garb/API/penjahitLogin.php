<?php 
 
 if($_SERVER['REQUEST_METHOD']=='POST'){
 //Getting values 
 $id = $_POST['id'];
 $password = $_POST['password'];
 
//importing dbConnect.php script 
 require_once('dbConnect.php');

 $ck = mysqli_fetch_array(mysqli_query($con, "SELECT * FROM penjahit WHERE id_pjh='$id'"));
 $sql = "SELECT * FROM penjahit WHERE id_pjh='$id' AND password_pjh='$password'";

 if ($ck['ver_code'] <> '') {
 	echo "Akun anda belum diverifikasi";
 }else{
	 //executing query
	 $result = mysqli_query($con,$sql);
	 
	 //fetching result
	 $check = mysqli_fetch_array($result);
	 
	 //if we got some result 
	 if(isset($check)){
	 //displaying success 
	 echo "success";
	 }else{
	 //displaying failure
	 echo "failure";
	 }

 }


 mysqli_close($con);
 }