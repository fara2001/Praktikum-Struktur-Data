<?php
require("koneksi.php");
$perintah = "UPDATE kendaraantbl set no_polisi = '$_POST[nopoltxt]', nama_kendaraan = '$_POST[nmkendaraantxt]', tipe ='$_POST[tipelist]', warna ='$_POST[wrntxt]', no_rangka = '$_POST[norangkatxt]', no_mesin = '$_POST[nomesintxt]', bahan_bakar = '$_POST[bbtxt]', thn_kendaraan = '$_POST[thntxt]', foto = '$_POST[foto]',status = '$_POST[statlist]' where id = '$_POST[idtxt]'";
$result = mysql_query($perintah);
	if ($result) {
		echo "<meta http-equiv='refresh'content='0;home.php?go=Kendaraan'>";	
	} else { echo "<script>alert('data kendaraan error di ubah')</script>"; 
	}
?>