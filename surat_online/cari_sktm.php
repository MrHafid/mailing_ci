<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Surat SKTM
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?= base_url('media/beranda'); ?>"><i class="fa fa-dashboard"></i> Beranda</a></li>
        <li class="active">Surat SKTM</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Surat SKTM</h3>
          <div class="pull-right">
            <a href="<?= base_url('media/sktm'); ?>" class="btn btn-danger btn-sm"><i class="fa fa-arrow-circle-left"></i> Kembali</a>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive">
          <div class="input-group input-group-sm" style="width: 100px;">
            <select name="tahun" id="tahun_sktm" class="form-control">

            </select>
            <input type="hidden" id="v_tahun_sktm" value="<?php echo $this->uri->segment(3); ?>">
            <div class="input-group-btn">
              
            </div>
          </div>
          <br>
          <table id="table_cari_sktm" class="table table-striped">
            <thead style="background-color: #606060; color: white;">
            <tr>
              <th width="50">No Reg</th>
              <th>Nama</th>
              <th>Tahun</th>
              <th>Status</th>
              <th width="100">Opsi</th>
            </tr>
            </thead>
            <tbody>

            </tbody>
          </table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <div class="modal fade" id="modal-detail">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header" style="background-color: #606060; color: white;">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Detail Surat SKtm</h4>
        </div>
        <div class="modal-body" id="modal-sktm">
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Tutup</button>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->

  <div class="modal modal-danger fade" id="modal-delete">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Hapus Data</h4>
        </div>
        <div class="modal-body">
          <p style="text-align: center;">Anda yakin ingin menghapus?</p>
          <input type="hidden" name="id" id="id" value="">
          <input type="hidden" name="qrcode" id="qrcode" value="">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline btn-sm pull-left" data-dismiss="modal">Batal</button>
          <button type="button" class="btn btn-outline btn-sm" id="hapus_sktm">Hapus</button>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->