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
	<div style="width: 700px; margin-right: auto; margin-left: auto;">
		<center><p class="watermark">PEMDES <?php echo cetak(strtoupper($desa[0]->nama_desa)); ?></p></center>
		<div align="center">
			<img src="<?= base_url(); ?>assets/images/logo-pancasila.png" width="100" height="100">
			<h2>KEPALA DESA <?php echo cetak(strtoupper($desa[0]->nama_desa)); ?></h2>
			<h3 style="margin-top: -21px;">KECAMATAN <?php echo cetak(strtoupper($desa[0]->kecamatan)); ?> KABUPATEN <?php echo cetak(strtoupper($desa[0]->kabupaten)); ?></h3><br>
			<h4 style="margin-top: -18px;"><u>SURAT KETERANGAN CACATATAN KEPOLISIAN</u></h4>
			<h4 style="margin-top: -18px;">Nomor: <?php echo cetak($skck[0]->no_surat); ?></h4>
		</div>
		<p>Yang bertanda tangan dibawah ini Kepala Desa <?php echo cetak(ucwords($desa[0]->nama_desa)); ?> Kecamatan <?php echo cetak(ucwords($desa[0]->kecamatan)); ?> Kabupaten <?php echo cetak(ucwords($desa[0]->kabupaten)); ?>, menerangkan dengan sebenarnya bahwa:</p>
		<table style="margin-left: 35px;">
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><b><?php echo cetak(strtoupper($skck[0]->nama_lengkap)); ?></b></td>
			</tr>
			<tr>
				<td>No NIK</td>
				<td>:</td>
				<td><?php echo cetak($skck[0]->nik); ?></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>:</td>
				<td><?php echo cetak($skck[0]->jenis_kelamin); ?></td>
			</tr>
			<tr>
				<td>Tempat/Tgl Lahir</td>
				<td>:</td>
				<td><?php echo cetak(ucwords($skck[0]->tempat_lahir)); ?>, <?php echo cetak(date_indo($skck[0]->tanggal_lahir)); ?></td>
			</tr>
			<tr>
				<td>Agama</td>
				<td>:</td>
				<td><?php echo cetak($skck[0]->agama); ?></td>
			</tr>
			<tr>
				<td>Pekerjaan</td>
				<td>:</td>
				<td><?php echo cetak($skck[0]->pekerjaan); ?></td>
			</tr>
			<tr>
				<td>Status</td>
				<td>:</td>
				<td><?php echo cetak($skck[0]->status_warga); ?></td>
			</tr>
			<tr>
				<td>Warga Negara</td>
				<td>:</td>
				<td><?php echo cetak($skck[0]->warga_negara); ?></td>
			</tr>
			<tr>
				<td style="vertical-align: top;">Alamat</td>
				<td style="vertical-align: top;">:</td>
				<td>
					<?php echo cetak(ucwords($skck[0]->alamat)); ?> RT <?php echo cetak($skck[0]->RT); ?>/RW <?php echo cetak($skck[0]->RW); ?> Desa <?php echo cetak(ucwords($skck[0]->desa)); ?> Kec. <?php echo cetak(ucwords($skck[0]->kecamatan)); ?> Kab. <?php echo cetak(ucwords($skck[0]->kabupaten)); ?>
				</td>
			</tr>
		</table>
		<p>
			Adalah benar salah seorang warga desa kami yang memohon surat keterangan pengantar catatan kepolisian untuk kepentingan <b><?php echo cetak(ucwords($skck[0]->keperluan))?></b> surat keterangan tersebut kami berikan kepadanya berdasarkan data dan pertimbangan kami bahwa:
		</p>
		<p style="margin-left: 35px;">
			1. Yang bersangkutan tidak tercatat terlibat dalam perkara pidana maupun pelanggaran hukum lainnya. <br>
			2. Yang bersangkutan tidak terdaftar sebagai pelaku/anggota organisasi dan atau gerakan terlarang.
		</p>
		<p>
			Demikian surat keterangan ini kami buat dengan dasar yang sebenarnya dan dapat dipergunakan sebagaimana mestinya.
		</p>

		<table style="width: 100%;">
			<tr>
				<td>
					<?php if($desa[0]->legalitas == 'TTD Kades'){ ?>
					<img style="margin-left: 50px;" width="80" height="80" src="<?= base_url(); ?>assets/qrcode/<?php echo cetak($skck[0]->qrcode); ?>">
					<?php } ?>
				</td>
				<td width="280">
					<?php if($desa[0]->legalitas == 'Qrcode'){ ?>
					<p align="center">
						<?php echo cetak(ucwords($desa[0]->nama_desa)); ?>, <?php echo cetak(date_indo($skck[0]->tanggal)); ?> <br>
				 		<b>Kepala Desa <?php echo cetak(ucwords($desa[0]->nama_desa)); ?></b>
					</p>
					<center><img src="<?= base_url(); ?>assets/qrcode/<?php echo cetak($skck[0]->qrcode); ?>" width="80" height="80"></center>
					<p align="center">
						<b><?php echo cetak(strtoupper($desa[0]->nama_kades)); ?></b>
					</p>
					<?php }else{ ?>
					<p align="center">
						<?php echo cetak(ucwords($desa[0]->nama_desa)); ?>, <?php echo cetak(date_indo($skck[0]->tanggal)); ?> <br>
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
	</div>
</body>
</html>
