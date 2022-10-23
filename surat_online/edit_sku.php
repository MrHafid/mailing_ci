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
        <li class="active">Surat SKU</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Edit Surat Keteranagn Usaha</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <div class="form-horizontal">
        <?php foreach($sku->result() as $item){ ?>
        <?= form_open('action/update_sku'); ?>
          <div class="box-body">
            <input type="hidden" name="id" value="<?php echo $item->id; ?>">
            <div class="form-group">
              <label for="" class="col-sm-2 control-label">Nama Lengkap</label>

              <div class="col-sm-9">
                <input type="text" name="nama_lengkap" class="form-control" placeholder="Nama Lengkap" readonly="readonly" value="<?php echo cetak($item->nama_lengkap); ?>">
              </div>
            </div>
            <div class="form-group">
              <label for="" class="col-sm-2 control-label">NIK</label>

              <div class="col-sm-9">
                <input type="text" name="nik" class="form-control" placeholder="NIK" readonly="readonly" value="<?php echo cetak($item->nik); ?>">
              </div>
            </div>
            <div class="form-group">
              <label for="" class="col-sm-2 control-label">Jenis Kelamin</label>

              <div class="col-sm-9">
                <input type="text" name="jenis_kelamin" class="form-control" placeholder="Jenis Kelamin" readonly="readonly" value="<?php echo cetak($item->jenis_kelamin); ?>">
              </div>
            </div>
            <div class="form-group">
              <label for="" class="col-sm-2 control-label">Tempat Lahir</label>

              <div class="col-sm-9">
                <input type="text" name="tempat_lahir" class="form-control" placeholder="Tempat Lahir" readonly="readonly" value="<?php echo cetak($item->tempat_lahir); ?>">
              </div>
            </div>
            <div class="form-group">
              <label for="" class="col-sm-2 control-label">Tanggal Lahir</label>

              <div class="col-sm-9">
                <input type="text" name="tanggal_lahir" class="form-control" placeholder="Tanggal Lahir" readonly="readonly" value="<?php echo cetak($item->tanggal_lahir); ?>">
              </div>
            </div>
            <div class="form-group">
              <label for="" class="col-sm-2 control-label">Agama</label>

              <div class="col-sm-9">
                <input type="text" name="agama" class="form-control" placeholder="Agama" readonly="readonly" value="<?php echo cetak($item->agama); ?>">
              </div>
            </div>
            <div class="form-group">
              <label for="" class="col-sm-2 control-label">Pekerjaan</label>

              <div class="col-sm-9">
                <input type="text" name="pekerjaan" class="form-control" placeholder="Pekerjaan" readonly="readonly" value="<?php echo cetak($item->pekerjaan); ?>">
              </div>
            </div>
            <div class="form-group">
              <label for="" class="col-sm-2 control-label">Status</label>

              <div class="col-sm-9">
                <input type="text" name="status" class="form-control" placeholder="Status" readonly="readonly" value="<?php echo cetak($item->status_warga); ?>"> 
              </div>
            </div>
            <div class="form-group">
              <label for="" class="col-sm-2 control-label">Warga Negara</label>

              <div class="col-sm-9">
                <input type="text" name="warga_negara" class="form-control" placeholder="Warga Negara" readonly="readonly" value="<?php echo cetak($item->warga_negara); ?>"> 
              </div>
            </div>
            <div class="form-group">
              <label for="" class="col-sm-2 control-label">Alamat</label>

              <div class="col-sm-9">
                <textarea name="alamat" class="form-control" id="alamat" placeholder="Alamat" readonly="readonly"><?php echo cetak($item->alamat); ?></textarea>
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
                <input type="text" name="desa" class="form-control" placeholder="Desa" readonly="readonly" value="<?php echo cetak($item->desa); ?>">
              </div>
            </div>
            <div class="form-group">
              <label for="" class="col-sm-2 control-label">Kecamatan</label>

              <div class="col-sm-9">
                <input type="text" name="kecamatan" class="form-control" placeholder="Kecamatan" readonly="readonly" value="<?php echo cetak($item->kecamatan); ?>">
              </div>
            </div>
            <div class="form-group">
              <label for="" class="col-sm-2 control-label">Kabupaten</label>

              <div class="col-sm-9">
                <input type="text" name="kabupaten" class="form-control" placeholder="Kabupaten" readonly="readonly" value="<?php echo cetak($item->kabupaten); ?>">
              </div>
            </div>
            <div class="form-group">
              <label for="" class="col-sm-2 control-label">Provinsi</label>

              <div class="col-sm-9">
                <input type="text" name="provinsi" class="form-control" placeholder="Provinsi" readonly="readonly" value="<?php echo cetak($item->provinsi); ?>">
              </div>
            </div>
            <div class="form-group">
              <label for="" class="col-sm-2 control-label">Nama Usaha</label>

              <div class="col-sm-9">
                <input type="text" name="nama_usaha" class="form-control" placeholder="Nama Usaha" value="<?php echo cetak($item->nama_usaha); ?>">
                <small style="color: red;"><?= form_error('nama_usaha','*'); ?></small>
              </div>
            </div>
          </div>
          <!-- /.box-body -->
          <div class="box-footer">
            <div class="pull-left">
              <a href="<?= base_url('media/sku'); ?>" class="btn btn-danger btn-sm"><i class="fa fa-arrow-circle-left"></i> Kembali</a>
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

