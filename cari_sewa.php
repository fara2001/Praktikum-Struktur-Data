<?php error_reporting(E_ERROR | E_WARNING | E_PARSE); ?>
<?php
include "koneksi.php";

$kode1= $_POST["kode1"];
$kode2= $_POST["kode2"];
$kode3= $_POST["kode3"];
$kode4= $_POST["kode4"];
$kode5= $_POST["kode5"];
$kode6= $_POST["kode6"];
$kode7= $_POST["kode7"];
$kode8= $_POST["kode8"];
$kode9= $_POST["kode9"];
$kode10= $_POST["kode10"];

$result1=mysql_query("SELECT * FROM sewatbl where no_sewa ='$kode1'");
$found1=mysql_num_rows($result1);
 
if($found1>0){
    while ($data1=mysql_fetch_array($result1)){
	echo $data1['no_polisi'];
	}
 }else{
    echo "";
 }
 
$result2=mysql_query("SELECT * FROM sewatbl where no_sewa ='$kode2'");
$found2=mysql_num_rows($result2);
 
if($found2>0){
    while ($data2=mysql_fetch_array($result2)){
	echo $data2['no_ktp'];
	}
 }else{
    echo "";
 }
 
$result3=mysql_query("SELECT * FROM sewatbl where no_sewa ='$kode3'");
$found3=mysql_num_rows($result3);
 
if($found3>0){
    while ($data3=mysql_fetch_array($result3)){
	echo $data3['biaya'];
    }   
 }else{
    echo "";
 }
 
$result4=mysql_query("SELECT * FROM sewatbl where no_sewa ='$kode4'");
$found4=mysql_num_rows($result4);
 
if($found4>0){
    while ($data4=mysql_fetch_array($result4)){
		
    $tglsewa = substr($data4['tgl_sewa'],8,2)."-".substr($data4['tgl_sewa'],5,2)."-". substr($data4['tgl_sewa'],0,4); 
		
	echo $tglsewa;
    }   
 }else{
    echo "";
 }
 
$result5=mysql_query("SELECT * FROM sewatbl where no_sewa ='$kode5'");
$found5=mysql_num_rows($result5);
 
if($found5>0){
    while ($data5=mysql_fetch_array($result5)){
		
    $tglkembali = substr($data5['tgl_kembali'],8,2)."-".substr($data5['tgl_kembali'],5,2)."-". substr($data5['tgl_kembali'],0,4); 
			
	echo $tglkembali;
    }   
 }else{
    echo "";
 }
 
$result6=mysql_query("SELECT * FROM sewatbl where no_sewa ='$kode6'");
$found6=mysql_num_rows($result6);
 
if($found6>0){
	
	$data6=mysql_fetch_array($result6);
	
	$tglsewa =$data6['tgl_sewa'];
	$tglkembali =$data6['tgl_kembali'];
	
	//Menghitung total lama sewa dengan asumsi tanggal kembali dikurang tanggal sewa
	$selisih = strtotime($tglkembali) - strtotime($tglsewa);
	$masa = ($selisih/(60*60*24))+1;	
		
	$total= $data6['biaya']*$masa;	
	
	echo $total;
	
     
 }else{
    echo "";
 }
 
$result7=mysql_query("SELECT * FROM sewatbl where no_sewa ='$kode7'");
$found7=mysql_num_rows($result7);
 
if($found7>0){
	
	$data7=mysql_fetch_array($result7);
		
	$tglkembali = $data7['tgl_kembali'];
	$tgldenda=date('Y-m-d');
		
	$selisih = strtotime($tgldenda) - strtotime($tglkembali);
	$masa = $selisih/(60*60*24);	
		
	$denda= $data7['biaya'] * $masa;	
	
	if ($denda<=0) {
	echo "0"; 
	}else{
	echo $denda;
	}
	     
 }else{
    echo "";
 }
 
$result8=mysql_query("SELECT * FROM sewatbl where no_sewa ='$kode8'");
$found8=mysql_num_rows($result8);
 
if($found8>0){
	
	$data8=mysql_fetch_array($result8);
		
	$tglkembali = $data8['tgl_kembali'];
	$tglsewa = $data8['tgl_sewa'];	
	$tgldenda=date('Y-m-d');
		
	$selisih = strtotime($tgldenda) - strtotime($tglkembali);
	$masa = $selisih/(60*60*24);	
		
	//Perhitungan denda dengan lama hari, nominal denda 1 hari sama dengan biaya sewa 1 hari dikalikan
	//lama keterlambatan
	$denda= $data8['biaya'] * $masa;	
	
	if ($denda<=0) {$denda="0";}
	
	$selisih1 = strtotime($tglkembali) - strtotime($tglsewa);
	$masa1 = ($selisih1/(60*60*24))+1;	
	
	$total2= ($data8['biaya']*$masa1)+$denda;
		
	if ($total2<=0) {
	echo "0"; }else{
	echo $total2;
	}
	     
 }else{
    echo "";
 } 
 
$result9=mysql_query("SELECT * FROM sewatbl INNER JOIN pelanggantbl on sewatbl.no_ktp = pelanggantbl.no_ktp where sewatbl.no_sewa ='$kode9'");
$found9=mysql_num_rows($result9);
 
if($found9>0){
	
	$data9=mysql_fetch_array($result9);
	
	echo $data9['nama_pelanggan'];
			     
 }else{
    echo "";
 } 
 
$result10=mysql_query("SELECT * FROM sewatbl INNER JOIN kendaraantbl on sewatbl.no_polisi = kendaraantbl.no_polisi where sewatbl.no_sewa ='$kode10'");
$found10=mysql_num_rows($result10);
 
if($found10>0){
	
	$data10=mysql_fetch_array($result10);
	
	echo $data10['nama_kendaraan'];
			     
 }else{
    echo "";
 }  

?>