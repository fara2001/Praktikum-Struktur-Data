<style type="text/css">
div.ui-datepicker{
 font-size:12px;
}
</style> 

<link href="JQuery/smoothness/jquery-ui-1.10.3.custom.css" rel="stylesheet">

<script src="JQuery/jquery-1.9.1.js"></script>
<script src="JQuery/jquery-ui-1.10.3.custom.js"></script>

<script type="text/javascript">
	$(document).ready(function(){
		
				
	$("#tglmulai").datepicker({
      showOn: "both", buttonImage: "gambar/calendar.png", buttonImageOnly: true, changeMonth: true, changeYear: true, dateFormat: "dd-mm-yy"});
	  
	$("#tglsampai").datepicker({
	showOn: "both", buttonImage: "gambar/calendar.png", buttonImageOnly: true, changeMonth: true, changeYear: true, dateFormat: "dd-mm-yy"}); 
	})
	
</script>

<form name="form1" method="post" action="home.php?go=Laporan_Transaksi">
  <table width="500" border="0" align="center" cellpadding="2" cellspacing="2">
  <tr>
      <td width="32%" align="left" valign="top">
  <a href="index.php"><img src="Gambar/Menu.png" width="32" height="32" title="Kembali" /></a>
  </td>
  </tr>
    <tr>
      <td scope="col">Mulai Tanggal</td>
      <td width="8" scope="col">:</td>
      <td width="377" scope="col"><input name="tglmulai" type="text" id="tglmulai" value="<?php echo date('d-m-Y') ?>" size="6" maxlength="10" readonly /></td>
    </tr>
    <tr>
      <td>Sampai Tanggal</td>
      <td>:</td>
      <td><input name="tglsampai" type="text" id="tglsampai" value="<?php echo date('d-m-Y') ?>" size="6" maxlength="10" readonly /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><input type="submit" name="lprbtn" id="lprbtn" value="Proses"></td>
    </tr>
  </table>
</form>
