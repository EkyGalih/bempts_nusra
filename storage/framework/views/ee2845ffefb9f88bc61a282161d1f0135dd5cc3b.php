<?php $__env->startSection('judul'); ?>
Beranda
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="center">
  <img src="<?php echo e(asset('images/BemPtsNusra.png')); ?>">
  <font color="#948D8D">
    <h2>KORDINATOR PUSAT</h2>
    <p>Badan Eksekutif Mahasiswa Perguruan Tinggi Swasta Nusa Tenggara</p>
  </font>
</div>
<div class="row">
	<!-- content 1 -->
	<div class="col l9 m7">
		<div class="col s4 m5">
			<div class="row">
        <div class="card">
          <div class="card-image">
            <img src="images/sample-1.jpg">
            <span class="card-title">Card Title</span>
          </div>
          <div class="card-content">
            <p>I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.</p>
            </div>
            <div class="card-action">
              <a href="#">This is a link</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end content 1 -->

    <!-- content 2 -->
    <div class="col l3 s12">
     <div class="collection">
      <h4 class="collection-header">
       <font color="#ffab40;">Information</font> <i class="material-icons">announcement</i></h4>
       <hr>
       <a href="#!" class="collection-item">info</a>
       <a href="#!" class="collection-item">info</a>
       <a href="#!" class="collection-item">info</a>
       <a href="#!" class="collection-item">info</a>
       <a href="#!" class="collection-item">info</a>
       <a href="#!" class="collection-item">info</a>
       <a href="#!" class="collection-item">info</a>
       <a href="#!" class="collection-item">info</a>
     </div>
   </div>
   <!-- end content 2 -->
 </div>
 <?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>