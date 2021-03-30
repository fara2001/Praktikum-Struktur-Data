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
		<th align="left" scope="col"><font face="Tahoma, Geneva, sans-serif" color="#000000" size="3">DATA KENDARAAN</font></th>
		</tr>
	<tr>
	  <td><hr /></td>
    </tr>
	<tr>
	<td>
<table width="900" border="0" align="center" cellpadding="4" cellspacing="1">
  	<tr>
    	<td colspan="12" align="left" valign="middle" scope="col"><a href="index.php"><img src="Gambar/Menu.png" width="32" height="32" title="Ke Menu" /></a>&nbsp;&nbsp;<a href="home.php?go=Kendaraan_Form_Simpan"><img src="gambar/Tambah.png" width="32" height="32" title="Tambah Data" /></a></td>
   	</tr>     
     <tr>
       <th width="3%" align="center" scope="col" bgcolor="#8665A3"><font face="Tahoma, Geneva, sans-serif" size="2">No</font></th>
       <th width="8%" align="left" scope="col" bgcolor="#8665A3"><font size="2" face="Tahoma, Geneva, sans-serif">No Polisi</font></th>
       <th width="16%" align="left" scope="col" bgcolor="#8665A3"><font size="2" face="Tahoma, Geneva, sans-serif">Nama Kendaraan</font></th>
       <th width="5%" align="center" scope="col" bgcolor="#8665A3"><font size="2" face="Tahoma, Geneva, sans-serif">Tipe</font></th>
       <th width="9%" align="center" scope="col" bgcolor="#8665A3">Warna</th>
       <th width="11%" align="left" scope="col" bgcolor="#8665A3"><font face="Tahoma, Geneva, sans-serif" size="2">No Mesin</font></th>
       <th width="10%" align="left" scope="col" bgcolor="#8665A3"><font face="Tahoma, Geneva, sans-serif" size="2">No Rangka</font></th>
       <th width="13%" align="center" scope="col" bgcolor="#8665A3">Bahan Bakar</th>
       <th width="9%" align="center" scope="col" bgcolor="#8665A3">Tahun</th>  
       <th width="7%" align="center" scope="col" bgcolor="#8665A3"><font face="Tahoma, Geneva, sans-serif" size="2">Status</font></th>               
       <th width="9%" align="Center" scope="col" bgcolor="#8665A3"><font face="Tahoma, Geneva, sans-serif" size="2" color="#FFFFFF">Aksi</font></th>
		  </tr>

<?php
$no=1;
$sql = "select * from kendaraantbl order by id asc";
$proses = mysql_query($sql);
while ($record = mysql_fetch_array($proses)) 
{
?>
  <tr>
    <td align="center" scope="col" bgcolor="#CCCCCC"><font face="Tahoma, Geneva, sans-serif" size="2"><?php echo $no ?></font></td>
    <td align="left" scope="col" bgcolor="#CCCCCC"><font face="Tahoma, Geneva, sans-serif" size="2"><?php echo $record['no_polisi'] ?></font></td>
    <td align="left" scope="col" bgcolor="#CCCCCC"><font face="Tahoma, Geneva, sans-serif" size="2"><?php echo $record['nama_kendaraan']?></font></td>
    <td align="center" scope="col" bgcolor="#CCCCCC"><font face="Tahoma, Geneva, sans-serif" size="2"><?php echo $record['tipe']?></font></td>
    <td align="left" scope="col" bgcolor="#CCCCCC"><font face="Tahoma, Geneva, sans-serif" size="2"><?php echo $record['warna']?></font></td>
    <td align="left" scope="col" bgcolor="#CCCCCC"><font face="Tahoma, Geneva, sans-serif" size="2"><?php echo $record['no_mesin']?></font></td>
    <td align="left" scope="col" bgcolor="#CCCCCC"><font face="Tahoma, Geneva, sans-serif" size="2"><?php echo $record['no_rangka']?></font></td>
    <td align="center" scope="col" bgcolor="#CCCCCC"><font face="Tahoma, Geneva, sans-serif" size="2"><?php echo $record['bahan_bakar']?></font></td>
    <td align="center" scope="col" bgcolor="#CCCCCC"><font face="Tahoma, Geneva, sans-serif" size="2"><?php echo $record['thn_kendaraan']?></font></td>
    <td align="center" scope="col" bgcolor="#CCCCCC"><font face="Tahoma, Geneva, sans-serif" size="2"><?php echo $record['status']?></font></td>    
    <th align="Center" scope="col" bgcolor="#CCCCCC"><a href="?go=Kendaraan_Form_Ubah&amp;id=<?php echo $record['id']; ?>"><img src="gambar/ubah.png" width="15" height="15" title="Ubah" /></a>&nbsp;&nbsp;<a href="?go=Kendaraan_Hapus&amp;id=<?php echo $record['id']; ?>"><img src="gambar/hapus.png" width="15" height="15" title="Hapus" /></a></th>
  </tr>
  <?php $no++;}?>
   <tr>
    <td colspan="12"align="left" scope="col"><hr /></td>
  </tr>  
    <tr>
    <td colspan="12" align="left" scope="col" bgcolor="#FFFFFF"><font face="Tahoma, Geneva, sans-serif" size="2"><b>Record : </b><?php echo $no-1 ?></font></td>
  </tr>
</table>
<br />
</td>
</tr>
</table>
</div>