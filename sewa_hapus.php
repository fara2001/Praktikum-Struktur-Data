<?php
$sql = "DELETE from sewatbl where id ='$_GET[id]'";
$proses = mysql_query($sql);
	if ($proses) {
		echo "<meta http-equiv='refresh'content='0;home.php?go=Sewa'>";			
	} else { 
		echo "<script>alert('data sewa error di hapus')</script>";
		echo "<meta http-equiv='refresh'content='0;home.php?go=Sewa'>";		
	}
?>
