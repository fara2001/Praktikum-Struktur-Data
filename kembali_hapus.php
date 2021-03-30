<?php
$sql = "DELETE from kembalitbl where id ='$_GET[id]'";
$proses = mysql_query($sql);
	if ($proses) {
		echo "<meta http-equiv='refresh'content='0;home.php?go=Kembali'>";			
	} else { 
		echo "<script>alert('data kembali sewa error di hapus')</script>";
		echo "<meta http-equiv='refresh'content='0;home.php?go=Kembali'>";		
	}
?>
