<?php
 
 if($_SERVER['REQUEST_METHOD']=='POST'){
 
 $image = $_POST['image'];
 $name = $_POST['name'];
 //$penjahit = $_POST['penjahit'];
 $penjahit = "dimas";
 
 require_once('dbConnect.php');
 
 $sql ="SELECT id FROM photo ORDER BY id ASC";
 
 $res = mysqli_query($con,$sql);
 
 $id = 0;
 
 while($row = mysqli_fetch_array($res)){
 $id = $row['id'];
 }
 
 $path = "images/$id.png";
 
 $actualpath = "http://localhost/Garb/$path";
 
 $sql = "INSERT INTO photo (nama_foto,photo,penjahit) VALUES ('$name','$actualpath','$penjahit')";
 
 if(mysqli_query($con,$sql)){
 file_put_contents($path,base64_decode($image));
 echo "Successfully Uploaded";
 }
 
 mysqli_close($con);
 }else{
 echo "Error";
 }
