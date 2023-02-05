

<?php $__env->startSection('title'); ?>
   Sermon
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="section banner-page" data-background="<?php echo e(asset('images/worship_5.jpg')); ?>">
		<div class="content-wrap pos-relative">
			<div class="d-flex justify-content-center bd-highlight mb-3">
				<div class="title-page">Sermons</div>
			</div>

			<div class="d-flex justify-content-center bd-highlight mb-3">
			    <nav aria-label="breadcrumb">
				  <ol class="breadcrumb ">
				    <li class="breadcrumb-item"><a href="<?php echo e(route('index')); ?>">Home</a></li>
				    <li class="breadcrumb-item active" aria-current="page">Sermons</li>
				  </ol>
				</nav>
		  	</div>

		</div>
	</div>

	<div class="section">
		<div class="content-wrap">
			<div class="container">
				<div class="row">

					<div class="col-md-12">
						<div class="title">
							<span>THE ROOT OF DAVID - TROD</span>
							<i class="fa fa-headphones"></i>
							<h2 style="font-size:28px"><i class="fa fa-headphones"></i> Sermons and <span>Messages</span></h2>
							<hr/>
						</div>
					</div>

                    <div class="col-md-12">
    					<div class="row p40">

							<?php $__currentLoopData = $sermons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sermon): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								
								<div class="col-md-3" style="padding-bottom: 20px">
									<div style="padding-top: 6px; padding-bottom: 6px; border-radius: 12px">
										<a href="<?php echo e(route('sermonview', [$sermon->slug, $sermon->id])); ?>" title="<?php echo e($sermon->title); ?>">
											<img style="border-radius: 12px" src="<?php echo e(asset('images/service-thumbnail/' . $sermon->thumbnail_url)); ?>" alt="">
										</a>
									</div>

									<div style="margin-top: -30px; text-align:right">
										<span class="sermon-timer"><?php echo e($sermon->timer); ?></span>
									</div>

									<div class="sermon-tile">
										<a href="<?php echo e(route('sermonview', [$sermon->slug, $sermon->id])); ?>" style="color: #2e383f !important;" title="<?php echo e($sermon->title); ?>">
											<?php echo e($sermon->title); ?>

										</a>
									</div>

									<div style="padding-top:3px;">
										<p class="card-text" style="font-size:13px; color:#B27522">
											<i class="fa fa-clock-o"></i> <?php echo e(Carbon\Carbon::parse($sermon->created_at)->diffForHumans()); ?>

										</p>
									</div>
								</div>

							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

							<div style="padding-top: 10px">
								<?php echo e($sermons->links()); ?>

							</div>

    					</div>
					</div>

                </div>
			</div>
		</div>
	</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\Desktop\TROD Website\resources\views/sermon.blade.php ENDPATH**/ ?>