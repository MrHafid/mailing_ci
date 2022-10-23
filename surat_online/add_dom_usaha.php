<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Surat Domisili Usaha
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?= base_url('media/beranda'); ?>"><i class="fa fa-dashboard"></i> Beranda</a></li>
        <li class="active">Surat Domisili Usaha</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Buat Surat Keterangan Domisili Usaha</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <div class="form-horizontal">
        <?= form_open('action/input_dom_usaha'); ?>
          <div class="box-body">
            <div class="form-group">
              <label for="" class="col-sm-2 control-label">Nama Usaha</label>

              <div class="col-sm-9">
                <input type="text" name="nama_usaha" class="form-control" placeholder="Nama Usaha">
                <small style="color: red;"><?= form_error('nama_usaha','*'); ?></small>
              </div>
            </div>
            <div class="form-group">
              <label for="" class="col-sm-2 control-label">Jenis Usaha</label>

              <div class="col-sm-9">
                <input type="text" name="jenis_usaha" class="form-control" placeholder="Jenis Usaha">
                <small style="color: red;"><?= form_error('jenis_usaha','*'); ?></small>
              </div>
            </div>
            <div class="form-group">
              <label for="" class="col-sm-2 control-label">Alamat Usaha</label>

              <div class="col-sm-9">
                <textarea name="alamat_usaha" class="form-control" id="alamat_usaha" placeholder="Alamat Usaha"></textarea>
                <small style="color: red;"><?= form_error('alamat_usaha','*'); ?></small>
              </div>
            </div>
            <div class="form-group">
              <label for="" class="col-sm-2 control-label">Cari NIK</label>

              <div class="col-sm-9">
                <input type="text" name="cari_nik_dom_usaha" class="form-control" id="cari_nik_dom_usaha" placeholder="Cari NIK">
              </div>
            </div>
            <div class="form-group">
              <label for="" class="col-sm-2 control-label">Nama Pemilik</label>

              <div class="col-sm-9">
                <input type="text" name="nama_pemilik" class="form-control" placeholder="Nama Pemilik" readonly="readonly">
                <small style="color: red;"><?= form_error('nama_pemilik','*'); ?></small>
              </div>
            </div>
            <div class="form-group">
              <label for="" class="col-sm-2 control-label">Alamat Pemilik</label>

              <div class="col-sm-9">
                <textarea name="alamat_pemilik" class="form-control" id="alamat_pemilik" placeholder="Alamat Pemilik" readonly="readonly"></textarea>
                <small style="color: red;"><?= form_error('alamat_Pemilik','*'); ?></small>
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
            
            <input type="hidden" name="id_user" value="<?php echo $this->session->userdata('id_user'); ?>">
          </div>
          <!-- /.box-body -->
          <div class="box-footer">
            <div class="pull-left">
              <a href="<?= base_url('media/dom_usaha'); ?>" class="btn btn-danger btn-sm"><i class="fa fa-arrow-circle-left"></i> Kembali</a>
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

