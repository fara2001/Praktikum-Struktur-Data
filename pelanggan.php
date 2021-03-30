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
		<th align="left" scope="col"><font face="Tahoma, Geneva, sans-serif" color="#000000" size="3">DATA PELANGGAN</font></th>
		</tr>
	<tr>
	  <td><hr /></td>
    </tr>
	<tr>
	<td>
<table width="900" border="0" align="center" cellpadding="4" cellspacing="1">
  	<tr>
    	<td colspan="12" align="left" valign="middle" scope="col"><a href="index.php"><img src="Gambar/Menu.png" width="32" height="32" title="Ke Menu" /></a>&nbsp;&nbsp;<a href="home.php?go=Pelanggan_Form_Simpan"><img src="gambar/Tambah.png" width="32" height="32" title="Tambah Data" /></a></td>
   	</tr>     
     <tr>
       <th width="4%" align="center" scope="col" bgcolor="#8665A3"><font face="Tahoma, Geneva, sans-serif" size="2">No</font></th>
       <th width="17%" align="left" scope="col" bgcolor="#8665A3"><font size="2" face="Tahoma, Geneva, sans-serif">No KTP</font></th>
       <th width="21%" align="left" scope="col" bgcolor="#8665A3"><font size="2" face="Tahoma, Geneva, sans-serif">Nama Pelanggan</font></th>
       <th width="27%" align="left" scope="col" bgcolor="#8665A3"><font size="2" face="Tahoma, Geneva, sans-serif">Alamat</font></th>
       <th width="11%" align="left" scope="col" bgcolor="#8665A3"><font face="Tahoma, Geneva, sans-serif" size="2">Telepon</font></th>
       <th width="12%" align="center" scope="col" bgcolor="#8665A3"><font face="Tahoma, Geneva, sans-serif" size="2">Foto</font></th>               
       <th width="8%" align="Center" scope="col" bgcolor="#8665A3"><font face="Tahoma, Geneva, sans-serif" size="2" color="#FFFFFF">Aksi</font></th>
		  </tr>

<?php
$no=1;
$sql = "select * from pelanggantbl order by id asc";
$proses = mysql_query($sql);
while ($record = mysql_fetch_array($proses)) 
{
?>
  <tr>
    <td align="center" scope="col" bgcolor="#CCCCCC"><font face="Tahoma, Geneva, sans-serif" size="2"><?php echo $no ?></font></td>
    <td align="left" scope="col" bgcolor="#CCCCCC"><font face="Tahoma, Geneva, sans-serif" size="2"><?php echo $record['no_ktp'] ?></font></td>
    <td align="left" scope="col" bgcolor="#CCCCCC"><font face="Tahoma, Geneva, sans-serif" size="2"><?php echo $record['nama_pelanggan']?></font></td>
    <td align="left" scope="col" bgcolor="#CCCCCC"><font face="Tahoma, Geneva, sans-serif" size="2"><?php echo $record['alamat']?></font></td>
    <td align="left" scope="col" bgcolor="#CCCCCC"><font face="Tahoma, Geneva, sans-serif" size="2"><?php echo $record['telepon']?></font></td>
    <td align="center" scope="col" bgcolor="#CCCCCC"><font face="Tahoma, Geneva, sans-serif" size="2"><img src="foto/pelanggan/<?php echo $record['foto'] ?>" width="75" height="80" border="0" valign="middle"></font></td>  
    <th align="Center" scope="col" bgcolor="#CCCCCC"><a href="?go=Pelanggan_Form_Ubah&amp;id=<?php echo $record['id']; ?>"><img src="/Gambar/Ubah.png" width="15" height="15" title="Ubah" /></a>&nbsp;&nbsp;<a href="?go=Pelanggan_Hapus&amp;id=<?php echo $record['id']; ?>"><img src="gambar/hapus.png" width="15" height="15" title="Hapus" /></a></th>
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