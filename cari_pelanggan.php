<?php
include "koneksi.php";
$kode= $_POST["kode"];

$result=mysql_query("SELECT * FROM pelanggantbl where no_ktp ='$kode'");
$found=mysql_num_rows($result);
 
if($found>0){
    while ($row=mysql_fetch_array($result)){
	echo $row['nama_pelanggan'];
	}
 }else{
    echo "";
 }
?>