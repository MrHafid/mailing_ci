<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Surat Online
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?= base_url('media/beranda'); ?>"><i class="fa fa-dashboard"></i> Beranda</a></li>
        <li class="active">Surat Online</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="box box-solid">
        <div class="box-header with-border">
          <h3 class="box-title">Surat Permohonan</h3>
        </div>
        <div class="box-body">
          <div class="row">
            <div class="col-lg-7">
              <div class="row">
                <div class="col-sm-2 col-xs-6">
                  <a style="color: black;" href="<?= base_url('media/skck'); ?>">
                    <div class="box-body" style="border: solid 5px; border-color: #dd4b39; border-radius: 15px;">
                      <span class="badge" id="skck_masuk"></span>
                      <img src="<?= base_url(); ?>assets/images/ic_pesan.png" class="img-responsive" alt="">
                    </div>
                    <p class="text-center"><small>SKCK</small></p>
                  </a>
                </div>
                <div class="col-sm-2 col-xs-6">
                  <a style="color: black;" href="<?= base_url('media/sktm'); ?>">
                    <div class="box-body" style="border: solid 5px; border-color: #dd4b39; border-radius: 15px;">
                      <span class="badge" id="sktm_masuk"></span>
                      <img src="<?= base_url(); ?>assets/images/ic_pesan.png" class="img-responsive" alt="">
                    </div>
                    <p class="text-center"><small>SKTM</small></p>
                  </a>
                </div>
                <div class="col-sm-2 col-xs-6">
                  <a style="color: black;" href="<?= base_url('media/kelahiran'); ?>">
                    <div class="box-body" style="border: solid 5px; border-color: #dd4b39; border-radius: 15px;">
                      <span class="badge" id="kelahiran_masuk"></span>
                      <img src="<?= base_url(); ?>assets/images/ic_pesan.png" class="img-responsive" alt="">
                    </div>
                    <p class="text-center"><small>Kelahiran</small></p>
                  </a>
                </div>
                <div class="col-sm-2 col-xs-6">
                  <a style="color: black;" href="<?= base_url('media/kematian'); ?>">
                    <div class="box-body" style="border: solid 5px; border-color: #dd4b39; border-radius: 15px;">
                      <span class="badge" id="kematian_masuk"></span>
                      <img src="<?= base_url(); ?>assets/images/ic_pesan.png" class="img-responsive" alt="">
                    </div>
                    <p class="text-center"><small>Kematian</small></p>
                  </a>
                </div>
                <div class="col-sm-2 col-xs-6">
                  <a style="color: black;" href="<?= base_url('media/sku'); ?>">
                    <div class="box-body" style="border: solid 5px; border-color: #dd4b39; border-radius: 15px;">
                      <span class="badge" id="sku_masuk"></span>
                      <img src="<?= base_url(); ?>assets/images/ic_pesan.png" class="img-responsive" alt="">
                    </div>
                    <p class="text-center"><small>Surat SKU</small></p>
                  </a>
                </div>
                <div class="col-sm-2 col-xs-6">
                  <a style="color: black;" href="<?= base_url('media/dom_warga'); ?>">
                    <div class="box-body" style="border: solid 5px; border-color: #dd4b39; border-radius: 15px;">
                      <span class="badge" id="dom_warga_masuk"></span>
                      <img src="<?= base_url(); ?>assets/images/ic_pesan.png" class="img-responsive" alt="">
                    </div>
                    <p class="text-center"><small>Domisil Warga</small></p>
                  </a>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-2 col-xs-6">
                  <a style="color: black;" href="<?= base_url('media/dom_ormas'); ?>">
                    <div class="box-body" style="border: solid 5px; border-color: #dd4b39; border-radius: 15px;">
                      <span class="badge" id="dom_ormas_masuk"></span>
                      <img src="<?= base_url(); ?>assets/images/ic_pesan.png" class="img-responsive" alt="">
                    </div>
                    <p class="text-center"><small>Domisil Ormas</small></p>
                  </a>
                </div>
                <div class="col-sm-2 col-xs-6">
                  <a style="color: black;" href="<?= base_url('media/dom_usaha'); ?>">
                    <div class="box-body" style="border: solid 5px; border-color: #dd4b39; border-radius: 15px;">
                      <span class="badge" id="dom_usaha_masuk"></span>
                      <img src="<?= base_url(); ?>assets/images/ic_pesan.png" class="img-responsive" alt="">
                    </div>
                    <p class="text-center"><small>Domisil Usaha</small></p>
                  </a>
                </div>
                <div class="col-sm-2 col-xs-6">
                  <a style="color: black;" href="<?= base_url('media/dom_skolah'); ?>">
                    <div class="box-body" style="border: solid 5px; border-color: #dd4b39; border-radius: 15px;">
                      <span class="badge" id="dom_skolah_masuk"></span>
                      <img src="<?= base_url(); ?>assets/images/ic_pesan.png" class="img-responsive" alt="">
                    </div>
                    <p class="text-center"><small>Domisil Skolah</small></p>
                  </a>
                </div>
                <div class="col-sm-2 col-xs-6">
                  <a style="color: black;" href="<?= base_url('media/dom_ponpes'); ?>">
                    <div class="box-body" style="border: solid 5px; border-color: #dd4b39; border-radius: 15px;">
                      <span class="badge" id="dom_ponpes_masuk"></span>
                      <img src="<?= base_url(); ?>assets/images/ic_pesan.png" class="img-responsive" alt="">
                    </div>
                    <p class="text-center"><small>Domisil Ponpes</small></p>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-lg-5">
              <div class="box box-solid" style="background: #6175a1;color: white;">
                <div class="row">
                  <div class="col-sm-6">
                    <h2 class="text-center"><b><?php echo date('Y'); ?></b></h2>
                    <p class="text-center"><b>Surat Masuk</b></p>
                  </div>
                  <div class="col-sm-6">
                    <h1 class="text-center"><b id="surat_masuk"></b></h1>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6 col-xs-6">
                  <div class="box box-solid" style="background: #18a136;color: white;">
                    <div class="row">
                      <div class="col-sm-6">
                        <h2 class="text-center"><b><?php echo date('Y'); ?></b></h2>
                        <p class="text-center"><b>Disetujui</b></p>
                      </div>
                      <div class="col-sm-6">
                        <h1 class="text-center"><b id="surat_disetujui"></b></h1>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-xs-6">
                  <div class="box box-solid" style="background: #e53535;color: white;">
                    <div class="row">
                      <div class="col-sm-6">
                        <h2 class="text-center"><b><?php echo date('Y'); ?></b></h2>
                        <p class="text-center"><b>Ditolak</b></p>
                      </div>
                      <div class="col-sm-6">
                        <h1 class="text-center"><b id="surat_ditolak"></b></h1>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <script type="text/javascript">
    //Surat masuk
    $(document).ready(function() {
      selesai_surat_masuk();
    });
     
    function selesai_surat_masuk() {
      setTimeout(function() {
        update_surat_masuk();
        selesai_surat_masuk();
      }, 900);
    }
     
    function update_surat_masuk() {
      $.getJSON("<?= site_url('action/surat_masuk')?>", function(data) {
        var data = data.result;
        $("#surat_masuk").text(data);
      });
    }

    //Surat disetujui
    $(document).ready(function() {
      selesai_surat_disetujui();
    });
     
    function selesai_surat_disetujui() {
      setTimeout(function() {
        update_surat_disetujui();
        selesai_surat_disetujui();
      }, 900);
    }
     
    function update_surat_disetujui() {
      $.getJSON("<?= site_url('action/surat_disetujui')?>", function(data) {
        var data = data.result;
        $("#surat_disetujui").text(data);
      });
    }

    //Surat ditolak
    $(document).ready(function() {
      selesai_surat_ditolak();
    });
     
    function selesai_surat_ditolak() {
      setTimeout(function() {
        update_surat_ditolak();
        selesai_surat_ditolak();
      }, 900);
    }
     
    function update_surat_ditolak() {
      $.getJSON("<?= site_url('action/surat_ditolak')?>", function(data) {
        var data = data.result;
        $("#surat_ditolak").text(data);
      });
    }

    //Surat SKCK masuk
    $(document).ready(function() {
      selesai_skck();
    });
     
    function selesai_skck() {
      setTimeout(function() {
        update_skck();
        selesai_skck();
      }, 900);
    }
     
    function update_skck() {
      $.getJSON("<?= site_url('action/skck_masuk')?>", function(data) {
        var data = data.result;
        $("#skck_masuk").text(data);
      });
    }

    //Surat SKTM masuk
    $(document).ready(function() {
      selesai_sktm();
    });
     
    function selesai_sktm() {
      setTimeout(function() {
        update_sktm();
        selesai_sktm();
      }, 900);
    }
     
    function update_sktm() {
      $.getJSON("<?= site_url('action/sktm_masuk')?>", function(data) {
        var data = data.result;
        $("#sktm_masuk").text(data);
      });
    }

    //Surat kelahiran masuk
    $(document).ready(function() {
      selesai_kelahiran();
    });
     
    function selesai_kelahiran() {
      setTimeout(function() {
        update_kelahiran();
        selesai_kelahiran();
      }, 900);
    }
     
    function update_kelahiran() {
      $.getJSON("<?= site_url('action/kelahiran_masuk')?>", function(data) {
        var data = data.result;
        $("#kelahiran_masuk").text(data);
      });
    }

    //Surat kematian masuk
    $(document).ready(function() {
      selesai_kematian();
    });
     
    function selesai_kematian() {
      setTimeout(function() {
        update_kematian();
        selesai_kematian();
      }, 900);
    }
     
    function update_kematian() {
      $.getJSON("<?= site_url('action/kematian_masuk')?>", function(data) {
        var data = data.result;
        $("#kematian_masuk").text(data);
      });
    }

    //Surat sku masuk
    $(document).ready(function() {
      selesai_sku();
    });
     
    function selesai_sku() {
      setTimeout(function() {
        update_sku();
        selesai_sku();
      }, 900);
    }
     
    function update_sku() {
      $.getJSON("<?= site_url('action/sku_masuk')?>", function(data) {
        var data = data.result;
        $("#sku_masuk").text(data);
      });
    }

    //Surat dom warga masuk
    $(document).ready(function() {
      selesai_dom_warga();
    });
     
    function selesai_dom_warga() {
      setTimeout(function() {
        update_dom_warga();
        selesai_dom_warga();
      }, 900);
    }
     
    function update_dom_warga() {
      $.getJSON("<?= site_url('action/dom_warga_masuk')?>", function(data) {
        var data = data.result;
        $("#dom_warga_masuk").text(data);
      });
    }

    //Surat dom ormas masuk
    $(document).ready(function() {
      selesai_dom_ormas();
    });
     
    function selesai_dom_ormas() {
      setTimeout(function() {
        update_dom_ormas();
        selesai_dom_ormas();
      }, 900);
    }
     
    function update_dom_ormas() {
      $.getJSON("<?= site_url('action/dom_ormas_masuk')?>", function(data) {
        var data = data.result;
        $("#dom_ormas_masuk").text(data);
      });
    }

    //Surat dom usaha masuk
    $(document).ready(function() {
      selesai_dom_usaha();
    });
     
    function selesai_dom_usaha() {
      setTimeout(function() {
        update_dom_usaha();
        selesai_dom_usaha();
      }, 900);
    }
     
    function update_dom_usaha() {
      $.getJSON("<?= site_url('action/dom_usaha_masuk')?>", function(data) {
        var data = data.result;
        $("#dom_usaha_masuk").text(data);
      });
    }

    //Surat dom skolah masuk
    $(document).ready(function() {
      selesai_dom_skolah();
    });
     
    function selesai_dom_skolah() {
      setTimeout(function() {
        update_dom_skolah();
        selesai_dom_skolah();
      }, 900);
    }
     
    function update_dom_skolah() {
      $.getJSON("<?= site_url('action/dom_skolah_masuk')?>", function(data) {
        var data = data.result;
        $("#dom_skolah_masuk").text(data);
      });
    }

    //Surat dom ponpes masuk
    $(document).ready(function() {
      selesai_dom_ponpes();
    });
     
    function selesai_dom_ponpes() {
      setTimeout(function() {
        update_dom_ponpes();
        selesai_dom_ponpes();
      }, 900);
    }
     
    function update_dom_ponpes() {
      $.getJSON("<?= site_url('action/dom_ponpes_masuk')?>", function(data) {
        var data = data.result;
        $("#dom_ponpes_masuk").text(data);
      });
    }
  </script>