<style type="text/css">
div.ui-datepicker{
 font-size:12px;
}
</style> 

<link href="JQuery/smoothness/jquery-ui-1.10.3.custom.css" rel="stylesheet">

<script src="JQuery/jquery-1.9.1.js"></script>
<script src="JQuery/jquery-ui-1.10.3.custom.js"></script>

<SCRIPT language=Javascript>
//Membuat validasi hanya untuk input angka menggunakan kode javascript
function isNumberKey(evt)
{
var charCode = (evt.which) ? evt.which : event.keyCode
if (charCode > 31 && (charCode < 48 || charCode > 57))

return false;
return true;
}
</SCRIPT>

<script type="text/javascript">
	$(document).ready(function(){
		
	$("#tgl").datepicker({
      showOn: "both", buttonImage: "gambar/calendar.png", buttonImageOnly: true, changeMonth: true, changeYear: true, dateFormat: "dd-mm-yy"});		
				
	$("#tglsewa").datepicker({
      showOn: "both", buttonImage: "gambar/calendar.png", buttonImageOnly: true, changeMonth: true, changeYear: true, dateFormat: "dd-mm-yy"});
	  
	$("#tglkembali").datepicker({
	showOn: "both", buttonImage: "gambar/calendar.png", buttonImageOnly: true, changeMonth: true, changeYear: true, dateFormat: "dd-mm-yy"}); 
			
	function cari_pelanggan(){
		var kode=$("#noktptxt").val();
			if(kode!=""){
				$.ajax({
					type:"post",
					url:"cari_pelanggan.php",
					data:"kode="+kode,
					success:function(data){
					$("#nmpelanggantxt").val(data)
					}
				});
			}                                   
	} 
	
	function cari_kendaraan(){
		var kode=$("#nopoltxt").val();
			if(kode!=""){
				$.ajax({
					type:"post",
					url:"cari_kendaraan.php",
					data:"kode="+kode,
					success:function(data){
					$("#nmkendaraantxt").val(data)
					}
				});
			}                                   
	} 	
	
	$('#noktptxt').change(function() {
		cari_pelanggan();
    });	 	
	
	$('#nopoltxt').change(function() {
		cari_kendaraan();
    });		
	
	})
	
</script>

<?php
$sql = "select * from sewatbl order by id desc";
$proses = mysql_query($sql);
$record = mysql_fetch_array($proses);
$nosewa = $record['id']+1;
$tgltrans = date('y-m');
?>

<form id="form1" name="form1" method="post" action="sewa_simpan.php">
  <table width="500" border="0" align="left">
   <tr>
      <td width="32%" align="left" valign="top">
  <a href="home.php?go=Sewa"><img src="Gambar/Menu.png" width="32" height="32" title="Kembali" /></a>
  </td>
  </tr>
    <tr>
      <td align="left" valign="top">Tanggal</td>
      <td align="left" valign="top">:</td>
      <td align="left" valign="top"><input name="tgl" type="text" id="tgl" value="<?php echo date('d-m-Y') ?>" size="6" maxlength="10" readonly="readonly" /></td>
    </tr>
    <tr>
      <td align="left" valign="top">No Sewa</td>
      <td align="left" valign="top">&nbsp;</td>
      <td align="left" valign="top"><input name="nosewatxt" type="text" id="nosewatxt" size="15" readonly="readonly" value="<?php echo "S,$tgltrans,$nosewa"; ?>" /></td>
    </tr>
    <tr>
      <td align="left" valign="top">&nbsp;</td>
      <td align="left" valign="top">&nbsp;</td>
      <td align="left" valign="top"><hr /></td>
    </tr>
    <tr>
      <td width="32%" align="left" valign="top">No KTP</td>
      <td width="1%" align="left" valign="top">:</td>
      <td width="67%" align="left" valign="top"><input name="noktptxt" type="text" id="noktptxt" size="15" /></td>
    </tr>
    <tr>
      <td align="left" valign="top">&nbsp;</td>
      <td align="left" valign="top">:</td>
      <td align="left" valign="top"><input name="nmpelanggantxt" type="text" id="nmpelanggantxt" size="35" /></td>
    </tr>
    <tr>
      <td align="left" valign="top">&nbsp;</td>
      <td align="left" valign="top">&nbsp;</td>
      <td align="left" valign="top"><hr /></td>
    </tr>
    <tr>
      <td align="left" valign="top">No Polisi</td>
      <td align="left" valign="top">:</td>
      <td align="left" valign="top"><input name="nopoltxt" type="text" id="nopoltxt" size="15" /></td>
    </tr>
    <tr>
      <td align="left" valign="top">&nbsp;</td>
      <td align="left" valign="top">&nbsp;</td>
      <td align="left" valign="top"><input name="nmkendaraantxt" type="text" id="nmkendaraantxt" size="35" /></td>
    </tr>
    <tr>
      <td align="left" valign="top">&nbsp;</td>
      <td align="left" valign="top">&nbsp;</td>
      <td align="left" valign="top"><hr /></td>
    </tr>
    <tr>
      <td align="left" valign="top">Tgl Sewa</td>
      <td align="left" valign="top">:</td>
      <td align="left" valign="top"><input name="tglsewa" type="text" id="tglsewa" value="<?php echo date('d-m-Y') ?>" size="6" maxlength="10" readonly="readonly" /></td>
    </tr>
    <tr>
      <td align="left" valign="top">Tgl Kembali</td>
      <td align="left" valign="top">:</td>
      <td align="left" valign="top"><input name="tglkembali" type="text" id="tglkembali" value="<?php echo date('d-m-Y') ?>" size="6" maxlength="10" readonly="readonly" /></td>
    </tr>
    <tr>
      <td align="left" valign="top">Biaya /hari</td>
      <td align="left" valign="top">:</td>
      <td align="left" valign="top"><input name="biayatxt" type="text" id="biayatxt" size="20" onkeypress="return isNumberKey(event)" /></td>
    </tr>
    <tr>
      <td align="left" valign="top">Catatan</td>
      <td align="left" valign="top">:</td>
      <td align="left" valign="top"><textarea name="cattxt" cols="30" rows="3" id="cattxt"></textarea></td>
    </tr>
    <tr>
      <td align="left" valign="top">&nbsp;</td>
      <td align="left" valign="top">&nbsp;</td>
      <td align="left" valign="top"><hr /></td>
    </tr>
    <tr>
      <td align="left" valign="top">&nbsp;</td>
      <td align="left" valign="top">&nbsp;</td>
      <td align="left" valign="top"><label>
        <input type="submit" name="Submit" value="Simpan" />
        </label>
        </span></td>
    </tr>
  </table>
</form>
