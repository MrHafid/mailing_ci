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

<body style="background-color: yellow;">
	<table style="width: 100%;">
		<tr>
			<td>
				<h4 align="center"><b><u>SURAT KETERANGAN KEMATIAN</u></b></h4>
				<p align="center" style="margin-top: -18px;"><b>Nomor: </b><b><?php echo $kematian[0]->no_surat; ?></b></p>
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
				<br>
				<table style="width: 100%;">
					<tr>
						<td>
							<?php if($desa[0]->legalitas == 'TTD Kades'){ ?>
							<img style="margin-left: 50px;" width="80" height="80" src="assets/qrcode/<?php echo cetak($kematian[0]->qrcode); ?>">
							<?php } ?>
						</td>
						<td width="245">
							<?php if($desa[0]->legalitas == 'Qrcode'){ ?>
							<p align="center">
								<?php echo cetak(ucwords($desa[0]->nama_desa)); ?>, <?php echo cetak(date_indo($kematian[0]->tanggal)); ?> <br>
						 		<b>Kepala Desa <?php echo cetak(ucwords($desa[0]->nama_desa)); ?></b>
							</p>
							<center><img src="assets/qrcode/<?php echo cetak($kematian[0]->qrcode); ?>" width="80" height="80"></center>
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
				<br><br>
				<center><small>Dicetak tanggal : <?php echo date_indo(date('Y-m-d')); ?></small></center>
			</td>
			<td>
				<h4 align="center"><b><u>SURAT KETERANGAN KEMATIAN</u></b></h4>
				<p align="center" style="margin-top: -18px;"><b style="margin-right: 70px;">Nomor: </b><b> - Pem</b></p>
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
				<br>
				<table style="width: 100%;">
					<tr>
						<td>
							<?php if($desa[0]->legalitas == 'TTD Kades'){ ?>
							<img style="margin-left: 50px;" width="80" height="80" src="assets/qrcode/<?php echo cetak($kematian[0]->qrcode); ?>">
							<?php } ?>
						</td>
						<td width="245">
							<?php if($desa[0]->legalitas == 'Qrcode'){ ?>
							<p align="center">
								<?php echo cetak(ucwords($desa[0]->nama_desa)); ?>, <?php echo cetak(date_indo($kematian[0]->tanggal)); ?> <br>
						 		<b>Kepala Desa <?php echo cetak(ucwords($desa[0]->nama_desa)); ?></b>
							</p>
							<center><img src="assets/qrcode/<?php echo cetak($kematian[0]->qrcode); ?>" width="80" height="80"></center>
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
				<br><br>
				<center><small>Dicetak tanggal : <?php echo date_indo(date('Y-m-d')); ?></small></center>
			</td>
		</tr>
	</table>
</body>
</html>
