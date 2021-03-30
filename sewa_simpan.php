<?php
include "koneksi.php";

$tgl = substr($_POST['tgl'],6,4)."-".substr($_POST['tgl'],3,2)."-". substr($_POST['tgl'],0,2); 

$tglsewa = substr($_POST['tglsewa'],6,4)."-".substr($_POST['tglsewa'],3,2)."-". substr($_POST['tglsewa'],0,2); 

$tglkembali = substr($_POST['tglkembali'],6,4)."-".substr($_POST['tglkembali'],3,2)."-". substr($_POST['tglkembali'],0,2); 
	
$sql = "INSERT INTO sewatbl (tanggal,no_sewa,no_ktp,no_polisi,tgl_sewa,tgl_kembali,biaya,catatan,status)
VALUES ('$tgl','$_POST[nosewatxt]','$_POST[noktptxt]','$_POST[nopoltxt]','$tglsewa','$tglkembali','$_POST[biayatxt]','$_POST[cattxt]','Sewa')";
$proses = mysql_query($sql);
	if ($proses) {
		echo " <meta http-equiv='refresh'content='0;home.php?go=Sewa'>";	
	} else { echo " <script>alert('data sewa error di simpan')</script>";
	}
?>