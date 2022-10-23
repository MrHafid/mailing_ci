<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Surat Kematian
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?= base_url('media/beranda'); ?>"><i class="fa fa-dashboard"></i> Beranda</a></li>
        <li class="active">Surat Kematian</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Edit Surat Keterangan Kematian</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <div class="form-horizontal">
        <?php foreach($kematian->result() as $item){ ?>
        <?= form_open_multipart('action/update_kematian'); ?>
          <div class="box-body">
            <input type="hidden" name="id" value="<?php echo $item->id; ?>">
            <div class="form-group">
              <label for="" class="col-sm-2 control-label">Nama Lengkap</label>

              <div class="col-sm-9">
                <input type="text" name="nama_lengkap" class="form-control" placeholder="Nama Lengkap" readonly="readonly" value="<?php echo cetak(ucwords($item->nama_lengkap)); ?>">
              </div>
            </div>
            <div class="form-group">
              <label for="" class="col-sm-2 control-label">Umur</label>

              <div class="col-sm-9">
                <input type="text" name="umur" class="form-control" id="umur" placeholder="Umur" value="<?php echo cetak($item->umur); ?>">
                <small style="color: red;"><?= form_error('umur','*'); ?></small>
              </div>
            </div>
            <div class="form-group">
              <label for="" class="col-sm-2 control-label">Pekerjaan</label>

              <div class="col-sm-9">
                <input type="text" name="pekerjaan" class="form-control" placeholder="Pekerjaan" readonly="readonly" value="<?php echo cetak(ucwords($item->pekerjaan)); ?>">
              </div>
            </div>
            <div class="form-group">
              <label for="" class="col-sm-2 control-label">Alamat</label>

              <div class="col-sm-9">
                <textarea name="alamat" class="form-control" id="alamat" placeholder="Alamat" readonly="readonly"><?php echo cetak(ucwords($item->alamat)); ?></textarea>
              </div>
            </div>
            <div class="form-group">
              <label for="" class="col-sm-2 control-label">RT/RW</label>

              <div class="col-sm-9">
                <div class="row">
                  <div class="col-sm-6">
                    <input type="text" name="RT" class="form-control" placeholder="RT" readonly="readonly" value="<?php echo cetak($item->RT); ?>">
                  </div>
                  <div class="col-sm-6">
                    <input type="text" name="RW" class="form-control" placeholder="RW" readonly="readonly" value="<?php echo cetak($item->RW); ?>">
                  </div>
                </div>
                
              </div>
            </div>
            <div class="form-group">
              <label for="" class="col-sm-2 control-label">Desa</label>

              <div class="col-sm-9">
                <input type="text" name="desa" class="form-control" placeholder="Desa" readonly="readonly" value="<?php echo cetak(ucwords($item->desa)); ?>">
              </div>
            </div>
            <div class="form-group">
              <label for="" class="col-sm-2 control-label">Kecamatan</label>

              <div class="col-sm-9">
                <input type="text" name="kecamatan" class="form-control" placeholder="Kecamatan" readonly="readonly" value="<?php echo cetak(ucwords($item->kecamatan)); ?>">
              </div>
            </div>
            <div class="form-group">
              <label for="" class="col-sm-2 control-label">Kabupaten</label>

              <div class="col-sm-9">
                <input type="text" name="kabupaten" class="form-control" placeholder="Kabupaten" readonly="readonly" value="<?php echo cetak(ucwords($item->kabupaten)); ?>">
              </div>
            </div>
            <div class="form-group">
              <label for="" class="col-sm-2 control-label">Provinsi</label>

              <div class="col-sm-9">
                <input type="text" name="provinsi" class="form-control" placeholder="Provinsi" readonly="readonly" value="<?php echo cetak(ucwords($item->provinsi)); ?>">
              </div>
            </div>
            <div class="form-group">
              <label for="" class="col-sm-2 control-label">Hari Kematian</label>

              <div class="col-sm-9">
                <input type="text" name="hari_kematian" class="form-control" placeholder="Hari Kematian" value="<?php echo cetak(ucwords($item->hari_kematian)); ?>">
                <small style="color: red;"><?= form_error('hari_kematian','*'); ?></small>
              </div>
            </div>
            <div class="form-group">
              <label for="" class="col-sm-2 control-label">Tgl Kematian</label>

              <div class="col-sm-9">
                <input type="text" name="tanggal_kematian" id="datepicker" class="form-control" placeholder="Tanggal Kematian" value="<?php echo cetak($item->tanggal_kematian); ?>">
                <small style="color: red;"><?= form_error('tanggal_kematian','*'); ?></small>
              </div>
            </div>
            <div class="form-group">
              <label for="" class="col-sm-2 control-label">Tempat Kematian</label>

              <div class="col-sm-9">
                <input type="text" name="tempat_kematian" class="form-control" placeholder="Tempat Kematian" value="<?php echo cetak(ucwords($item->tempat_kematian)); ?>">
                <small style="color: red;"><?= form_error('tempat_kematian','*'); ?></small>
              </div>
            </div>
            <div class="form-group">
              <label for="" class="col-sm-2 control-label">Sebab Kematian</label>

              <div class="col-sm-9">
                <input type="text" name="sebab_kematian" class="form-control" placeholder="Sebab Kematian" value="<?php echo cetak(ucwords($item->sebab_kematian)); ?>">
                <small style="color: red;"><?= form_error('sebab_kematian','*'); ?></small>
              </div>
            </div>
          </div>
          <!-- /.box-body -->
          <div class="box-footer">
            <div class="pull-left">
              <a href="<?= base_url('media/kematian'); ?>" class="btn btn-danger btn-sm"><i class="fa fa-arrow-circle-left"></i> Kembali</a>
            </div>
            <div class="pull-right">
              <button type="reset" class="btn btn-default btn-sm"><i class="fa fa-refresh"></i> Reset</button>
              <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-check-circle"></i> Update</button>
            </div>
          </div>
          <!-- /.box-footer -->
        <?= form_close(); ?>
        <?php } ?>
        </div>
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

