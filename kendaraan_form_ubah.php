<?php 
require ("koneksi.php");

$sql="select * from kendaraantbl where id='$_GET[id]'";
$proses=mysql_query($sql);
$record=mysql_fetch_array($proses);

?>

<form id="form1" name="form1" method="post" action="kendaraan_ubah.php">
  <table width="500" border="0" align="left" cellpadding="2" cellspacing="2">
      <tr>
      <td width="32%" align="left" valign="top">
  <a href="home.php?go=Kendaraan"><img src="Gambar/Menu.png" width="32" height="32" title="Kembali" /></a>&nbsp;&nbsp;<a href="home.php?go=Kendaraan_Form"></a>
  </td>
  </tr>
    <tr>
      <td width="32%" align="left" valign="top">No Polisi</td>
      <td width="1%" align="left" valign="top">:</td>
      <td width="67%" align="left" valign="top"><input name="nopoltxt" type="text" id="nopoltxt" size="10" value="<?php echo $record['no_polisi'] ?>" />
      <input name="idtxt" type="text" id="idtxt" size="10" value="<?php echo $record['id'] ?>" hidden="true" /></td>
    </tr>
    <tr>
      <td align="left" valign="top">Nama Kendaraan</td>
      <td align="left" valign="top">:</td>
      <td align="left" valign="top"><input name="nmkendaraantxt" type="text" id="nmkendaraantxt" size="35" value="<?php echo $record['nama_kendaraan'] ?>" /></td>
    </tr>
    <tr>
      <td align="left" valign="top">Tipe</td>
      <td align="left" valign="top">:</td>
      <td align="left" valign="top"><label for="tipelist"></label>
        <select name="tipelist" id="tipelist">
          <option selected="selected"><?php echo $record['tipe']; ?></option>        
          <option value="AT">AT</option>
          <option value="MT">MT</option>
      </select></td>
    </tr>
    <tr>
      <td align="left" valign="top">Warna</td>
      <td align="left" valign="top">:</td>
      <td align="left" valign="top"><input name="wrntxt" type="text" id="wrntxt" size="15" value="<?php echo $record['warna'] ?>" /></td>
    </tr>
    <tr>
      <td align="left" valign="top">No Rangka</td>
      <td align="left" valign="top">:</td>
      <td align="left" valign="top"><input name="norangkatxt" type="text" id="norangkatxt" size="25" value="<?php echo $record['no_rangka'] ?>" /></td>
    </tr>
    <tr>
      <td align="left" valign="top">No Mesin</td>
      <td align="left" valign="top">:</td>
      <td align="left" valign="top"><input name="nomesintxt" type="text" id="nomesintxt" size="25" value="<?php echo $record['no_mesin'] ?>" /></td>
    </tr>
    <tr>
      <td align="left" valign="top">Bahan Bakar</td>
      <td align="left" valign="top">:</td>
      <td align="left" valign="top"><input name="bbtxt" type="text" id="bbtxt" size="15" value="<?php echo $record['bahan_bakar'] ?>" /></td>
    </tr>
    <tr>
      <td align="left" valign="top">Tahun Kendaraan</td>
      <td align="left" valign="top">:</td>
      <td align="left" valign="top"><input name="thntxt" type="text" id="thntxt" size="10" value="<?php echo $record['thn_kendaraan'] ?>" /></td>
    </tr>
    <tr>
      <td align="left" valign="top">Foto</td>
      <td align="left" valign="top">:</td>
      <td align="left" valign="top"><input name="foto" type="file" id="foto" readonly="readonly" /></td>
    </tr>
    <tr>
      <td align="left" valign="top">Status</td>
      <td align="left" valign="top">:</td>
      <td align="left" valign="top"><label for="statlist"></label>
        <select name="statlist" id="statlist">
          <option selected="selected"><?php echo $record['status'] ?></option>        
          <option value="Sewa">Sewa</option>
          <option value="Ready">Ready</option>
          <option value="Perbaikan">Perbaikan</option>
      </select></td>
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
