

<?php $__env->startSection('title'); ?>
   Privacy
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <style>
        h1 {
            font-size: 34px;
        }
        h2 {
            font-size: 28px;
        }
    </style>

    <div class="section banner-page" data-background="<?php echo e(asset('images/worship_5.jpg')); ?>">
		<div class="content-wrap pos-relative">

			<div class="d-flex justify-content-center bd-highlight mb-3">
				<div class="title-page">Privacy Policy</div>
			</div>

			<div class="d-flex justify-content-center bd-highlight mb-3">
			    <nav aria-label="breadcrumb">
				  <ol class="breadcrumb ">
				    <li class="breadcrumb-item"><a href="<?php echo e(route('index')); ?>">Home</a></li>
				    <li class="breadcrumb-item active" aria-current="page">Privacy</li>
				  </ol>
				</nav>
		  	</div>
		</div>
	</div>


	<div class="section">
		<div class="content-wrap">
			<div class="container">
                <?php echo $__env->make('privacywriteup', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
			</div>
		</div>
	</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/theruhmz/public_html/resources/views/privacy.blade.php ENDPATH**/ ?>