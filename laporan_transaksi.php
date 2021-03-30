<style type="text/css">
.main {
	margin-top: 5px;
	margin-left: 10px;
	margin-right: 10px;
	margin-bottom: 10px;
}
</style>
<div class="main">
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
	<tr>
		<th align="center" scope="col"><font face="Tahoma, Geneva, sans-serif" color="#000000" size="3">LAPORAN SEWA</font></th>
		</tr>
	<tr>
	  <td><hr /></td>
    </tr>
	<tr>
	<td>
<table width="900" border="0" align="center" cellpadding="4" cellspacing="1">   
<tr>
    	<td colspan="10" align="left" valign="middle" scope="col"><a href="index.php"><img src="Gambar/Menu.png" width="32" height="32" title="Ke Menu" /></a></td>
   	</tr>   
     <tr>
       <th colspan="9" align="center" scope="col">PERIODE : <?php echo $_POST['tglmulai'] ?> S/D <?php echo $_POST['tglsampai'] ?></th>
       </tr>
     <tr>
       <th width="5%" align="center" scope="col" bgcolor="#8665A3"><font face="Tahoma, Geneva, sans-serif" size="2">No</font></th>
       <th width="10%" align="left" scope="col" bgcolor="#8665A3"><font size="2" face="Tahoma, Geneva, sans-serif">No Sewa</font></th>
       <th width="11%" align="left" scope="col" bgcolor="#8665A3"><font size="2" face="Tahoma, Geneva, sans-serif">Tgl Sewa</font></th>
       <th width="12%" align="left" scope="col" bgcolor="#8665A3"><font size="2" face="Tahoma, Geneva, sans-serif">Tgl Kembali</font></th>
       <th width="13%" align="left" scope="col" bgcolor="#8665A3">No Polisi</th>
       <th width="16%" align="left" scope="col" bgcolor="#8665A3"><font size="2" face="Tahoma, Geneva, sans-serif">No KTP</font></th>
       <th width="12%" align="right" scope="col" bgcolor="#8665A3"><font size="2" face="Tahoma, Geneva, sans-serif">Biaya</font></th>
       <th width="10%" align="right" scope="col" bgcolor="#8665A3"><font size="2" face="Tahoma, Geneva, sans-serif">Denda</font></th>
       <th width="11%" align="right" scope="col" bgcolor="#8665A3"><font face="Tahoma, Geneva, sans-serif" size="2">Total</font></th>               
       </tr>

<?php

$tglmulai= substr($_POST['tglmulai'],6,4)."-".substr($_POST['tglmulai'],3,2)."-". substr($_POST['tglmulai'],0,2); 

$tglsampai = substr($_POST['tglsampai'],6,4)."-".substr($_POST['tglsampai'],3,2)."-". substr($_POST['tglsampai'],0,2); 

$no=1;
$sql = "select * from sewatbl inner join kembalitbl on sewatbl.no_sewa = kembalitbl.no_sewa where sewatbl.tgl_sewa >= '$tglmulai' and sewatbl.tgl_sewa <= '$tglsampai' order by sewatbl.id asc";
$proses = mysql_query($sql);
while ($record = mysql_fetch_array($proses)) 
{
?>
  <tr>
    <td align="center" scope="col" bgcolor="#CCCCCC"><font face="Tahoma, Geneva, sans-serif" size="2"><?php echo $no ?></font></td>
    <td align="left" scope="col" bgcolor="#CCCCCC"><font face="Tahoma, Geneva, sans-serif" size="2"><?php echo $record['no_sewa'] ?></font></td>
    <td align="left" scope="col" bgcolor="#CCCCCC"><font face="Tahoma, Geneva, sans-serif" size="2"><?php echo $record['tgl_sewa']?></font></td>
    <td align="center" scope="col" bgcolor="#CCCCCC"><font face="Tahoma, Geneva, sans-serif" size="2"><?php echo $record['tgl_kembali']?></font></td>
    <td align="left" scope="col" bgcolor="#CCCCCC"><font face="Tahoma, Geneva, sans-serif" size="2"><?php echo $record['no_polisi']?></font></td>
    <td align="left" scope="col" bgcolor="#CCCCCC"><font face="Tahoma, Geneva, sans-serif" size="2"><?php echo $record['no_ktp']?></font></td>
    <td align="right" scope="col" bgcolor="#CCCCCC"><font face="Tahoma, Geneva, sans-serif" size="2"><?php echo $record['biaya']?></font></td>
    <td align="right" scope="col" bgcolor="#CCCCCC"><font face="Tahoma, Geneva, sans-serif" size="2"><?php echo $record['denda']?></font></td>
    <td align="right" scope="col" bgcolor="#CCCCCC"><font face="Tahoma, Geneva, sans-serif" size="2"><?php echo $record['biaya']+$record['denda']?></font></td>    
    </tr>

<?php
$sql1 = "select sum(total) as gtotal from sewatbl inner join kembalitbl  on sewatbl.no_sewa = kembalitbl.no_sewa where sewatbl.tgl_sewa >= '$tglmulai' and sewatbl.tgl_sewa <= '$tglsampai'";
$proses1 = mysql_query($sql1);
$record1= mysql_fetch_assoc($proses1);
?>    
   <?php $no++;}?>   
  <tr>
    <td colspan="8" align="right" bgcolor="#CCCCCC" scope="col"><b><font size="2" face="Tahoma, Geneva, sans-serif">Grand Total</font></b></td>
    <td align="right" scope="col" bgcolor="#CCCCCC"><font face="Tahoma, Geneva, sans-serif" size="2"><?php echo $record1['gtotal']?></font></td>
  </tr>

</table>
<br />
</td>
</tr>
</table>
</div>