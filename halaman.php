<?php error_reporting(E_ERROR | E_WARNING | E_PARSE); ?>
<?php
	include "koneksi.php";
	
	switch($_GET['go']){
		case 'Kendaraan': 
			include("kendaraan.php"); 
		break;		
		
		case 'Kendaraan_Form_Simpan': 
			include("kendaraan_form_simpan.php"); 
		break;	
		
		case 'Kendaraan_Form_Ubah': 
			include("kendaraan_form_ubah.php"); 
		break;		
		
		case 'Kendaraan_Hapus': 
			include("kendaraan_hapus.php"); 
		break;		
		
		case 'Pelanggan': 
			include("pelanggan.php"); 
		break;		
		
		case 'Pelanggan_Form_Simpan': 
			include("pelanggan_form_simpan.php"); 
		break;	
		
		case 'Pelanggan_Form_Ubah': 
			include("pelanggan_form_ubah.php"); 
		break;		
		
		case 'Pelanggan_Hapus': 
			include("pelanggan_hapus.php"); 
		break;	
		
		case 'Sewa': 
			include("sewa.php"); 
		break;		
		
		case 'Sewa_Form_Simpan': 
			include("sewa_form_simpan.php"); 
		break;	
		
		case 'Sewa_Form_Ubah': 
			include("sewa_form_ubah.php"); 
		break;		
		
		case 'Sewa_Hapus': 
			include("sewa_hapus.php"); 
		break;		
		
		case 'Kembali': 
			include("kembali.php"); 
		break;		
		
		case 'Kembali_Form_Simpan': 
			include("kembali_form_simpan.php"); 
		break;	
		
		case 'Kembali_Form_Ubah': 
			include("kembali_form_ubah.php"); 
		break;		
		
		case 'Kembali_Hapus': 
			include("kembali_hapus.php"); 
		break;	
		
		case 'Laporan': 
			include("laporan_form.php"); 
		break;		
		
		case 'Laporan_Transaksi': 
			include("laporan_transaksi.php"); 
		break;																	
		
		case '':
			include("menu.php");		
		break;			
						
	};
?>	