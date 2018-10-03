<!doctype html>
<html lang="th">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>Controlpanel</title>
  <meta name="description" content="Luxury is a premium adman dashboard template based on bootstrap" />
  <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0" />
  <link rel="apple-touch-icon" href="apple-touch-icon.png" />
  <!-- <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/css/bootstrap.css" />
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css" /> -->
  <!-- theme customizier \ demo only -->
  <?php
  echo css_asset('admin/theme-customizer.css');
  echo js_asset('admin/theme-customizer.js');
  ?>
  <!-- core plugins -->
  <?php

  echo css_asset('vendor/css/hamburgers.css');
  echo css_asset('vendor/bower_components/perfect-scrollbar/css/perfect-scrollbar.min.css');
  echo css_asset('vendor/bower_components/switchery/dist/switchery.min.css');
  echo css_asset('vendor/bower_components/sweetalert/dist/sweetalert.css');
  ?>
  <!-- site-wide styles -->
  <?php

  echo css_asset('vendor/bower_components/summernote/dist/summernote.css');
  echo css_asset('vendor/css/bootstrap.css');
  echo css_asset('admin/site.css');
  echo css_asset('admin/custom.css');
  echo css_asset('admin/timeline.css');
  echo css_asset('admin/form.fileupload.css');
  echo css_asset('admin/form.wysiwyg-editor.css');
  echo css_asset('vendor/bower_components/font-awesome/css/font-awesome.min.css');
  echo css_asset('vendor/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.css');
  echo js_asset('vendor/bower_components/breakpoints.js/dist/breakpoints.min.js');
  echo js_asset('vendor/froala_editor_2.8.5/css/froala_editor.min.css');
  ?>
    <link rel="stylesheet" href="<?= base_url() ?>assets/js/vendor/froala_editor_2.8.5/css/froala_editor.min.css" />
    <!-- Include all Editor plugins CSS style. -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/js/vendor/froala_editor_2.8.5/css/froala_editor.pkgd.min.css">

    <!-- Include Code Mirror CSS. -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,600" />
  <script>
    Breakpoints({
      xs: {
        min: 0,
        max: 575
      },
      sm: {
        min: 576,
        max: 767
      },
      md: {
        min: 768,
        max: 991
      },
      lg: {
        min: 992,
        max: 1199
      },
      xl: {
        min: 1200,
        max: Infinity
      }
    });
  </script>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body class="menubar-left menubar-dark">
  <!--[if lt IE 10]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
  <![endif]-->

<nav class="site-navbar navbar fixed-top navbar-expand-md navbar-light bg-blue">
  <div class="navbar-header"><a class="navbar-brand" href="<?=URL_Site?>/controlpanel"></path></svg> <span class="brand-name hidden-fold">Controlpanel</span> </a>
    <button data-toggle="menubar" class="mr-auto hidden-md-up hamburger hamburger--collapse js-hamburger" type="button"><span class="hamburger-box"><span class="hamburger-inner"></span></span></button> <button type="button" class="navbar-toggler hidden-md-up collapsed"
        data-toggle="navbar-search"><span class="sr-only">Toggle navigation</span> <span class="zmdi zmdi-hc-lg zmdi-search"></span></button> <button type="button" class="navbar-toggler hidden-md-up collapsed" data-toggle="collapse" data-target="#site-navbar-collapse"
        aria-expanded="false"><span class="sr-only">Toggle navigation</span> <span class="zmdi zmdi-hc-lg zmdi-more"></span></button></div>
  <!-- /.navbar-header -->
  <div class="collapse navbar-collapse" id="site-navbar-collapse">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item hidden-sm-down px-3 d-flex align-items-center"><button data-toggle="menubar-fold" class="hamburger hamburger--arrowalt is-active js-hamburger" type="button"><span class="hamburger-box"><span class="hamburger-inner"></span></span></button></li>

  </ul>
  <ul class="navbar-nav">
    <li class="nav-item dropdown"><a class="nav-link site-user dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img class="nav-img" src="<?=URL_Site?>/assets/img/global/images/user-img.png" alt="" /> <span class="nav-text hidden-sm-down ml-2"><?=$user['logged_user']?></span> <i class="nav-caret hidden-sm-down zmdi zmdi-hc-sm zmdi-chevron-down"></i></a>
      <div class="dropdown-menu dropdown-menu-right p-0" data-plugin="dropdownCaret">
        <a class="dropdown-item" href="<?=URL_Site?>/logout"><i class="fa fa-power-off mr-3"></i> <span>Logout</span></a></div>
      </div>
    </li>
  </ul>
  <!-- /.navbar-nav -->
  </div>
  <!-- /.navbar-collapse -->
</nav>
<!-- /.side-panel -->
<div class="site-wrapper">
  <aside class="site-menubar">
    <div class="site-menubar-inner">
      <ul class="site-menu">
        <!-- MAIN NAVIGATION SECTION -->
        <li><a href="<?=URL_Site?>/controlpanel"><i class="menu-icon fa fa-home zmdi-hc-lg"></i> <span class="menu-text">หน้าหลัก</span></a></li>
        <li><a href="javascript:void(0)" class="submenu-toggle"><i class="menu-icon zmdi zmdi-dropbox zmdi-hc-lg"></i> <span class="menu-text">ประสงค์ยื่นคำร้อง</span> <i class="menu-caret zmdi zmdi-hc-sm zmdi-chevron-right"></i></a>
          <ul class="submenu">
            <li><a href="<?=URL_Site?>/controlpanel/document/form"><span class="menu-text">ยื่นคำร้อง</span></a></li>
            <?php if($user['logged_type'] == 'admin'): ?><li><a href="<?=URL_Site?>/controlpanel/document/approved"><span class="menu-text">อนุมัติคำร้อง</span></a></li><?php endif;?>
          </ul>
        </li>
          <?php if($user['logged_type'] == 'admin'): ?><li><a href="<?=URL_Site?>/controlpanel/process"><i class="menu-icon fa fa-group"></i> <span class="menu-text">ติดตามกระบวนการบุคคล</span> <i class="menu-caret zmdi zmdi-hc-sm zmdi-chevron-right"></i></a>
        </li><?php endif;?>
          <?php if($user['logged_type'] == 'admin'): ?><li><a href="<?=URL_Site?>/controlpanel/search" class=""><i class="menu-icon  fa fa-search"></i> <span class="menu-text">ค้นหาข้อมูลตามรายชื่อ</span> <i class="menu-caret zmdi zmdi-hc-sm zmdi-chevron-right"></i></a>
        </li><?php endif;?>
        <?php if($user['logged_type'] == 'user'): ?><li><a href="<?=URL_Site?>/controlpanel/download/success" class=""><i class="menu-icon  fa fa-file-text"></i> <span class="menu-text">ตัวอย่างเอกสาร</span> <i class="menu-caret zmdi zmdi-hc-sm zmdi-chevron-right"></i></a>
      </li><?php endif;?>
        <li><a href="<?=URL_Site?>/controlpanel/download" ><i class="menu-icon fa fa-info-circle"></i> <span class="menu-text">ขั้นตอนการยื่นแบบฟอร์ม</span> <i class="menu-caret zmdi zmdi-hc-sm zmdi-chevron-right"></i></a>
        </li>
          <?php if($user['logged_type'] == 'admin'): ?><li><a href="javascript:void(0)" class="submenu-toggle"><i class="menu-icon fa fa-cogs"></i> <span class="menu-text">ตั้งค่า</span> <i class="menu-caret zmdi zmdi-hc-sm zmdi-chevron-right"></i></a>
          <ul class="submenu">
            <li><a href="<?=URL_Site?>/controlpanel/setting/admin"><span class="menu-text">ตั้งค่าผู้ดูแลระบบ</span></a></li>
            <li><a href="<?=URL_Site?>/controlpanel/setting/user"><span class="menu-text">ตั้งค่าผู้ใช้</span></a></li>
            <li><a href="<?=URL_Site?>/controlpanel/setting/viewuser"><span class="menu-text">ตั้งค่าแสดงผลหน้าหลักผู้ใช้</span></a></li>
          </ul>
          <?php endif;?>
        </li>
      </ul>
      <!-- /.site-menu -->
    </div>
    <!-- /.site-menubar-inner -->
  </aside>
  <!-- /.site-menubar -->
  <main class="site-main">
    <header class="site-header">
      <div class="breadcrumb">
        <ol class="breadcrumb-tree">
          <li class="breadcrumb-item"><a href="#"><span class="zmdi zmdi-home mr-1"></span> <span>Home</span></a></li>
          <li class="breadcrumb-item active"><a href="#"><?=$title?></a></li>
        </ol>

</div>
<!-- /.breadcrumb -->
</header>
<!-- /.site-header -->
