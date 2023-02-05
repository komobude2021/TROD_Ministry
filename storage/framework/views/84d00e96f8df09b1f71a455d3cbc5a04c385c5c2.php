

<?php $__env->startSection('additional_links'); ?>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
	<div class="mr-auto">
		<h1 class="separator">Sermons & Messages</h1>
		<nav class="breadcrumb-wrapper" aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i></a></li>
				<li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
				<li class="breadcrumb-item active" aria-current="page">Sermons</li>
			</ol>
		</nav>
	</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
	<div class="row">
		<div class="col-12">
			<div class="card">

				<h5 class="card-header"></h5>
				<div class="card-body" style="padding-bottom: 50px">
					<div id="bs4-table_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
						<div class="row" style="padding-bottom: 40px">

							<div class="col-sm-12 col-md-12">
								<?php if($errors->any()): ?>
									<div class="alert alert-danger login-errors">
										<ul class="ul-error-list">
											<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
												<li><?php echo e($error); ?></li>
											<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
										</ul>
									</div>
								<?php endif; ?>
							</div>

							<div class="col-md-12" style="padding-bottom: 25px">
								<h1>Edit Sermon/Message</h1>
								<hr style="border-top: 1px solid #e5e5e5"/>
							</div>

							<div class="col-md-12">

								<form name="form1" id="form1" method="POST" action="" autocomplete="off" enctype="multipart/form-data">
									<?php echo csrf_field(); ?>

									<div class="form-row">
									  <div class="form-group col-md-6">
										<label>Title</label>
										<input type="text" name="title" class="form-control" placeholder="Video Title" value="<?php echo e($sermon[0]->title); ?>" required>
									  </div>

									  <div class="form-group col-md-6">
										<label>Embedded Youtube URL</label>
										<input type="text" name="video_url" class="form-control" placeholder="Embed Youtube URL" value="<?php echo e($sermon[0]->video_url); ?>" required>
									  </div>
									</div>


									<div class="form-row">
									  <div class="form-group col-md-6">
										<label>Timer:</label>
										<input type="text" name="timer" class="form-control" placeholder="00:00:00" value="<?php echo e($sermon[0]->timer); ?>" required>
									  </div>

									  <div class="form-group col-md-6">
									  	<div>
											<label>Thumbnail Image: (<b style="color: #900">webp image {600px / 337px} - {Max: 100kb}</b>)</label>
											<input type="file" name="thumbnail_image" class="form-control-file">
										</div>
										<div style="color: #900; font-size: 14px; padding-top: 5px">
											<i class="fa fa-dot-circle-o"></i>
											<a href="<?php echo e(asset('images/service-thumbnail/' . $sermon[0]->thumbnail_url)); ?>" target="_new" style="color: #900">
												Click To View Image - <i class="fa fa-picture-o"></i>
											</a>
										</div>
										<div style="color: #900; font-size: 14px; padding-top: 5px">
											<i class="fa fa-dot-circle-o"></i> New Upload Overrides Previous Upload
										</div>
									  </div>
									</div>


									<div class="form-row">
									  <div class="form-group col-md-12">
										<button type="submit" class="btn btn-primary">Update Sermon/Message</button>
									  </div>
									</div>

								</form>

							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\Desktop\TROD_Website_2\resources\views/admin/sermonedit.blade.php ENDPATH**/ ?>