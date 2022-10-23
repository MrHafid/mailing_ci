<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Surat Domisili Ormas
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?= base_url('media/beranda'); ?>"><i class="fa fa-dashboard"></i> Beranda</a></li>
        <li class="active">Surat Domisili Ormas</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Buat Surat Keterangan Domisili Ormas</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <div class="form-horizontal">
        <?php foreach($dom_ormas->result() as $item){ ?>
        <?= form_open('action/update_dom_ormas'); ?>
          <div class="box-body">
            <input type="hidden" name="id" value="<?php echo $item->id; ?>">
            <div class="form-group">
              <label for="" class="col-sm-2 control-label">Nama Ormas</label>

              <div class="col-sm-9">
                <input type="text" name="nama_ormas" class="form-control" placeholder="Nama Ormas" value="<?php echo cetak(ucwords($item->nama_ormas)); ?>">
                <small style="color: red;"><?= form_error('nama_ormas','*'); ?></small>
              </div>
            </div>
            <div class="form-group">
              <label for="" class="col-sm-2 control-label">Tahun Berdiri</label>

              <div class="col-sm-9">
                <input type="text" name="tahun_berdiri" class="form-control" id="datepicker" placeholder="Tahun Berdiri" value="<?php echo cetak($item->tahun_berdiri); ?>">
                <small style="color: red;"><?= form_error('tahun_berdiri','*'); ?></small>
              </div>
            </div>
            <div class="form-group">
              <label for="" class="col-sm-2 control-label">Alamat Ormas</label>

              <div class="col-sm-9">
                <textarea name="alamat_ormas" class="form-control" id="alamat_ormas" placeholder="Alamat Ormas"><?php echo cetak(ucwords($item->alamat_ormas)); ?></textarea>
                <small style="color: red;"><?= form_error('alamat_ormas','*'); ?></small>
              </div>
            </div>
            <div class="form-group">
              <label for="" class="col-sm-2 control-label">Nama Pimpinan</label>

              <div class="col-sm-9">
                <input type="text" name="nama_pimpinan" class="form-control" placeholder="Nama Pimpinan" value="<?php echo cetak(ucwords($item->nama_pimpinan)); ?>" readonly="readonly">
              </div>
            </div>
            <div class="form-group">
              <label for="" class="col-sm-2 control-label">Alamat Pimpinan</label>

              <div class="col-sm-9">
                <textarea name="alamat_pimpinan" class="form-control" id="alamat_pimpinan" placeholder="Alamat Pimpinan" readonly="readonly"><?php echo cetak($item->alamat_pimpinan); ?></textarea>
              </div>
            </div>
            <div class="form-group">
              <label for="" class="col-sm-2 control-label">RT/RW</label>

              <div class="col-sm-9">
                <div class="row">
                  <div class="col-sm-6">
                    <input type="text" name="RT" class="form-control" placeholder="RT" value="<?php echo cetak(ucwords($item->RT)); ?>" readonly="readonly">
                  </div>
                  <div class="col-sm-6">
                    <input type="text" name="RW" class="form-control" placeholder="RW" value="<?php echo cetak(ucwords($item->RW)); ?>" readonly="readonly">
                  </div>
                </div>
                
              </div>
            </div>
            <div class="form-group">
              <label for="" class="col-sm-2 control-label">Desa</label>

              <div class="col-sm-9">
                <input type="text" name="desa" class="form-control" placeholder="Desa" value="<?php echo cetak(ucwords($item->desa)); ?>" readonly="readonly">
              </div>
            </div>
            <div class="form-group">
              <label for="" class="col-sm-2 control-label">Kecamatan</label>

              <div class="col-sm-9">
                <input type="text" name="kecamatan" class="form-control" placeholder="Kecamatan" value="<?php echo cetak(ucwords($item->kecamatan)); ?>" readonly="readonly">
              </div>
            </div>
            <div class="form-group">
              <label for="" class="col-sm-2 control-label">Kabupaten</label>

              <div class="col-sm-9">
                <input type="text" name="kabupaten" class="form-control" placeholder="Kabupaten" value="<?php echo cetak(ucwords($item->kabupaten)); ?>" readonly="readonly">
              </div>
            </div>
            <div class="form-group">
              <label for="" class="col-sm-2 control-label">Provinsi</label>

              <div class="col-sm-9">
                <input type="text" name="provinsi" class="form-control" placeholder="Provinsi" value="<?php echo cetak(ucwords($item->provinsi)); ?>" readonly="readonly">
              </div>
            </div>
            
            <input type="hidden" name="id_user" value="<?php echo $this->session->userdata('id_user'); ?>">
          </div>
          <!-- /.box-body -->
          <div class="box-footer">
            <div class="pull-left">
              <a href="<?= base_url('media/dom_ormas'); ?>" class="btn btn-danger btn-sm"><i class="fa fa-arrow-circle-left"></i> Kembali</a>
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

