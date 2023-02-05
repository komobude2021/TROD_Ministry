

<?php $__env->startSection('title'); ?>
   Contact Us
<?php $__env->stopSection(); ?>

<?php $__env->startSection('additional_script'); ?>
	<?php echo $__env->make('sweetalert::alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="section banner-page" data-background="<?php echo e(asset('images/worship_5.jpg')); ?>">
		<div class="content-wrap pos-relative">

			<div class="d-flex justify-content-center bd-highlight mb-3">
				<div class="title-page">Contact</div>
			</div>

			<div class="d-flex justify-content-center bd-highlight mb-3">
			    <nav aria-label="breadcrumb">
				  <ol class="breadcrumb">
				    <li class="breadcrumb-item"><a href="<?php echo e(route('index')); ?>">Home</a></li>
				    <li class="breadcrumb-item active" aria-current="page">Contact</li>
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
						<?php if($errors->any()): ?>
							<div class="alert alert-danger register-error">
								<ul class="ul-error-list list-none">
								<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<li><i class="fa fa-info-circle"></i> <?php echo e($error); ?></li>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								</ul>
							</div>
						<?php endif; ?>
					</div>

					<div class="col-sm-8 col-md-8">
						<!-- MAPS -->
						<div class="maps-wraper">
						    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2356.9146701028503!2d-1.7742139839853606!3d53.791006249011836!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487be6b78d78e9b1%3A0xb3f4752e486cdd12!2sRio%20Grande!5e0!3m2!1sen!2suk!4v1673559138525!5m2!1sen!2suk" width="90%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
						<div class="spacer-90"></div>
					</div>

					<div class="col-sm-4 col-md-4">
						<h2 class="section-heading">
							Contact Details
						</h2>

						<div class="rs-icon-info">
							<div class="info-icon">
								<i class="fa fa-map-marker"></i>
							</div>

							<div class="info-text">
							    RIO GRANDE, 144 Woodhead Rd,<br/>Bradford, BD7 1PD<br/>(Behind University of Bradford)
							</div>
						</div>

						<div class="rs-icon-info">
							<div class="info-icon">
								<i class="fa fa-envelope"></i>
							</div>
							<div class="info-text">
								hello@therootofdavid.co.uk
							</div>
						</div>

						<div class="rs-icon-info">
							<div class="info-icon">
								<i class="fa fa-phone"></i>
							</div>
							<div class="info-text">
								07534 134056
							</div>
						</div>
					</div>

					<div class="clearfix"></div>

					<div class="col-sm-12 col-md-12">
						<h2 class="section-heading">
							Send a <span>Message</span>
						</h2>


						<div class="content">

							<form action="<?php echo e(route('contactsubmit')); ?>" method="POST" name="form1" id="form1" class="form-contact" autocomplete="off">
								<?php echo csrf_field(); ?>

								<div class="row">
									<div class="col-sm-6 col-md-6" style="padding-top: 20px">
										<div class="form-group">
											<input type="text" class="form-control" name="name" placeholder="Enter Name" value="<?php echo e(old('name')); ?>" required>
										</div>
									</div>

									<div class="col-sm-6 col-md-6" style="padding-top: 20px">
										<div class="form-group">
											<input type="email" class="form-control" name="email" placeholder="Enter Email" value="<?php echo e(old('email')); ?>" required>
										</div>
									</div>
								</div>

								<div class="form-group" style="padding-top: 20px">
									 <textarea name="message" class="form-control" rows="6" placeholder="Enter Your Message" required><?php echo e(old('message')); ?></textarea>
								</div>

								<div class="form-group" style="padding-top: 20px">
									<?php echo NoCaptcha::renderJs(); ?>

									<?php echo NoCaptcha::display(); ?>

							   </div>

								<div class="form-group" style="padding-top: 20px">
									<div id="success"></div>
									<button type="submit" name="submit" class="btn btn-primary"><i class="fa fa-paper-plane"></i> SEND MESSAGE</button>
								</div>

							</form>

							<div class="margin-bottom-50"></div>

						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/theruhmz/public_html/resources/views/contact.blade.php ENDPATH**/ ?>