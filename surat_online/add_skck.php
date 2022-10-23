<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Surat SKCK
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?= base_url('media/beranda'); ?>"><i class="fa fa-dashboard"></i> Beranda</a></li>
        <li class="active">Surat SKCK</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Buat Surat Pengantar SKCK</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <div class="form-horizontal">
        <?= form_open('action/input_skck'); ?>
          <div class="box-body">
            <div class="form-group">
              <label for="" class="col-sm-2 control-label">Cari NIK</label>

              <div class="col-sm-9">
                <input type="text" name="cari_nik_skck" class="form-control" id="cari_nik_skck" placeholder="Cari NIK">
              </div>
            </div>
            <div class="form-group">
              <label for="" class="col-sm-2 control-label">Nama Lengkap</label>

              <div class="col-sm-9">
                <input type="text" name="nama_lengkap" class="form-control" placeholder="Nama Lengkap" readonly="readonly">
                <small style="color: red;"><?= form_error('nama_lengkap','*'); ?></small>
              </div>
            </div>
            <div class="form-group">
              <label for="" class="col-sm-2 control-label">NIK</label>

              <div class="col-sm-9">
                <input type="text" name="nik" class="form-control" placeholder="NIK" readonly="readonly">
                <small style="color: red;"><?= form_error('nik','*'); ?></small>
              </div>
            </div>
            <div class="form-group">
              <label for="" class="col-sm-2 control-label">Jenis Kelamin</label>

              <div class="col-sm-9">
                <input type="text" name="jenis_kelamin" class="form-control" placeholder="Jenis Kelamin" readonly="readonly">
                <small style="color: red;"><?= form_error('jenis_kelamin','*'); ?></small>
              </div>
            </div>
            <div class="form-group">
              <label for="" class="col-sm-2 control-label">Tempat Lahir</label>

              <div class="col-sm-9">
                <input type="text" name="tempat_lahir" class="form-control" placeholder="Tempat Lahir" readonly="readonly">
                <small style="color: red;"><?= form_error('tempat_lahir','*'); ?></small>
              </div>
            </div>
            <div class="form-group">
              <label for="" class="col-sm-2 control-label">Tanggal Lahir</label>

              <div class="col-sm-9">
                <input type="text" name="tanggal_lahir" class="form-control" placeholder="Tanggal Lahir" readonly="readonly">
                <small style="color: red;"><?= form_error('tanggal_lahir','*'); ?></small>
              </div>
            </div>
            <div class="form-group">
              <label for="" class="col-sm-2 control-label">Agama</label>

              <div class="col-sm-9">
                <input type="text" name="agama" class="form-control" placeholder="Agama" readonly="readonly">
                <small style="color: red;"><?= form_error('agama','*'); ?></small>
              </div>
            </div>
            <div class="form-group">
              <label for="" class="col-sm-2 control-label">Pekerjaan</label>

              <div class="col-sm-9">
                <input type="text" name="pekerjaan" class="form-control" placeholder="Pekerjaan" readonly="readonly">
                <small style="color: red;"><?= form_error('pekerjaan','*'); ?></small>
              </div>
            </div>
            <div class="form-group">
              <label for="" class="col-sm-2 control-label">Status</label>

              <div class="col-sm-9">
                <input type="text" name="status" class="form-control" placeholder="Status" readonly="readonly"> 
                <small style="color: red;"><?= form_error('status','*'); ?></small>
              </div>
            </div>
            <div class="form-group">
              <label for="" class="col-sm-2 control-label">Warga Negara</label>

              <div class="col-sm-9">
                <input type="text" name="warga_negara" class="form-control" placeholder="Warga Negara" readonly="readonly"> 
                <small style="color: red;"><?= form_error('warga_negara','*'); ?></small>
              </div>
            </div>
            <div class="form-group">
              <label for="" class="col-sm-2 control-label">Alamat</label>

              <div class="col-sm-9">
                <textarea name="alamat" class="form-control" id="alamat" placeholder="Alamat" readonly="readonly"></textarea>
                <small style="color: red;"><?= form_error('alamat','*'); ?></small>
              </div>
            </div>
            <div class="form-group">
              <label for="" class="col-sm-2 control-label">RT/RW</label>

              <div class="col-sm-9">
                <div class="row">
                  <div class="col-sm-6">
                    <input type="text" name="RT" class="form-control" placeholder="RT" readonly="readonly">
                    <small style="color: red;"><?= form_error('RT','*'); ?></small>
                  </div>
                  <div class="col-sm-6">
                    <input type="text" name="RW" class="form-control" placeholder="RW" readonly="readonly">
                    <small style="color: red;"><?= form_error('RW','*'); ?></small>
                  </div>
                </div>
                
              </div>
            </div>
            <div class="form-group">
              <label for="" class="col-sm-2 control-label">Desa</label>

              <div class="col-sm-9">
                <input type="text" name="desa" class="form-control" placeholder="Desa" readonly="readonly">
                <small style="color: red;"><?= form_error('desa','*'); ?></small>
              </div>
            </div>
            <div class="form-group">
              <label for="" class="col-sm-2 control-label">Kecamatan</label>

              <div class="col-sm-9">
                <input type="text" name="kecamatan" class="form-control" placeholder="Kecamatan" readonly="readonly">
                <small style="color: red;"><?= form_error('kecamatan','*'); ?></small>
              </div>
            </div>
            <div class="form-group">
              <label for="" class="col-sm-2 control-label">Kabupaten</label>

              <div class="col-sm-9">
                <input type="text" name="kabupaten" class="form-control" placeholder="Kabupaten" readonly="readonly">
                <small style="color: red;"><?= form_error('kabupaten','*'); ?></small>
              </div>
            </div>
            <div class="form-group">
              <label for="" class="col-sm-2 control-label">Provinsi</label>

              <div class="col-sm-9">
                <input type="text" name="provinsi" class="form-control" placeholder="Provinsi" readonly="readonly">
                <small style="color: red;"><?= form_error('provinsi','*'); ?></small>
              </div>
            </div>
            <div class="form-group">
              <label for="" class="col-sm-2 control-label">Keperluan</label>

              <div class="col-sm-9">
                <input type="text" name="keperluan" class="form-control" placeholder="Keperluan">
                <small style="color: red;"><?= form_error('keperluan','*'); ?></small>
              </div>
            </div>
            <input type="hidden" name="id_user" value="<?php echo $this->session->userdata('id_user'); ?>">
          </div>
          <!-- /.box-body -->
          <div class="box-footer">
            <div class="pull-left">
              <a href="<?= base_url('media/skck'); ?>" class="btn btn-danger btn-sm"><i class="fa fa-arrow-circle-left"></i> Kembali</a>
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

