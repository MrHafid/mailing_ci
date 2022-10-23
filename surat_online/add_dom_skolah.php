<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Surat Domisili Sekolah
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?= base_url('media/beranda'); ?>"><i class="fa fa-dashboard"></i> Beranda</a></li>
        <li class="active">Surat Domisili Sekolah</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Buat Surat Keterangan Domisili Sekolah</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <div class="form-horizontal">
        <?= form_open('action/input_dom_skolah'); ?>
          <div class="box-body">
            <div class="form-group">
              <label for="" class="col-sm-2 control-label">Nama Lembaga</label>

              <div class="col-sm-9">
                <input type="text" name="nama_lembaga" class="form-control" placeholder="Nama Lembaga">
                <small style="color: red;"><?= form_error('nama_lembaga','*'); ?></small>
              </div>
            </div>
            <div class="form-group">
              <label for="" class="col-sm-2 control-label">Jenis Lembaga</label>

              <div class="col-sm-9">
                <input type="text" name="jenis_lembaga" class="form-control" placeholder="Jenis Lembaga">
                <small style="color: red;"><?= form_error('jenis_lembaga','*'); ?></small>
              </div>
            </div>
            <div class="form-group">
              <label for="" class="col-sm-2 control-label">Alamat Sekolah</label>

              <div class="col-sm-9">
                <textarea name="alamat_skolah" class="form-control" id="alamat_skolah" placeholder="Alamat Sekolah"></textarea>
                <small style="color: red;"><?= form_error('alamat_skolah','*'); ?></small>
              </div>
            </div>
            <div class="form-group">
              <label for="" class="col-sm-2 control-label">Tahun Berdiri</label>

              <div class="col-sm-9">
                <input type="text" name="tahun_berdiri" class="form-control" id="datepicker" placeholder="Tahun Berdiri">
                <small style="color: red;"><?= form_error('tahun_berdiri','*'); ?></small>
              </div>
            </div>
            <div class="form-group">
              <label for="" class="col-sm-2 control-label">Cari NIK</label>

              <div class="col-sm-9">
                <input type="text" name="cari_nik_dom_skolah" class="form-control" id="cari_nik_dom_skolah" placeholder="Cari NIK">
              </div>
            </div>
            <div class="form-group">
              <label for="" class="col-sm-2 control-label">Nama Ket. Lembaga</label>

              <div class="col-sm-9">
                <input type="text" name="nama_ket_lembaga" class="form-control" placeholder="Nama Ket. Lembaga" readonly="readonly">
                <small style="color: red;"><?= form_error('nama_ket_lembaga','*'); ?></small>
              </div>
            </div>
            
            <input type="hidden" name="id_user" value="<?php echo $this->session->userdata('id_user'); ?>">
          </div>
          <!-- /.box-body -->
          <div class="box-footer">
            <div class="pull-left">
              <a href="<?= base_url('media/dom_skolah'); ?>" class="btn btn-danger btn-sm"><i class="fa fa-arrow-circle-left"></i> Kembali</a>
            </div>
            <div class="pull-right">
              <button type="reset" class="btn btn-default btn-sm"><i class="fa fa-refresh"></i> Reset</button>
              <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-check-circle"></i> Add</button>
            </div>
          </div>
          <!-- /.box-footer -->
        <?= form_close(); ?>
        </div>
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

