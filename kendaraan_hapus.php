<?php
$sql = "DELETE from kendaraantbl where id ='$_GET[id]'";
$proses = mysql_query($sql);
	if ($proses) {
		echo "<meta http-equiv='refresh'content='0;home.php?go=Kendaraan'>";			
	} else { 
		echo "<script>alert('data kendaraan error di hapus')</script>";
		echo "<meta http-equiv='refresh'content='0;home.php?go=Kendaraan'>";		
	}
?>
