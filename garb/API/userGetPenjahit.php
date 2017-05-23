<?php
require_once('dbConnect.php');
$sql = "select id_pjh, nama_pjh from penjahit";
 
$res = mysqli_query($con,$sql);
 
$penjahit = array();
 
while($row = mysqli_fetch_array($res)){
array_push($penjahit,
array('id'=>$row[0],
'nama'=>$row[1]
));
}
 
echo json_encode(array("penjahit"=>$penjahit));
 
mysqli_close($con);
 
?>