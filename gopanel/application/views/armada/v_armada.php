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
        <h4 class="modal-title"></h4>
      </div>
      <div class="modal-body">
        <div class="box-body pad">
          <form id="form-data">
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label>Kode</label>
                  <input type="text" class="form-control" name="kode">
                </div>
                <div class="form-group">
                  <label>Nama Armada</label>
                  <input type="hidden" name="id">
                  <input type="text" class="form-control" name="title" required>
                </div>
                <div class="form-group">
                  <label>Gambar</label>
                  <input type="file" class="form-control" name="image" id="image" >
                </div>
                <div class="form-group">
                  <label>Artikel</label>
                  <textarea class="form-control" rows="7" name="artikel"></textarea>
                </div>
                <div class="form-group">
                  <label>Keterangan</label>
                  <input type="text" class="form-control" name="ket" >
                </div>
                <div class="form-group">
                  <input type="hidden" name="path" id="path">
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
        <button class="btn btn-warning "onclick="add_data()" ><i class="fa fa-plus"></i> Tambah</button>
      </div>
      <div class="box-body">
        <div class="table-responsive mailbox-messages">
          <table id="table" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
              <tr>
                <th width="2%">No.</th>
                <th>Kode</th>
                <th>Nama</th>
                <th>Gambar</th>
                <th>Artikel</th>
                <th>Ket</th>
                <th width="12%">Opsi</th>
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
              "url": "<?php echo site_url('armada/setView'); ?>",
              "type": "POST",
              "data": {
              }
          },
          "columns": [
            { "data": "no" },
            { "data": "kode" },
            { "data": "title" },
            { "data": "image" },
            { "data": "artikel" },
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
    $('.form-group').removeClass('has-error'); // clear error class
    $('.help-block').empty(); // clear error string
    $('#modal-data').modal('show'); // show bootstrap modal
    $('.modal-title').text('Tambahkan Data'); // Set Title to Bootstrap modal title
    }

    function edit_data(id)
    {
    save_method = 'update';
    $('#form-data')[0].reset(); 

    $('.form-group').removeClass('has-error'); 

    $('.help-block').empty(); 

    $.ajax({
    url : "<?php echo site_url('armada/edit')?>/" + id,
    type: "GET",
    dataType: "JSON",
    success: function(data)
    {
    $('[name="id"]').val(data.id);
    $('[name="kode"]').val(data.kode);
    $('[name="title"]').val(data.title);
    $('[name="artikel"]').val(data.artikel);
    $('[name="ket"]').val(data.ket);
    $('[name="path"]').val('.'+data.image);

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
    $('#btnSave').text('saving...');
    $('#btnSave').attr('disabled',true);
    var url;
    
    if(save_method == 'add') {
    url   = "<?php echo site_url('armada/tambah')?>"
    notif = showNotif('Sukses' ,'Data Berhasil Ditambahkan', 'success');
    } else {
    url = "<?php echo site_url('armada/update')?>";
    notif = showNotif('Sukses' ,'Data Berhasil Diubah', 'success');
    }
    // ajax adding data to database
    var formData = new FormData($('#form-data')[0]);

    $.ajax({
    url : url,
    type: "POST",
    data: formData,
    dataType: "JSON",
    mimeType: "multipart/form-data",
    contentType: false,
    cache: false,
    processData: false,

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

    function unduh_data(id){

    $.ajax({
    url : "<?php echo site_url('armada/unduh')?>/"+id,
    type: "POST",
    dataType: "JSON",
    success: function(data)
    {
    var unduhdata = (data.unduh);
    if (data.sukses){
    showNotif('Sukses' ,'File Di Unduh', 'success');
    window.open("<?php echo site_url('')?>"+unduhdata);
    }else{
    showNotif('Perhatian' ,'File Tidak Ada', 'danger');
    }
    },
    error: function (jqXHR, textStatus , errorThrown)
    {
    
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
    url : "<?php echo site_url('armada/hapus')?>/"+id,
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
          $( ".<?php echo $aktifgrup ?>" ).addClass( "active" );
        </script>
        <script>
          $( ".<?php echo $aktifmenu ?>" ).addClass( "active" );
        </script>
          <script>
            $(".select2").select2({
              placeholder: "-  -"
            });
        </script>
        <script>
        $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();
        });
        </script>
       
        <?php
        $this->load->view('template/sidebar_theme');
        ?>

  </body>
</html>