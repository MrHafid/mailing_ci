<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
	<meta charset="utf-8">
	<title>DEDIGO | PLATFORM DESA DIGITAL</title>
	<link rel="icon" href="assets/images/logo_dedigo.png">
</head>

<body>
	<div align="center">
		<img src="assets/images/logo-pancasila.png" width="90" height="90">
		<h2><b>KEPALA DESA <?php echo cetak(strtoupper($desa[0]->nama_desa)); ?></b></h2>
		<h3 style="margin-top: -21px;"><b>KECAMATAN <?php echo cetak(strtoupper($desa[0]->kecamatan)); ?> KABUPATEN <?php echo cetak(strtoupper($desa[0]->kabupaten)); ?></b></h3><br>
		<h4 style="margin-top: -18px;"><b><u>SURAT KETERANGAN DOMISILI USAHA</u></b></h4>
		<h4 style="margin-top: -18px;"><b>Nomor: </b><b><?php echo $dom_usaha[0]->no_surat; ?></b></h4>
	</div>
	<p>Yang bertanda tangan dibawah ini Kepala Desa <?php echo cetak(ucwords($desa[0]->nama_desa)); ?> Kecamatan <?php echo cetak(ucwords($desa[0]->kecamatan)); ?> Kabupaten <?php echo cetak(ucwords($desa[0]->kabupaten)); ?>, menerangkan dengan sebenarnya bahwa:</p>
	<table style="margin-left: 30px;">
		<tr>
			<td>Nama Usaha</td>
			<td>:</td>
			<td><b><?php echo cetak(strtoupper($dom_usaha[0]->nama_usaha)); ?></b></td>
		</tr>
		<tr>
			<td>Jenis Usaha</td>
			<td>:</td>
			<td><?php echo cetak($dom_usaha[0]->jenis_usaha); ?></td>
		</tr>
		<tr>
			<td>Alamat Perusahaan</td>
			<td>:</td>
			<td>
				<?php echo cetak(ucwords($dom_usaha[0]->alamat_usaha)); ?>
			</td>
		</tr>
		<tr>
			<td>Nama Pemilik</td>
			<td>:</td>
			<td><?php echo cetak(ucwords($dom_usaha[0]->nama_pemilik)); ?></td>
		</tr>
		<tr>
			<td style="vertical-align: top;">Alamat Pemilik</td>
			<td style="vertical-align: top;">:</td>
			<td>
				<?php echo cetak(ucwords($dom_usaha[0]->alamat_pemilik)); ?> RT <?php echo cetak($dom_usaha[0]->RT); ?>/RW <?php echo cetak($dom_usaha[0]->RW); ?> Desa <?php echo cetak(ucwords($dom_usaha[0]->desa)); ?> Kec. <?php echo cetak(ucwords($dom_usaha[0]->kecamatan)); ?> Kab. <?php echo cetak(ucwords($dom_usaha[0]->kabupaten)); ?>
			</td>
		</tr>
	</table>
	<p>
		Perusahaan tersebut diatas benar berdomisili di lingkungan pemerintah desa kami berdasarkan keterangan dari RT/RW setempat, dan diterangkan pula bahwa perusahaan tersebut tidak menimbulkan dampak gangguan terhadap lingkungan.
	</p>

	<p>
		Demikian surat keterangan ini kami buat dengan dasar yang sebenarnya dan dapat dipergunakan sebagaimana mestinya.
	</p>

	<table style="width: 100%;">
		<tr>
			<td>
				<?php if($desa[0]->legalitas == 'TTD Kades'){ ?>
				<img style="margin-left: 50px;" width="80" height="80" src="assets/qrcode/<?php echo cetak($dom_usaha[0]->qrcode); ?>">
				<?php } ?>
			</td>
			<td width="280">
				<?php if($desa[0]->legalitas == 'Qrcode'){ ?>
				<p align="center">
					<?php echo cetak(ucwords($desa[0]->nama_desa)); ?>, <?php echo cetak(date_indo($dom_usaha[0]->tanggal)); ?> <br>
			 		<b>Kepala Desa <?php echo cetak(ucwords($desa[0]->nama_desa)); ?></b>
				</p>
				<center><img src="assets/qrcode/<?php echo cetak($dom_usaha[0]->qrcode); ?>" width="80" height="80"></center>
				<p align="center">
					<b><?php echo cetak(strtoupper($desa[0]->nama_kades)); ?></b>
				</p>
				<?php }else{ ?>
				<p align="center">
					<?php echo cetak(ucwords($desa[0]->nama_desa)); ?>, <?php echo cetak(date_indo($dom_usaha[0]->tanggal)); ?> <br>
			 		<b>Kepala Desa <?php echo cetak(ucwords($desa[0]->nama_desa)); ?></b>
				</p><br><br><br><br><br>
				<p align="center">
					<b><?php echo cetak(strtoupper($desa[0]->nama_kades)); ?></b>
				</p>
				<?php } ?>
			</td>
		</tr>
	</table>

	<br><br>
	<center>
		<small>
			<?php echo cetak(ucwords($desa[0]->alamat)); ?>, Desa <?php echo cetak(ucwords($desa[0]->nama_desa)); ?>, Kec. <?php echo cetak(ucwords($desa[0]->kecamatan)); ?>, Kab. <?php echo cetak(ucwords($desa[0]->kabupaten)); ?><br>
			<?php echo cetak($account[0]->email); ?> / 
			<?php 
	        	$telp1 = substr($desa[0]->no_telp,0,4);
	        	$telp2 = substr($desa[0]->no_telp, 4);
	        	$no_telp = '('.$telp1.') '.$telp2;
	        ?>
			<?php echo $no_telp; ?> <br>
			Kode Pos <?php echo cetak($desa[0]->kode_pos); ?>
		</small>
	</center>
	<br>
	<center><small>Dicetak tanggal : <?php echo date_indo(date('Y-m-d')); ?></small>
</body>
</html>
