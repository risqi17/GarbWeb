<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
 $id = $_POST['id'];
 $isi = $_POST['isi'];
 
 
 require_once('dbConnect.php');

	 		$sql = "INSERT INTO saran VALUES ('','$id','$isi')";
	 		if(mysqli_query($con,$sql)){
				 echo "Terima Kasih";
				 }else{
				 echo "Coba Lagi";
				 
			}
 }else{
echo 'error';
}