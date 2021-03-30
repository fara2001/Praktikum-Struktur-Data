<?php
include "koneksi.php";
	
$sql="select * from kendaraantbl where no_polisi ='$_POST[nopoltxt]'";
$proses=mysql_query($sql);
$data=mysql_fetch_array($proses);

$cari = mysql_num_rows($proses);
	if ($cari=='0'){
	
$sql2 = "INSERT INTO kendaraantbl (no_polisi,nama_kendaraan,tipe,warna,no_rangka,no_mesin,bahan_bakar,thn_kendaraan,foto,status)
VALUES ('$_POST[nopoltxt]','$_POST[nmkendaraantxt]','$_POST[tipelist]','$_POST[wrntxt]','$_POST[norangkatxt]','$_POST[nomesintxt]','$_POST[bbtxt]','$_POST[thntxt]','$_POST[foto]','$_POST[statlist]')";
$proses2 = mysql_query($sql2);
	if ($proses2) {
		echo " <meta http-equiv='refresh'content='0;home.php?go=Kendaraan'>";	
	} else { echo " <script>alert('data kendaraan error di simpan')</script>";
	}
}else{
	echo " <script>alert('data kendaraan sudah ada')</script>";
	echo " <meta http-equiv='refresh'content='0;home.php?go=Kendaraan'>";	
}
?>