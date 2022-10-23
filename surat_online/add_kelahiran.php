<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Surat Kelahiran
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?= base_url('media/beranda'); ?>"><i class="fa fa-dashboard"></i> Beranda</a></li>
        <li class="active">Surat Kelahiran</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Buat Surat Keterangan Kelahiran</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <div class="form-horizontal">
        <?= form_open('action/input_kelahiran'); ?>
          <div class="box-body">
            <div class="form-group">
              <label for="" class="col-sm-2 control-label">Hari Lahir</label>

              <div class="col-sm-9">
                <input type="text" name="hari_lahir" class="form-control" placeholder="Hari Lahir">
                <small style="color: red;"><?= form_error('hari_lahir','*'); ?></small>
              </div>
            </div>
            <div class="form-group">
              <label for="" class="col-sm-2 control-label">Tempat/Tgl Lahir</label>

              <div class="col-sm-9">
                <div class="row">
                  <div class="col-sm-6">
                    <input type="text" name="tempat_lahir" class="form-control" placeholder="Tempat Lahir">
                    <small style="color: red;"><?= form_error('tempat_lahir','*'); ?></small>
                  </div>
                  <div class="col-sm-6">
                    <input type="text" name="tanggal_lahir" id="datepicker" class="form-control" placeholder="Tanggal Lahir">
                    <small style="color: red;"><?= form_error('tanggal_lahir','*'); ?></small>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="" class="col-sm-2 control-label">Nama/Anak Ke</label>

              <div class="col-sm-9">
                <div class="row">
                  <div class="col-sm-6">
                    <input type="text" name="nama_anak" class="form-control" placeholder="Nama Anak">
                    <small style="color: red;"><?= form_error('nama_anak','*'); ?></small>
                  </div>
                  <div class="col-sm-6">
                    <input type="text" name="anak_ke" class="form-control" placeholder="Anak Ke">
                    <small style="color: red;"><?= form_error('anak_ke','*'); ?></small>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="" class="col-sm-2 control-label">Jenis Kelamin</label>

              <div class="col-sm-9">
                <div class="checkbox">
                  <label>
                    <input type="radio" name="jenis_kelamin" class="flat-red" value="Laki - laki"> Laki - laki &emsp;
                    <input type="radio" name="jenis_kelamin" class="flat-red" value="Perempuan"> Perempuan
                  </label>
                </div>
                <small style="color: red;"><?= form_error('jenis_kelamin','*'); ?></small>
              </div>
            </div>
            <div class="form-group">
              <label for="" class="col-sm-2 control-label">Cari NIK Ibu</label>

              <div class="col-sm-9">
                <input type="text" name="nik_ibu_kelahiran" id="nik_ibu_kelahiran" class="form-control" placeholder="Cari NIK Ibu">
              </div>
            </div>
            <div class="form-group">
              <label for="" class="col-sm-2 control-label">Nama Ibu</label>

              <div class="col-sm-9">
                <input type="text" name="nama_ibu" class="form-control" placeholder="Nama Ibu" readonly="readonly">
                <small style="color: red;"><?= form_error('nama_ibu','*'); ?></small>
              </div>
            </div>
            <div class="form-group">
              <label for="" class="col-sm-2 control-label">Agama/Umur Ibu</label>

              <div class="col-sm-9">
                <div class="row">
                  <div class="col-sm-6">
                     <input type="text" name="agama_ibu" class="form-control" placeholder="Agama Ibu" readonly="readonly">
                     <small style="color: red;"><?= form_error('agama_ibu','*'); ?></small>
                  </div>
                  <div class="col-sm-6">
                    <input type="number" name="umur_ibu" class="form-control" placeholder="Umur Ibu">
                    <small style="color: red;"><?= form_error('umur_ibu','*'); ?></small>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="" class="col-sm-2 control-label">Cari NIK Ayah</label>

              <div class="col-sm-9">
                <input type="text" name="nik_ayah_kelahiran" id="nik_ayah_kelahiran" class="form-control" placeholder="Cari NIK Ayah">
              </div>
            </div>
            <div class="form-group">
              <label for="" class="col-sm-2 control-label">Nama Ayah</label>

              <div class="col-sm-9">
                <input type="text" name="nama_ayah" class="form-control" placeholder="Nama Ayah" readonly="readonly">
                <small style="color: red;"><?= form_error('nama_ayah','*'); ?></small>
              </div>
            </div>
            <div class="form-group">
              <label for="" class="col-sm-2 control-label">Agama/Umur Ayah</label>

              <div class="col-sm-9">
                <div class="row">
                  <div class="col-sm-6">
                    <input type="text" name="agama_ayah" class="form-control" placeholder="Agama Ayah" readonly="readonly">
                    <small style="color: red;"><?= form_error('agama_ayah','*'); ?></small>
                  </div>
                  <div class="col-sm-6">
                    <input type="number" name="umur_ayah" class="form-control" placeholder="Umur Ayah">
                    <small style="color: red;"><?= form_error('umur_ayah','*'); ?></small>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="" class="col-sm-2 control-label">Pekerjaan Ayah</label>

              <div class="col-sm-9">
                <input type="text" name="pekerjaan_ayah" class="form-control" placeholder="Pekerjaan Ayah" readonly="readonly">
                <small style="color: red;"><?= form_error('pekerjaan_ayah','*'); ?></small>
              </div>
            </div>
            <div class="form-group">
              <label for="" class="col-sm-2 control-label">Alamat</label>

              <div class="col-sm-9">
                <textarea name="alamat" class="form-control" placeholder="Alamat" readonly="readonly"></textarea>
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
            <input type="hidden" name="id_user" value="<?php echo $this->session->userdata('id_user'); ?>">
          </div>
          <!-- /.box-body -->
          <div class="box-footer">
            <div class="pull-left">
              <a href="<?= base_url('media/kelahiran'); ?>" class="btn btn-danger btn-sm"><i class="fa fa-arrow-circle-left"></i> Kembali</a>
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

