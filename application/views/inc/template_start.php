
<!DOCTYPE html>
<html class="no-js lt-ie10">
 <html class="no-js">
    <head>
        <meta charset="utf-8">

        <title><?= $this->lang->line('title');?></title>

        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0">


        <link rel="shortcut icon" href="img/favicon.png">
        <link rel="apple-touch-icon" href="<?php echo base_url('assets/admin/img/icon57.png" sizes="57x57');?>">
        <link rel="apple-touch-icon" href="<?php echo base_url('assets/admin/img/icon72.png" sizes="72x72');?>">
        <link rel="apple-touch-icon" href="<?php echo base_url('assets/admin/img/icon76.png" sizes="76x76');?>">
        <link rel="apple-touch-icon" href="<?php echo base_url('assets/admin/img/icon114.png" sizes="114x114');?>">
        <link rel="apple-touch-icon" href="<?php echo base_url('assets/admin/img/icon120.png" sizes="120x120');?>">
        <link rel="apple-touch-icon" href="<?php echo base_url('assets/admin/img/icon144.png" sizes="144x144');?>">
        <link rel="apple-touch-icon" href="<?php echo base_url('assets/admin/img/icon152.png" sizes="152x152');?>">
        <link rel="apple-touch-icon" href="<?php echo base_url('assets/admin/img/icon180.png" sizes="180x180');?>">

        <link rel="stylesheet" href="<?php echo base_url('assets/admin/css/bootstrap.min.css');?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/admin/css/plugins.css');?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/admin/css/main.css');?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/admin/css/themes.css');?>">

        <?php $theme=$template['theme'];
        if ($template['theme']) { ?><link rel="stylesheet" href="<?php echo base_url('assets/admin/css/themes/'.$theme.'.css');?>" id="theme-link"><?php } ?>


        <script src="<?php echo base_url('assets/admin/js/vendor/jquery-2.1.1.min.js');?>"></script>
        <script src="<?php echo base_url('assets/admin/js/vendor/modernizr-2.8.3.min.js');?>"></script>
        <style type="text/css">
            #page-container.header-fixed-top #page-content {
                padding-top: 20px;
            }
        </style>

    </head>
    <body>