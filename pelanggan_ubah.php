<?php
require("koneksi.php");
$sql = "UPDATE pelanggantbl set no_ktp = '$_POST[notxt]', nama_pelanggan = '$_POST[nmtxt]', alamat ='$_POST[almtxt]', telepon = '$_POST[tlptxt]', foto = '$_POST[foto]' where id = '$_POST[idtxt]'";
$proses = mysql_query($sql);
	if ($proses) {
		echo "<meta http-equiv='refresh'content='0;home.php?go=Pelanggan'>";	
	} else { echo "<script>alert('data pelanggan error di ubah')</script>"; 
	}
?>