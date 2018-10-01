<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?php echo base_url('gambar/logo.png')?>" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p><?php echo $this->session->userdata("username"); ?></p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- search form --><!--
    <form action="#" method="get" class="sidebar-form">
      
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search...">
        <span class="input-group-btn">
          <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
          </button>
        </span>
      </div>-->
    </form>
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
      <li class="header">FRONT END WEBSITE</li>
      <!--
      <li class="treeview dashboard">
        <a href="<?php echo site_url('dashboard'); ?>">
          <i class="fa fa-dashboard"></i> <span>Dashboard</span>
        </a>
      </li>
      -->
      <li class="treeview artikel">
        <a href="<?php echo site_url('artikel'); ?>">
          <i class="fa fa-file-text-o"></i> <span>Artikel</span>
        </a>
      </li>
      <li class="treeview berita">
        <a href="<?php echo site_url('berita'); ?>">
          <i class="fa fa-newspaper-o"></i> <span>Berita</span>
        </a>
      </li>
      <li class="treeview profil">
        <a href="<?php echo site_url('profil'); ?>">
          <i class="fa fa-user"></i> <span>Profil</span>
        </a>
      </li>
      <li class="treeview ppdb">
        <a href="<?php echo site_url('ppdb'); ?>">
          <i class="fa fa-paperclip"></i> <span>PPDB</span>
        </a>
      </li>
      <li class="treeview fasilitas">
        <a href="<?php echo site_url('fasilitas'); ?>">
          <i class="fa fa-wrench"></i> <span>Fasilitas</span>
        </a>
      </li>
      <li class="treeview kesiswaan">
        <a href="<?php echo site_url('kesiswaan'); ?>">
          <i class="fa fa-user-md"></i> <span>Kesiswaan</span>
        </a>
      </li>
      <li class="treeview kurikulum">
        <a href="<?php echo site_url('kurikulum'); ?>">
          <i class="fa fa-book"></i> <span>Kurikulum</span>
        </a>
      </li>
      <li class="treeview galeri">
        <a href="<?php echo site_url('galeri'); ?>">
          <i class="fa fa-image"></i> <span>Galeri</span>
        </a>
      </li>
      <li class="treeview users">
        <a href="<?php echo site_url('users'); ?>">
          <i class="fa fa-key"></i> <span>Users</span>
        </a>
      </li>
      <li class="treeview master">
          <a href="#">
            <i class="fa fa-cog"></i>
            <span>Pengaturan Tampilan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="link">
            <a href="<?php echo base_url('link'); ?>"><i class="fa fa-circle-o"></i> Link Terkait</a></li>
          </ul>
          <ul class="treeview-menu">
            <li class="element">
            <a href="<?php echo base_url('element'); ?>"><i class="fa fa-circle-o"></i> Element Gambar</a></li>
          </ul>
          <ul class="treeview-menu">
            <li class="elementteks">
            <a href="<?php echo base_url('elementteks'); ?>"><i class="fa fa-circle-o"></i> Element Teks</a></li>
          </ul>
          <ul class="treeview-menu">
            <li class="sekolah">
            <a href="<?php echo base_url('sekolah'); ?>"><i class="fa fa-circle-o"></i> Profil Sekolah</a></li>
          </ul>
          <ul class="treeview-menu">
            <li class="slideshow">
            <a href="<?php echo base_url('slideshow'); ?>"><i class="fa fa-circle-o"></i> Slideshow</a></li>
          </ul>
        </li>
      
      
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->