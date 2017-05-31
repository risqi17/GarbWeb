<?php
require_once('dbConnect.php');
// $user = $_SESSION['user'];
// // $user = "risqi";
$sql = "select id_pemesanan, id_model, ukuran from pemesanan";
 
$res = mysqli_query($con,$sql);
 
$pesanan = array();
 
while($row = mysqli_fetch_array($res)){
array_push($pesanan,
array('id_pemesanan'=>$row[0],
'id_model'=>$row[1],
'ukuran'=>$row[2]
));
}
 
echo json_encode(array("pesanan"=>$pesanan));
 
mysqli_close($con);
 
?>