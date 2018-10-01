<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $title; ?></title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    
  <?php
  $this->load->view('template/head');
  ?>
  <!--tambahkan custom css disini-->
  <style type="text/css">
        
  </style>
 <?php
  $this->load->view('template/topbar');
  $this->load->view('template/sidebar');
  ?>
        <section class="content-header">
          <h1>
            <?php echo $title; ?>
          </h1>
          <ol class="breadcrumb">
            <li><a href="<?php echo site_url(); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active"><?php echo $title; ?></li>
          </ol>
        </section>
        <!-- MODAL INPUT-->
        <!-- Modal -->
        <div class="modal fade" id="modal-data" role="dialog">
          <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Tambah Data Status</h4>
              </div>
              <div class="modal-body">
                <div class="box-body pad">
                  <form id="form-data">
                  <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Nama</label>
                      <input type="hidden" name="id" >
                      <input type="text" class="form-control" name="nama" >
                    </div>
                    <div class="form-group">
                      <label>Alamat</label>
                      <input type="text" class="form-control" name="alamat" >
                    </div>
                    <div class="form-group">
                      <label>Phone</label>
                      <input type="text" class="form-control" name="phone" >
                    </div>
                    <div class="form-group">
                      <label>WA</label>
                      <input type="text" class="form-control" name="wa" >
                    </div>
                    <div class="form-group">
                      <label>Email</label>
                      <input type="text" class="form-control" name="email" >
                    </div>
                    <div class="form-group">
                      <label>Web</label>
                      <input type="text" class="form-control" name="web" >
                    </div>
                    <div class="form-group">
                      <label>Owner</label>
                      <input type="text" class="form-control" name="owner" >
                    </div>
                    <div class="form-group">
                      <label>Keterangan</label>
                      <input type="text" class="form-control" name="ket" >
                    </div>
                    </div>
                    </div>
                  </div>
                </div>
              </form>
              <div class="modal-footer">
          <button type="button" class="btn btn-warning" data-dismiss="modal">Batal</button>
          <button type="button" id="btnSave" onclick="save()" class="btn btn-primary">Simpan</button>
              </div>
            </div>
          </div>
          </div>  <!-- END MODAL INPUT-->
          <div id="modal-konfirmasi" class="modal fade" role="dialog">
            <div class="modal-dialog modal-sm">
              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-body">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <center><h4 class="modal-title"></h4></center>
                </div>

                <div class="modal-footer">
                <button type="button" class="btn btn-warning" data-dismiss="modal">Tidak</button>
                <button type="button" id="btnHapus"  class="btn btn-danger">Ya</button>
                </div>
              </div>

            </div>
          </div>
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box box-info">
                <div class="box-header">
                        </form>
                        
                        <button class="btn btn-success " onclick="reload_table()"  title="Cek Data"><i class="glyphicon glyphicon-refresh"></i> Refresh</button>
                        <!--
                        <button class="btn btn-warning "onclick="add_data()" ><i class="fa fa-plus"></i> Tambah</button>
                        -->
                </div>
                <div class="box-body">               
                  <div class="table-responsive mailbox-messages">                    
                    <table id="table" class="table table-striped table-bordered" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th width="2%">No.</th>
                          <th>Nama</th>
                          <th>Alamat</th>
                          <th>Phone</th>
                          <th>WA</th>
                          <th>Email</th>
                          <th>Web</th>
                          <th>Owner</th>
                          <th>Keterangan</th>
                          <th width="10%">Opsi</th>
                        </tr>
                      </thead>
                      <tbody>
                          
                      </tbody>
                    </table>

                  </div>
              </div>
            </div>
          </div>
        </section>
    <?php
        $this->load->view('template/js');
        ?>
    
    <script type="text/javascript">
    var table;
    var idx     = -1;

    $(document).ready(function() {

      table = $('#table').DataTable({  
          "processing": true, 
          "ajax": {
              "url": "<?php echo site_url('company/setView'); ?>",
              "type": "POST",
              "data": {
              }
          },
          "columns": [
            { "data": "no" },
            { "data": "nama" },
            { "data": "alamat" },
            { "data": "phone" },
            { "data": "wa" },
            { "data": "email" },
            { "data": "web" },
            { "data": "owner" },
            { "data": "ket" },
            { "data": "action" }
          ]
        });  


      });

    function reload_table(){
        table.ajax.reload(null, false); 
        idx = -1;
    }

    function add_data()
    {
    save_method = 'add';
    $('#form-data')[0].reset();
    $('.form-group').removeClass('has-error');
    $('.help-block').empty(); 
    $('#modal-data').modal('show');
    $('.modal-title').text('Tambahkan Data '); 
    }

    function edit_data(id)
    {
    save_method = 'update';
    $('#form-data')[0].reset(); // reset form on modals
    $('.form-group').removeClass('has-error'); 
    $('.help-block').empty(); 
    $.ajax({
    url : "<?php echo site_url('company/edit')?>/" + id,
    type: "GET",
    dataType: "JSON",
    success: function(data)
    {
    $('[name="id"]').val(data.id);
    $('[name="nama"]').val(data.nama);
    $('[name="alamat"]').val(data.alamat);
    $('[name="phone"]').val(data.phone);
    $('[name="wa"]').val(data.wa);
    $('[name="email"]').val(data.email);
    $('[name="web"]').val(data.web);
    $('[name="owner"]').val(data.owner);
    $('[name="ket"]').val(data.ket);
    $('#modal-data').modal('show'); 

    $('.modal-title').text('Edit Data'); 
    
    },
    error: function (jqXHR, textStatus , errorThrown)
    {
    alert('Error get data from ajax');
    }
    });
    }

    function save()
    {
    $('#btnSave').text('saving...'); //change button text
    $('#btnSave').attr('disabled',true); //set button disable
    var url;
    
    if(save_method == 'add') {
    url = "<?php echo site_url('company/tambah')?>"
    notif = showNotif('Sukses' ,'Data Berhasil Ditambahkan', 'success');
    } else {
    url = "<?php echo site_url('company/update')?>"
    notif = showNotif('Sukses' ,'Data Berhasil Diubah', 'success');
    }
    // ajax adding data to database
    $.ajax({
    url : url,
    type: "POST",
    data: $('#form-data').serialize(),
    dataType: "JSON",
    success: function(data)
    {
    if(data.sukses) //if success close modal and reload ajax table
    {
    $('#modal-data').modal('hide');
    reload_table();
    notif;
    }
    
    $('#btnSave').text('Save'); //change button text
    $('#btnSave').attr('disabled',false); //set button enable
    
    },
    error: function (jqXHR, textStatus , errorThrown)
    {
    alert('Error adding / update data');
    $('#btnSave').text('save'); //change button text
    $('#btnSave').attr('disabled',false); //set button enable
    
    }
    });
    }

    function hapus(id){

    $('.modal-title').text('Yakin Hapus Data ?');
    $('#modal-konfirmasi').modal('show');
    $('#btnHapus').attr('onclick','delete_data('+id+')');

    }

    function delete_data(id)
    {
    // ajax delete data to database
    $.ajax({
    url : "<?php echo site_url('company/hapus')?>/"+id,
    type: "POST",
    dataType: "JSON",
    success: function(data)
    {
    //if success reload ajax table
    $('#modal-konfirmasi').modal('hide');
    showNotif('Sukses' ,'Data Berhasil Dihapus', 'success');
    reload_table();
    },
    error: function (jqXHR, textStatus , errorThrown)
    {
    alert('Error deleting data');
    }
    });
    
    }

</script>
        <script>
        $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();
        });
        </script>
       <script>
          $( ".<?php echo $aktifgrup ?>" ).addClass( "active" );
        </script>
        <script>
          $( ".<?php echo $aktifmenu ?>" ).addClass( "active" );
        </script>
        <?php
        $this->load->view('template/sidebar_theme');
        ?>

  </body>
</html>