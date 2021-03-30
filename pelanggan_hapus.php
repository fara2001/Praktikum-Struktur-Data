<?php
$sql = "DELETE from pelanggantbl where id ='$_GET[id]'";
$proses = mysql_query($sql);
	if ($proses) {
		echo "<meta http-equiv='refresh'content='0;home.php?go=Pelanggan'>";			
	} else { 
		echo "<script>alert('data pelanggan error di hapus')</script>";
		echo "<meta http-equiv='refresh'content='0;home.php?go=Pelanggan'>";		
	}
?>
