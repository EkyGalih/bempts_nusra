<!DOCTYPE html>
<html>
<head>
	<title><?php echo $__env->yieldContent('judul'); ?></title>
  <link rel="shortcut icons" href="<?php echo e(asset('images/BemPtsNusra.png')); ?>">
	<link rel="stylesheet" href="<?php echo e(asset('css/materialize.min.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('css/icons.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('css/inconsolata.css')); ?>">
</head>
<body>
  <!-- navbar -->
  <div class="navbar-fixed">
    <nav>
      <a href="" class="brand-logo">
        Bem Pts Nusra
      </a>
      <!-- Dropdown menu divisi -->
      <ul class="dropdown-content" id="dropdown1">
        <li><a href="error!">DEPARTEMEN PEMBERDAYAAN PEREMPUAN</a></li>
        <li><a href="error!">DEPARTEMEN KEBIJAKAN PERGURUAN TINGGI</a></li>
        <li><a href="error!">DEPARTEMEN KEPEMUDAAN</a></li>
        <li><a href="error!">DEPARTEMEN MEDIA DAN INFORMASI</a></li>
        <li><a href="error!">DEPARTEMEN ADVOKASI DAN MASYARAKAT</a></li>
        <li><a href="error!">DEPARTEMEN PENGEMBANGAN SUMBER DAYA MANUSIA</a></li>
      </ul>
      <ul class="dropdown-content" id="dropdown2">
        <li><a href="error!">DEPARTEMEN PEMBERDAYAAN PEREMPUAN</a></li>
        <li><a href="error!">DEPARTEMEN KEBIJAKAN PERGURUAN TINGGI</a></li>
        <li><a href="error!">DEPARTEMEN KEPEMUDAAN</a></li>
        <li><a href="error!">DEPARTEMEN MEDIA DAN INFORMASI</a></li>
        <li><a href="error!">DEPARTEMEN ADVOKASI DAN MASYARAKAT</a></li>
        <li><a href="error!">DEPARTEMEN PENGEMBANGAN SUMBER DAYA MANUSIA</a></li>
      </ul>
      <!-- end dropdown divisi -->

      <!-- dropdown profil -->
      <ul class="dropdown-content" id="dropdown_profil">
        <li><a href="error#!">HISTORY</a></li>
        <li><a href="<?php echo e(URL::to('tujuan')); ?>">VISI & MISI</a></li>
        <li><a href="error#!">STRUKTURAL</a></li>
      </ul>
      <ul class="dropdown-content" id="dropdown_profil2">
        <li><a href="error#!">HISTORY</a></li>
        <li><a href="<?php echo e(URL::to('tujuan')); ?>">VISI & MISI</a></li>
        <li><a href="error#!">STRUKTURAL</a></li>
      </ul>
      <!-- end dropdown profil -->

      <!-- dropdown korda -->
      <ul class="dropdown-content" id="dropdown_korda">
        <li><a href="error#!">KORDA NTT</a></li>
        <li><a href="error#!">KORDA BIMA,KAB.BIMA & DOMPU</a></li>
        <li><a href="error#!">KORDA KAB.SUMBAWA BESAR & KAB.SUMBAWA BARAT </a></li>
        <li><a href="error#!">KORDA LOMBOK TIMUR & LOMBOK UTARA</a></li>
        <li><a href="error#!">KORDA MATARAM,LOMBOK BARAT,LOMBOK TENGAH</a></li>
      </ul>
      <ul class="dropdown-content" id="dropdown_korda2">
        <li><a href="error#!">KORDA NTT</a></li>
        <li><a href="error#!">KORDA BIMA,KAB.BIMA & DOMPU</a></li>
        <li><a href="error#!">KORDA KAB.SUMBAWA BESAR & KAB.SUMBAWA BARAT </a></li>
        <li><a href="error#!">KORDA LOMBOK TIMUR & LOMBOK UTARA</a></li>
        <li><a href="error#!">KORDA MATARAM,LOMBOK BARAT,LOMBOK TENGAH</a></li>
      </ul>
      <!-- end dropdown korda -->

      <!-- end dropdown menu option -->
      <ul id="nav-mobile" class="right hide-on-med-and-down"> 
        <li><a href="<?php echo e(URL::to('home')); ?>">BERANDA</a></li>
        <li>
          <a class="dropdown-button" href="error" data-activates="dropdown_profil">
            PROFIL<i class="mdi-navigation-arrow-drop-down right"></i>
          </a>
        </li>
        <li>
          <a class="dropdown-button" href="error" data-activates="dropdown_korda">
            KORDA<i class="mdi-navigation-arrow-drop-down right"></i>
          </a>
        </li>
        <li>
          <a class="dropdown-button" href="#!">AGENDA</a>
        </li>
        <li>
          <a class="dropdown-button" href="#!">ARTIKEL</a>
        </li>
        <li>
          <a class="dropdown-button" href="#!">BERTIA TERKINI</a>
        </li>
        <li><a href="<?php echo e(URL::to('about')); ?>">TENTANG</a></li>
      </ul>
      <ul id="slide-out" class="side-nav">
        <li><a href="<?php echo e(URL::to('home')); ?>">BERANDA</a></li>
        <li>
          <a class="dropdown-button" href="#!" data-activates="dropdown_profil2">
            PROFIL<i class="mdi-navigation-arrow-drop-down right"></i>
          </a>
        </li>
        <li>
          <a class="dropdown-button" href="#!" data-activates="dropdown_korda2">
            KORDA<i class="mdi-navigation-arrow-drop-down right"></i>
          </a>
        </li>
        <li>
          <a class="dropdown-button" href="#!">AGENDA</a>
        </li>
        <li>
          <a class="dropdown-button" href="#!">ARTIKEL</a>
        </li>
        li>
        <a class="dropdown-button" href="#!">BERITA TERKINI</a>
      </li>
      <li><a href="<?php echo e(URL::to('about')); ?>">TENTANG</a></li>
    </ul>
    <a href="#" data-activates="slide-out" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
  </nav>
</div>
<!-- end navbar -->

<!-- content -->
<div class="container">
  <?php echo $__env->yieldContent('content'); ?>
</div>
<!-- end content -->

<!-- footer -->
<footer class="page-footer">
  <div class="container">
    <div class="row">
      <div class="container">
        <div class="row">
          <div class="col l4 s12">
            <h5 class="white-text">Tetang Kami</h5>
            <hr>
            <p class="grey-text text-lighten-4">Tentang Kami, Tentang Kami, Tentang Kami, Tentang Kami, Tentang Kami, Tentang Kami, Tentang Kami, Tentang Kami, Tentang Kami, Tentang Kami, Tentang Kami, Tentang Kami.</p>
            <form id="paypal-donate" action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
              <input type="hidden" name="cmd" value="_s-xclick">
              <input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
              ">
              <a class="btn waves-effect blue waves-light" href="<?php echo e(URL::to('about')); ?>">Read More
                <i class="material-icons right">trending_flat</i>
              </a>
            </form>

          </div>
          <div class="col l4 s12">
            <h5 class="white-text">Contact Us</h5>
            <hr>
            <p class="grey-text text-lighten-4">
              <h5 class="grey-text text-lighten-4">
                <i class="material-icons">room</i> Mataram, NTB
              </h5>
              <h5 class="grey-text text-lighten-4">
                <i class="material-icons">phone</i> 0123456789
              </h5>
              <h5 class="grey-text text-lighten-4">
                <i class="material-icons">email</i> Email@gmail.com 
              </h5>
            </p>
            <button class="btn waves-effect blue waves-light" type="submit" name="action">Write Message
              <i class="material-icons right">mail</i>
            </button>
          </div>
          <div class="col l4 s12" style="overflow: hidden;">
            <h5 class="white-text">Conect</h5>
            <hr>
            <br>
            <a href="https://www.facebook.com/groups/183712671974057/" target="_blank">
              <img src="<?php echo e(asset('images/facebookIcon.png')); ?>" width="200px" height="60px">
            </a>
            <iframe id="twitter-widget-0" scrolling="no" frameborder="0" allowtransparency="true" class="twitter-follow-button twitter-follow-button-rendered" title="Twitter Follow Button" src="http://platform.twitter.com/widgets/follow_button.6a78875565a912489e9aef879c881358.en.html#dnt=true&amp;id=twitter-widget-0&amp;lang=en&amp;screen_name=BemPtsNusra&amp;show_count=true&amp;show_screen_name=true&amp;size=l&amp;time=1456642794589" style="position: static; visibility: visible; width: 281px; height: 28px;" data-screen-name="MaterializeCSS"></iframe>
            <br>
            <div id="___follow_0" style="text-indent: 0px; margin: 0px; padding: 0px; border-style: none; float: none; line-height: normal; font-size: 1px; vertical-align: baseline; display: inline-block; width: 152px; height: 24px; background: transparent;"><iframe frameborder="0" hspace="0" marginheight="0" marginwidth="0" scrolling="no" style="position: static; top: 0px; width: 152px; margin: 0px; border-style: none; left: 0px; visibility: visible; height: 24px;" tabindex="0" vspace="0" width="100%" id="I0_1456642794203" name="I0_1456642794203" src="https://apis.google.com/u/0/_/widget/render/follow?usegapi=1&amp;annotation=bubble&amp;height=24&amp;rel=publisher&amp;origin=http%3A%2F%2Fmaterializecss.com&amp;url=https%3A%2F%2Fplus.google.com%2F108619793845925798422&amp;gsrc=3p&amp;ic=1&amp;jsh=m%3B%2F_%2Fscs%2Fapps-static%2F_%2Fjs%2Fk%3Doz.gapi.id.u44PqDUt2WA.O%2Fm%3D__features__%2Fam%3DAQ%2Frt%3Dj%2Fd%3D1%2Frs%3DAGLTcCPbBf3TIwkSfBEWdQ-xx3JAwwqd_g#_methods=onPlusOne%2C_ready%2C_close%2C_open%2C_resizeMe%2C_renderstart%2Concircled%2Cdrefresh%2Cerefresh%2Conload&amp;id=I0_1456642794203&amp;parent=http%3A%2F%2Fmaterializecss.com&amp;pfname=&amp;rpctoken=91225928" data-gapiattached="true"></iframe></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="footer-copyright">
    <div class="container right-align">
      © 2016 Copyright of Departemen Media dan Komunikasi Pusat
      <a class="grey-text text-lighten-4 left" href="#!">© IBTeam Lombok</a>
    </div>
  </div>
</footer>
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