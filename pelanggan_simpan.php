<?php
require("koneksi.php");

$sql="select * from pelanggantbl where no_ktp ='$_POST[notxt]'";
$proses=mysql_query($sql);
$data=mysql_fetch_array($proses);

$cari = mysql_num_rows($proses);
	if ($cari=='0'){
		
$sql2 = "INSERT INTO pelanggantbl (no_ktp,nama_pelanggan,alamat,telepon,foto)
VALUES ('$_POST[notxt]','$_POST[nmtxt]','$_POST[almtxt]','$_POST[tlptxt]','$_POST[foto]')";
$proses2 = mysql_query($sql2);
	if ($proses2) {
		echo " <meta http-equiv='refresh'content='0;home.php?go=Pelanggan'>";	
	} else { echo " <script>alert('data pelanggan error di simpan')</script>";
	}
}else{
	echo " <script>alert('data pelanggan sudah ada')</script>";
	echo " <meta http-equiv='refresh'content='0;home.php?go=Pelanggan'>";	
}	
?>