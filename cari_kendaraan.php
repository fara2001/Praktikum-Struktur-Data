<?php
include "koneksi.php";
$kode= $_POST["kode"];

$result=mysql_query("SELECT * FROM kendaraantbl where no_polisi ='$kode'");
$found=mysql_num_rows($result);
 
if($found>0){
    while ($row=mysql_fetch_array($result)){
	echo $row['nama_kendaraan'];
	}
 }else{
    echo "";
 }
?>