<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Go Panel</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- Bootstrap 3.3.2 -->
        <link href="<?php echo base_url('assets/lte/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet" type="text/css" />
        <!-- Font Awesome Icons -->
        <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
        <!-- Ionicons -->
        <link href="http://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="<?php echo base_url('assets/lte/dist/css/lte.min.css') ?>" rel="stylesheet" type="text/css" />
        <?php 
        $wherelogo = array (
            'kode' => 'logo',
        );
        $logo = $this->Dbhelper->getdatawall('felementweb',$wherelogo);
        foreach ($logo as $t) { ?>
        <link rel="icon" href=".<?php echo $t->gambar; ?>" type="" class="fav">
        <?php } ?>
        <link href="<?php echo base_url('assets/lte/dist/css/skins/_all-skins.min.css') ?>" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="<?php echo base_url('assets/lte/plugins/datatables/dataTables.bootstrap.css')?>">
        <!-- Date Picker -->
        <link href="<?php echo base_url('assets/lte/plugins/datepicker/datepicker3.css') ?>" rel="stylesheet" type="text/css" />
        <!-- Daterange picker -->
        <link href="<?php echo base_url('assets/lte/plugins/daterangepicker/daterangepicker.css') ?>" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="<?php echo base_url('assets/lte/plugins/datepicker/datepicker3.css') ?>">
        <style>
        #warning {
        color: white;
        font-size : 16px;
        background-color : red;
        border-radius : 5px;
        opacity: 0.6;
        }
        .fav {
            filter: grayscale(100%);
        }
        .alrt-success {
            color: white;
            font-size : 16px;
            background-color : #00a65a;
            border-radius : 5px;
            opacity: 0.6;
        }
        .alrt-stuck {
        color: white;
        font-size : 16px;
        background-color : #00a65a;
        border-radius : 5px;
        }
        </style>
        
        
        
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->