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
	
	function cari_sewa(){
		var kode1=$("#nosewatxt").val();
			if(kode1!=""){
				$.ajax({
					type:"post",
					url:"cari_sewa.php",
					data:"kode1="+kode1,
					success:function(data){
					$("#nopoltxt").val(data)
					}
				});
			}  
			
		var kode2=$("#nosewatxt").val();
			if(kode2!=""){
				$.ajax({
					type:"post",
					url:"cari_sewa.php",
					data:"kode2="+kode2,
					success:function(data){
					$("#noktptxt").val(data)
					}
				});
			} 	
			
		var kode3=$("#nosewatxt").val();
			if(kode3!=""){
				$.ajax({
					type:"post",
					url:"cari_sewa.php",
					data:"kode3="+kode3,
					success:function(data){
					$("#biayatxt").val(data)
					}
				});
			} 					                                 
			
		var kode4=$("#nosewatxt").val();
			if(kode4!=""){
				$.ajax({
					type:"post",
					url:"cari_sewa.php",
					data:"kode4="+kode4,
					success:function(data){
					$("#tglsewa").val(data)
					}
				});
			} 
			
		var kode5=$("#nosewatxt").val();
			if(kode5!=""){
				$.ajax({
					type:"post",
					url:"cari_sewa.php",
					data:"kode5="+kode5,
					success:function(data){
					$("#tglkembali").val(data)
					}
				});
			} 	
			
		var kode6=$("#nosewatxt").val();
			if(kode6!=""){
				$.ajax({
					type:"post",
					url:"cari_sewa.php",
					data:"kode6="+kode6,
					success:function(data){
					$("#totsewatxt").val(data)
					}
				});
			} 		
			
		var kode7=$("#nosewatxt").val();
			if(kode7!=""){
				$.ajax({
					type:"post",
					url:"cari_sewa.php",
					data:"kode7="+kode7,
					success:function(data){
					$("#dendatxt").val(data)
					}
				});
			}
			
		var kode8=$("#nosewatxt").val();
			if(kode8!=""){
				$.ajax({
					type:"post",
					url:"cari_sewa.php",
					data:"kode8="+kode8,
					success:function(data){
					$("#totaltxt").val(data)
					}
				});
			} 		
			
		var kode9=$("#nosewatxt").val();
			if(kode9!=""){
				$.ajax({
					type:"post",
					url:"cari_sewa.php",
					data:"kode9="+kode9,
					success:function(data){
					$("#nmpelanggantxt").val(data)
					}
				});
			} 	
			
		var kode10=$("#nosewatxt").val();
			if(kode10!=""){
				$.ajax({
					type:"post",
					url:"cari_sewa.php",
					data:"kode10="+kode10,
					success:function(data){
					$("#nmkendaraantxt").val(data)
					}
				});
			} 																	
	}				 	
		
	$('#nosewatxt').change(function() {
		cari_sewa();						
		$("#cattxt").focus()	
    });		
	
	})
	
</script>

<?php
$sql = "select * from kembalitbl order by id desc";
$proses = mysql_query($sql);
$record = mysql_fetch_array($proses);
$nokembali = $record['id']+1;
$tgltrans = date('y-m');
?>

<form id="form1" name="form1" method="post" action="kembali_simpan.php">
  <table width="500" border="0" align="left">
   <tr>
      <td width="32%" align="left" valign="top">
  <a href="home.php?go=Kembali"><img src="Gambar/Menu.png" width="32" height="32" title="Kembali" /></a>
  </td>
  </tr>
    <tr>
      <td align="left" valign="top">Tanggal</td>
      <td align="left" valign="top">:</td>
      <td align="left" valign="top"><input name="tgl" type="text" id="tgl" value="<?php echo date('d-m-Y') ?>" size="6" maxlength="10" readonly="readonly" /></td>
    </tr>
    <tr>
      <td align="left" valign="top">No Kembali</td>
      <td align="left" valign="top">&nbsp;</td>
      <td align="left" valign="top"><input name="nokembalitxt" type="text" id="nokembalitxt" size="15" readonly="readonly" value="<?php echo "K,$tgltrans,$nokembali"; ?>" /></td>
    </tr>
    <tr>
      <td align="left" valign="top">&nbsp;</td>
      <td align="left" valign="top">&nbsp;</td>
      <td align="left" valign="top"><hr /></td>
    </tr>
    <tr>
      <td align="left" valign="top">No Sewa</td>
      <td align="left" valign="top">:</td>
      <td align="left" valign="top"><input name="nosewatxt" type="text" id="nosewatxt" size="15" /></td>
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
      <td align="left" valign="top"><input name="biayatxt" type="text" id="biayatxt" size="15" readonly="readonly" /></td>
    </tr>
    <tr>
      <td align="left" valign="top">Total Biaya Sewa</td>
      <td align="left" valign="top">&nbsp;</td>
      <td align="left" valign="top"><input name="totsewatxt" type="text" id="totsewatxt" size="15" readonly="readonly" /></td>
    </tr>
    <tr>
      <td align="left" valign="top">Denda</td>
      <td align="left" valign="top">:</td>
      <td align="left" valign="top"><input name="dendatxt" type="text" id="dendatxt" size="15" onkeypress="return isNumberKey(event)" /></td>
    </tr>
    <tr>
      <td align="left" valign="top">Total Biaya + Denda</td>
      <td align="left" valign="top">:</td>
      <td align="left" valign="top"><input name="totaltxt" type="text" id="totaltxt" size="15" onkeypress="return isNumberKey(event)" /></td>
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
