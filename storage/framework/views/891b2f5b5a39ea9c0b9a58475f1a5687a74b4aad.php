

<?php $__env->startSection('title'); ?>
   Events
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="section banner-page" data-background="<?php echo e(asset('images/worship_5.jpg')); ?>">

		<div class="content-wrap pos-relative">

			<div class="d-flex justify-content-center bd-highlight mb-3">

				<div class="title-page">Events</div>

			</div>

			<div class="d-flex justify-content-center bd-highlight mb-3">

			    <nav aria-label="breadcrumb">

				  <ol class="breadcrumb ">

				    <li class="breadcrumb-item"><a href="<?php echo e(route('index')); ?>">Home</a></li>

				    <li class="breadcrumb-item active" aria-current="page">Events</li>

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
			            <h2 class="section-heading light" style="margin-bottom: 10px">
                            News & <span style="color:#000">Events</span>
                        </h2>
                        <hr style="border-top:#000 solid 1px; margin-bottom: 0px" />
			        </div>
			    </div>

                <?php if(count($events) <= 0): ?>
                
                <?php else: ?>
                    
                    <?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    
        				<div class="row">
        
                            <div class="col-sm-6 col-md-9">
                                <div style="padding-top:20px">
                                    
                                    <div>
                                        <h2 style="color: #000"><?php echo $event->title; ?></h2>
                                    </div>
                                    
                                    <div>
                                        <?php echo $event->description; ?>
                                    </div>
            
                                    <div class="progress-fundraising progress-lg">
                                        <div>
                                            <div class="total">Time: 
                                                <span style="font-size: 22px;"><b><?php echo e($event->time); ?></b></span>
                                            </div>
                                        </div>
                                        
                                        <div>
                                            <div class="total">Date: 
                                                <span style="font-size: 22px;">
                                                    <b>
                                                        <?php if($event->date == null): ?>
                                                            Every Friday
                                                        <?php else: ?>
                                                            <?php echo e(date('jS F, Y', strtotime($event->date))); ?>
                                                        <?php endif; ?>
                                                    </b>
                                                </span>
                                            </div>
                                        </div>
            
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
            
                                        <div class="detail" style="margin-top: 0px; font-weight:bold;">
                                            <h3><small style="font-weight: bold"><i class="fa fa-map-marker"></i> <?php echo e($event->address); ?></small></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
        
                            <div class="col-sm-6 col-md-3">
                                <div class="img-button" style="padding-top:35px">
                                    <img src="<?php echo e(asset('images/flyer/' . $event->flyer)); ?>" alt="" class="img-thumbnail">
                                    <div class="btn-overlay">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-12" style="padding-top:20px">
                                <hr/>
                            </div>
        
                        </div>
                        
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				<?php endif; ?>

			</div>

		</div>

	</div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\Desktop\TROD_Website_2\resources\views/event.blade.php ENDPATH**/ ?>