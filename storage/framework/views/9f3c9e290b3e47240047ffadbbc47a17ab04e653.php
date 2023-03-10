

<?php $__env->startSection('title'); ?>
   Livestream
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="section banner-page" data-background="<?php echo e(asset('images/worship_5.jpg')); ?>">
		<div class="content-wrap pos-relative">
			<div class="d-flex justify-content-center bd-highlight mb-3">
				<div class="title-page">Livestream</div>
			</div>

			<div class="d-flex justify-content-center bd-highlight mb-3">
			    <nav aria-label="breadcrumb">
				  <ol class="breadcrumb ">
				    <li class="breadcrumb-item"><a href="<?php echo e(route('index')); ?>">Home</a></li>
				    <li class="breadcrumb-item active" aria-current="page">Livestream</li>
				  </ol>
				</nav>
		  	</div>

		</div>
	</div>

	<div class="section">

		<div class="content-wrap" style="background-image: url('<?php echo e(asset('images/worship_4.jpg')); ?>'); background-size: cover;">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="title">
							<span>THE ROOT OF DAVID - TROD</span>
							<h2 style="font-size:28px"><i class="fa fa-video-camera" aria-hidden="true"></i> 
								Click To <span>Stream Our Live Programme</span></h2>
						</div>
					</div>

					<div class="col-md-12 p40">

                        <?php if(strtolower($live[0]->platform) == "facebook"): ?>
    						<div class="video-containe" style="text-align: center; background-color:#000">
    						    <iframe src="<?php echo e($live[0]->url); ?>" width="380" height="677" 
    						    style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
    						</div>
						<?php endif; ?>
						
						<?php if(strtolower($live[0]->platform) == "youtube"): ?>
    						<div class="video-container">
    							<iframe src="<?php echo e($live[0]->url); ?>" allow="accelerometer; 
    							autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="" 
    							width="100%" height="615"  frameborder="0"></iframe>
    						</div>
						<?php endif; ?>
						
						<div style="background: rgb(242, 242, 242); border-radius: 12px; padding-left: 15px; padding-right: 15px; margin-top: 12px">
							<div style="word-break: break-word; font-size: 18px; color: #2e383f; font-weight: bold; white-space: normal; padding-top:20px">
							    <?php echo e(strtoupper($live[0]->title)); ?>

							</div> 

							<div style="padding-top:3px; padding-bottom:25px">
								<p class="card-text" style="font-size:14px; color:#B27522">
									<i class="fa fa-clock-o"></i> <?php echo e(ucwords($live[0]->description)); ?>

								</p>
							</div>
						</div>  

					</div>
                </div>
			</div>
		</div>

	</div>
	
<?php $__env->stopSection(); ?>
<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/theruhmz/public_html/resources/views/live.blade.php ENDPATH**/ ?>