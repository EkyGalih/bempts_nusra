<!DOCTYPE html>
<html>
<head>
	<title><?php echo $__env->yieldContent('judul_admin'); ?></title>
	<link rel="stylesheet" href="<?php echo e(asset('css/materialize.min.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(asset('css/icons.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(asset('css/inconsolata.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('css/galih.css')); ?>">
	<!-- <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.min.css')); ?>"> -->
</head>
<body>
	<!-- navbar 1 -->
	<header>
      <nav class="top-nav">
        <div class="container">
          <div class="nav-wrapper"><a class="page-title">Admin Panel</a></div>
        </div>
      </nav>
      <div class="container"><a href="#" data-activates="nav-mobile" class="button-collapse top-nav full hide-on-large-only"><i class="mdi-navigation-menu"></i></a></div>
      <ul id="nav-mobile" class="side-nav fixed" style="width: 240px;">
        <li class="logo"><a id="logo-container" href="http://materializecss.com/" class="brand-logo">
            <img src="<?php echo e(asset('images/BemPtsNusra.png')); ?>" height="80px" width="100px"></a></li>
        <li class="search">
          <div class="search-wrapper card">
            <input id="search"><i class="material-icons">search</i>
            <div class="search-results"></div>
          </div>
        </li>
        <li class="active">
        <a href="<?php echo e(URL::to('beranda')); ?>" class="waves-effect active waves-teal">
          Beranda
        </a>
        </li>
        <li class="no-padding">
          <ul class="collapsible collapsible-accordion">
            <li class="bold active">
            <a class="collapsible-header active waves-effect waves-teal">
              <i class="material-icons">view_agenda</i>Agenda
            </a>
              <div class="collapsible-body" style="display: block;">
                <ul>
                  <li class="active"><a href="<?php echo e(URL::to('agenda')); ?>">List agenda</a></li>
                  <li><a href="<?php echo e(URL::to('add_agenda')); ?>">Tambah Agenda</a></li>
                </ul>
              </div>
            </li>
            <li class="bold active">
            <a class="collapsible-header active waves-effect waves-teal">
              <i class="material-icons">web</i> Artikel
            </a>
              <div class="collapsible-body" style="display: block;">
                <ul>
                  <li class="active"><a href="badges.html">List artikel</a></li>
                  <li><a href="buttons.html">Tambah artikel</a></li>
                </ul>
              </div>
            </li>
            <li class="bold active">
            <a class="collapsible-header active waves-effect waves-teal">
              <i class="material-icons">library_books</i> Berita
            </a>
              <div class="collapsible-body" style="display: block;">
                <ul>
                  <li class="active"><a href="badges.html">List berita</a></li>
                  <li><a href="buttons.html">Tambah berita</a></li>
                </ul>
              </div>
            </li>
            <li class="bold active">
            <a class="collapsible-header active waves-effect waves-teal">
              <i class="material-icons">perm_identity</i> Users
            </a>
              <div class="collapsible-body" style="display: block;">
                <ul>
                  <li class="active"><a href="badges.html">List users</a></li>
                  <li><a href="buttons.html">Tambah users</a></li>
                </ul>
              </div>
            </li>
          </ul>
        </li>
        <!-- <li class="bold"><a href="http://materializecss.com/mobile.html" class="waves-effect waves-teal">Mobile</a></li>
        <li class="bold"><a href="showcase.html" class="waves-effect waves-teal">Showcase</a></li>
       -->
       </ul>
    </header>
	<!-- end navbar1 -->
  <div class="container">
  <?php echo $__env->yieldContent('content_admin'); ?>
</div>

<!-- footer -->
<div class="footer-copyright">
    <div class="container right-align">
      Copyright 2016 © Departemen Media dan Komunikasi Pusat
      <a class="grey-text text-lighten-4" href="#!">© IBTeam Lombok</a>
    </div>
  </div>
<!-- end footer -->

<!-- jquery -->
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <script>
    $(document).ready(function(){
      $('.button-collapse').sideNav();
      $('.dropdown-button').dropdown();
    });
  </script>
</body>
</html>