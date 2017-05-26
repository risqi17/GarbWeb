<?php
 require_once('dbConnect.php');
$sql = "SELECT max(id_pemesanan) as terakhir from pemesanan";
$hasil = mysqli_query($con,$sql);
$data = mysqli_fetch_array($hasil);
$lastID = $data['terakhir'];
$lastNoUrut = substr($lastID, 3, 9);
$nextNoUrut = $lastNoUrut + 1;
$nextID = "PM".sprintf("%08s",$nextNoUrut);

if($_SERVER['REQUEST_METHOD']=='POST'){
 $id = $nextID;
 $user = $_POST['user'];
 $penjahit = "q";
 $model = $_POST['model'];
 $ukuran = $_POST['ukuran'];
 $warna = $_POST['warna'];
 $jenis = $_POST['jenis'];
 $keterangan = $_POST['keterangan'];
 $jumlah = $_POST['jumlah'];


	 		$sql = "INSERT INTO pemesanan VALUES ('$id','$user','$penjahit','$model','$ukuran','$warna','$jenis','$keterangan','$jumlah','','')";
	 		if(mysqli_query($con,$sql)){
				 echo "Berhasil";
				 }else{
				 echo "Coba Lagi";
				 
			}
 }else{
echo 'error';
}