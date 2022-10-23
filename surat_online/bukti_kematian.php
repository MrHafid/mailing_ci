<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
	<meta charset="utf-8">
	<title>DEDIGO | PLATFORM DESA DIGITAL</title>
	<link rel="icon" href="<?= base_url(); ?>assets/images/logo_dedigo.png">
	<style type="text/css">
		.watermark{
			position:absolute;
			top: 250px;
			left: 370px;
			opacity:0.4;
			color:red;
			font-size:60px;
			transform:rotate(330deg);
		    -webkit-transform:rotate(330deg);

		}
	</style>
</head>

<body>
	<table align="center" style="width: 50%;">
		<tr>
			<td>
				<center><p class="watermark">PEMDES <?php echo cetak(strtoupper($desa[0]->nama_desa)); ?></p></center>
				<div align="center">
					<img src="<?= base_url(); ?>assets/images/logo-pancasila.png" width="75" height="75">
					<h2><b>KEPALA DESA <?php echo cetak(strtoupper($desa[0]->nama_desa)); ?></b></h2>
					<h3 style="margin-top: -21px;"><b>KECAMATAN <?php echo cetak(strtoupper($desa[0]->kecamatan)); ?> KABUPATEN <?php echo cetak(strtoupper($desa[0]->kabupaten)); ?></b></h3><br>
					<h4 style="margin-top: -18px;"><b><u>SURAT KETERANGAN KEMATIAN</u></b></h4>
					<h4 style="margin-top: -18px;"><b>Nomor: <?php echo cetak($kematian[0]->no_surat); ?></b></h4>
				</div>
				<p style="margin-left: 10px;">Yang bertanda tangan dibawah ini Kepala Desa <?php echo cetak(ucwords($desa[0]->nama_desa)); ?> Kecamatan <?php echo cetak(ucwords($desa[0]->kecamatan)); ?> Kabupaten <?php echo cetak(ucwords($desa[0]->kabupaten)); ?>, menerangkan bahwa:</p>
				<table style="margin-left: 10px;">
					<tr>
						<td>Nama</td>
						<td>:</td>
						<td><b><?php echo cetak(strtoupper($kematian[0]->nama_lengkap)); ?></b></td>
					</tr>
					<tr>
						<td>Umur</td>
						<td>:</td>
						<td><?php echo cetak($kematian[0]->umur); ?> Tahun</td>
					</tr>
					<tr>
						<td>Pekerjaan</td>
						<td>:</td>
						<td><?php echo cetak(ucwords($kematian[0]->pekerjaan)); ?></td>
					</tr>
					<tr>
						<td style="vertical-align: top;">Alamat</td>
						<td style="vertical-align: top;">:</td>
						<td>
							<?php echo cetak(ucwords($kematian[0]->alamat)); ?> RT <?php echo cetak($kematian[0]->RT); ?>/RW <?php echo cetak($kematian[0]->RW); ?> Desa <?php echo cetak(ucwords($kematian[0]->desa)); ?> Kec, <?php echo cetak(ucwords($kematian[0]->kecamatan)); ?> Kab. <?php echo cetak(ucwords($kematian[0]->kabupaten)); ?>
						</td>
					</tr>
				</table>
				<p style="margin-left: 10px;">Telah meninggal dunia pada:</p>
				<table style="margin-left: 10px;">
					<tr>
						<td>Hari</td>
						<td>:</td>
						<td><?php echo cetak(ucwords($kematian[0]->hari_kematian)); ?></td>
					</tr>
					<tr>
						<td>Tanggal</td>
						<td>:</td>
						<td><?php echo cetak(date_indo($kematian[0]->tanggal_kematian)); ?></td>
					</tr>
					<tr>
						<td>Di</td>
						<td>:</td>
						<td><?php echo cetak(ucwords($kematian[0]->tempat_kematian)); ?></td>
					</tr>
				</table>
				<p style="margin-left: 10px;">Disebabkan karena: <b>========= <?php echo cetak(ucwords($kematian[0]->sebab_kematian)); ?> =========</b></p>
				<p style="margin-left: 10px;">Surat Keterangan ini dibuat atas dasar yang sebenarnya.</p>
				
				<table style="width: 100%;">
					<tr>
						<td>
							<?php if($desa[0]->legalitas == 'TTD Kades'){ ?>
							<img style="margin-left: 50px;" width="80" height="80" src="<?= base_url(); ?>assets/qrcode/<?php echo cetak($kematian[0]->qrcode); ?>">
							<?php } ?>
						</td>
						<td width="245">
							<?php if($desa[0]->legalitas == 'Qrcode'){ ?>
							<p align="center">
								<?php echo cetak(ucwords($desa[0]->nama_desa)); ?>, <?php echo cetak(date_indo($kematian[0]->tanggal)); ?> <br>
						 		<b>Kepala Desa <?php echo cetak(ucwords($desa[0]->nama_desa)); ?></b>
							</p>
							<center><img src="<?= base_url(); ?>assets/qrcode/<?php echo cetak($kematian[0]->qrcode); ?>" width="80" height="80"></center>
							<p align="center">
								<b><?php echo cetak(strtoupper($desa[0]->nama_kades)); ?></b>
							</p>
							<?php }else{ ?>
							<p align="center">
								<?php echo cetak(ucwords($desa[0]->nama_desa)); ?>, <?php echo cetak(date_indo($kematian[0]->tanggal)); ?> <br>
						 		<b>Kepala Desa <?php echo cetak(ucwords($desa[0]->nama_desa)); ?></b>
							</p><br><br><br><br>
							<p align="center">
								<b><?php echo cetak(strtoupper($desa[0]->nama_kades)); ?></b>
							</p>
							<?php } ?>
						</td>
					</tr>
				</table>
			</td>
		</tr>
	</table>
</body>
</html>
