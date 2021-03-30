<?php
include "koneksi.php";

$tgl = substr($_POST['tgl'],6,4)."-".substr($_POST['tgl'],3,2)."-". substr($_POST['tgl'],0,2); 

$tglsewa = substr($_POST['tglsewa'],6,4)."-".substr($_POST['tglsewa'],3,2)."-". substr($_POST['tglsewa'],0,2); 

$tglkembali = substr($_POST['tglkembali'],6,4)."-".substr($_POST['tglkembali'],3,2)."-". substr($_POST['tglkembali'],0,2); 
	
$sql = "INSERT INTO kembalitbl (tanggal,no_kembali,no_sewa,no_ktp,no_polisi,tgl_sewa,tgl_kembali,biaya,denda,total,catatan)
VALUES ('$tgl','$_POST[nokembalitxt]','$_POST[nosewatxt]','$_POST[noktptxt]','$_POST[nopoltxt]','$tglsewa','$tglkembali','$_POST[totsewatxt]','$_POST[dendatxt]','$_POST[totaltxt]','$_POST[cattxt]')";
$proses = mysql_query($sql);
	if ($proses) {
		
		$sql2 = "UPDATE kendaraantbl set status = 'Ready' where no_polisi = '$_POST[nopoltxt]'";
		$proses2 = mysql_query($sql2);
		
		$sql3 = "UPDATE sewatbl set status = 'Kembali' where no_sewa = '$_POST[nosewatxt]'";
		$proses3 = mysql_query($sql3);		

		echo " <meta http-equiv='refresh'content='0;home.php?go=Kembali'>";	
	} else { echo " <script>alert('data kembali error di simpan')</script>";
	}
?>