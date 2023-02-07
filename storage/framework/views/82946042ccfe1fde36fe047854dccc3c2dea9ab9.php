

<?php $__env->startSection('title'); ?>
   Livestream
<?php $__env->stopSection(); ?>

<?php $__env->startSection('additional_script'); ?>
	<style>
		.timer-clock{
			text-align: center;
			padding-left:10px; 
			padding-right:10px
		}
		.timer-days,
		.timer-hours,
		.timer-minutes,
		.timer-seconds {
			line-height: 17px;
			font-weight: 700;
			font-size: 1rem;
			margin-block-start: 2px;
			color: rgb(255, 255, 255);
		}
		.timer-label {
			line-height: 1.25;
			font-size: 0.67rem;
			color: rgb(159, 159, 160);
			white-space: nowrap;
			text-overflow: ellipsis;
			overflow: hidden;
		}
		.jlLvvH {
			color: rgb(236, 236, 236);
			font-size: 0.84rem;
			line-height: 1.25;
		}
		.bmGMcC {
			text-align: center;
			padding: 4px;
			border-radius: 4px;
			background: rgb(45, 45, 46);
			margin-right: 1px;
		}
		.timer-pad {
			padding-left: 5px; 
			padding-right:5px;
		}
		.container-bg {
			background-color: rgb(0, 0, 0); 
			padding-top:10px; 
			padding-bottom: 20px
		}
	</style>
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

		<div class="content-wrap" style="background-image: url('<?php echo e(asset('images/worship_4.jpg')); ?>'); background-size: cover; padding-bottom: 25px">
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

		<?php if( $live[0]->next_event_date != null && (strtotime($live[0]->next_event_date) > time()) ): ?>
			
			<div class="container-fluid container-bg">
				<div class="container">
					<div class="row">
						<div class="col-md-12 jlLvvH">
							<div style="color: #B27522; padding-bottom: 5px">
								Next Live Service:
							</div>
							<div>
								<?php echo e(date("jS F Y, h:i A", strtotime($live[0]->next_event_date))); ?><br/>
								<i class="fa fa-check-square-o"></i> <?php echo e($live[0]->next_event); ?>

							</div>
						</div>
					</div>
		
					<div class="row" style="padding-top:10px;">
						<div class="col-md-4">
			
							<div class="row timer-clock">
								<div class="col-3 timer-pad">
									<div class="bmGMcC">
										<div class="timer-days"></div>
										<div class="timer-label label-days"></div>
									</div>
								</div>
			
								<div class="col-3 timer-pad">
									<div class="bmGMcC">
										<div class="timer-hours"></div>
										<div class="timer-label label-hours"></div>
									</div>
								</div>
			
								<div class="col-3 timer-pad">
									<div class="bmGMcC">
										<div class="timer-minutes"></div>
										<div class="timer-label label-minutes"></div>
									</div>
								</div>
			
								<div class="col-3 timer-pad">
									<div class="bmGMcC">
										<div class="timer-seconds"></div>
										<div class="timer-label label-seconds"></div>
									</div>
								</div>
							</div>
			
						</div>
					</div>
				</div>
			</div>

		<?php endif; ?>

	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            var addedTime = new Date("<?php echo date('Y-m-d H:i:s', strtotime($live[0]->next_event_date)) ?>");
            var endDate = new Date(addedTime);
            
            var timer = setInterval(function() {
                var now = new Date().getTime();
                var remainingTime = (endDate - now) / 1000;
                
                var days = Math.floor(remainingTime / 60 / 60 / 24);
                remainingTime = remainingTime % (60 * 60 * 24);
                
                var hours = Math.floor(remainingTime / 60 / 60);
                remainingTime = remainingTime % (60 * 60);
                
                var minutes = Math.floor(remainingTime / 60);
                remainingTime = remainingTime % 60;
                
                var seconds = Math.floor(remainingTime);
                
                $(".timer-days").text(days.toString().padStart(2, "0"));
                if(days <= 1) {
                    $(".label-days").text("DAYS");
                } else {
                    $(".label-days").text("DAYS");
                }
                

                $(".timer-hours").text(hours.toString().padStart(2, "0"));
                if (hours <= 1) {
                    $(".label-hours").text("HOUR");
                } else {
                    $(".label-hours").text("HOURS");
                }

                $(".timer-minutes").text(minutes.toString().padStart(2, "0"));
                if (minutes <= 1) {
                    $(".label-minutes").text("MINUTE");
                } else {
                    $(".label-minutes").text("MINUTES");
                }

                $(".timer-seconds").text(seconds.toString().padStart(2, "0"));
                if (seconds <= 1) {
                    $(".label-seconds").text("SECOND");
                } else {
                    $(".label-seconds").text("SECONDS");
                }
                
                if (days <= 0 && hours <= 0 && minutes <= 0 && seconds <= 0) {
                    clearInterval(timer);
                }

                if (endDate < now) {
                    $(".timer-clock").text("");
                }

            }, 1000);
        });
    </script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\Desktop\TROD_Website_2\resources\views/live.blade.php ENDPATH**/ ?>