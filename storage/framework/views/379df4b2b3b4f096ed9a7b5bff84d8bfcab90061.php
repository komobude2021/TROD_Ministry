

<?php $__env->startSection('breadcrumb'); ?>
	<div class="mr-auto">
		<h1 class="separator">Live View Streaming</h1>
		<nav class="breadcrumb-wrapper" aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i></a></li>
				<li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
				<li class="breadcrumb-item active" aria-current="page">Live View</li>
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
						<div class="row">
							<div class="col-sm-12 col-md-12">
								
								<form name="form1" id="form1" method="POST" action="<?php echo e(route('admin.liveviewsubmit')); ?>">
									<?php echo csrf_field(); ?>
									<div class="form-group">
									  <label><span style="color: #900"><i class="fa fa-dot-circle-o" style="color: #900"></i> Title:</span></label>
									  <input type="text" class="form-control" name="title" value="<?php echo e(ucwords($live[0]->title)); ?>" required>
									</div>

									<div class="form-group" style="padding-top: 15px">
									  <label><span style="color: #900"><i class="fa fa-dot-circle-o" style="color: #900"></i> Description:</span></label>
									  <textarea name="description" class="form-control" rows="2" required><?php echo e(ucwords($live[0]->description)); ?></textarea>
									</div>

									<div class="form-group" style="padding-top: 15px">
										<label><span style="color: #900"><i class="fa fa-dot-circle-o" style="color: #900"></i> Embedded URL:</span></label>
										<input type="text" name="url" class="form-control" name="title" value="<?php echo e($live[0]->url); ?>" required>
									</div>

									<div class="form-group" style="padding-top: 15px">
										<label><span style="color: #900"><i class="fa fa-dot-circle-o" style="color: #900"></i> Embedded Platform:</label>
										<select name="platform" class="form-control" required>
										  <option value="youtube" 
										  <?php if($live[0]->platform == "youtube"): ?>
											<?php echo e("selected"); ?>
										  <?php endif; ?>
										  >YouTube</option>
										  <option value="facebook"
											<?php if($live[0]->platform == "facebook"): ?>
												<?php echo e("selected"); ?>
											<?php endif; ?>
										  >Facebook</option>
										</select>
									</div>

									<div class="form-group" style="padding-top: 15px">
										<button type="submit" class="btn btn-primary"><i class="fa fa-refresh" style="color:#fff"></i> Update Live Streaming URL</button>
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
<?php echo $__env->make('admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\Desktop\TROD_Website_2\resources\views/admin/editview.blade.php ENDPATH**/ ?>