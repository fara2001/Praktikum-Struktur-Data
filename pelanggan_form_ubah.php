<?php 
require ("koneksi.php");

$sql="select * from pelanggantbl where id='$_GET[id]'";
$proses=mysql_query($sql);
$record=mysql_fetch_array($proses);

?>

<form id="form1" name="form1" method="post" action="pelanggan_ubah.php">
  <table width="500" border="0" align="left">
   <tr>
      <td width="32%" align="left" valign="top">
  <a href="home.php?go=Pelanggan"><img src="Gambar/Menu.png" width="32" height="32" title="Kembali" /></a>
  </td>
  </tr>
    <tr>
      <td width="32%" align="left" valign="top">No KTP</td>
      <td width="1%" align="left" valign="top">:</td>
      <td width="67%" align="left" valign="top"><input name="notxt" type="text" id="notxt" size="15" value="<?php echo $record['no_ktp'] ?>" />
        <label for="idtxt"></label>
      <input type="text" name="idtxt" id="idtxt" value="<?php echo $record['id'] ?>" hidden="true" /></td>
    </tr>
    <tr>
      <td align="left" valign="top">Nama Pelanggan</td>
      <td align="left" valign="top">:</td>
      <td align="left" valign="top"><input name="nmtxt" type="text" id="nmtxt" size="35" value="<?php echo $record['nama_pelanggan'] ?>" /></td>
    </tr>
    <tr>
      <td align="left" valign="top">Alamat</td>
      <td align="left" valign="top">:</td>
      <td align="left" valign="top"><textarea name="almtxt" cols="35" rows="4" id="almtxt"><?php echo $record['alamat'] ?></textarea></td>
    </tr>
    <tr>
      <td align="left" valign="top">Telepon</td>
      <td align="left" valign="top">:</td>
      <td align="left" valign="top"><input name="tlptxt" type="text" id="tlptxt" size="20" value="<?php echo $record['telepon'] ?>" /></td>
    </tr>
    <tr>
      <td align="left" valign="top">Foto</td>
      <td align="left" valign="top">:</td>
      <td align="left" valign="top"><input name="foto" type="file" id="foto" readonly="readonly" value="<?php echo $record['foto'] ?>"/></td>
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
        <input type="submit" name="Submit" value="  Ubah  " />
        </label>
        </span></td>
    </tr>
  </table>
</form>
