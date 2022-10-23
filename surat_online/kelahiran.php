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
        <div class="box-header">
          <h3 class="box-title">Surat Keterangan Kelahiran</h3>
          <div class="pull-right">
            <a href="<?= base_url('media/add_kelahiran'); ?>" class="btn btn-info btn-sm"><i class="fa fa-plus-circle"></i> Buat Surat</a>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive">
          <div class="input-group input-group-sm" style="width: 100px;">
            <select name="tahun" id="tahun_kelahiran" class="form-control">

            </select>

            <div class="input-group-btn">

            </div>
          </div>
          <br>
          <table id="table_kelahiran" class="table table-striped">
            <thead style="background-color: #606060; color: white;">
            <tr>
              <th width="50">No Reg</th>
              <th>Nama Anak</th>
              <th>Tgl Lahir</th>
              <th>Tahun</th>
              <th>Status</th>
              <th width="100">Opsi</th>
            </tr>
            </thead>
            <tbody>
            
            </tbody>
          </table>
          <a href="<?= base_url('media/surat_online'); ?>" class="btn btn-danger btn-sm"><i class="fa fa-arrow-circle-left"></i> Kembali</a>
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
          <h4 class="modal-title">Detail Surat Kelahiran</h4>
        </div>
        <div class="modal-body" id="modal-kelahiran">
          
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
          <button type="button" class="btn btn-outline btn-sm" id="hapus_kelahiran">Hapus</button>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->

  <script type="text/javascript">
    $(document).ready(function() {
      //Tampil kelahiran
      var table_kelahiran = $('#table_kelahiran').DataTable({
        "processing": true,
        "serverside": true,
        "ajax": "<?= site_url('action/get_kelahiran')?>",
        "order": [[ 0, "desc" ]]
      });
      
      //Auto reload kelahiran
      setInterval( function () {
          table_kelahiran.ajax.reload(null, false);
      }, 10000 );
    });
  </script>