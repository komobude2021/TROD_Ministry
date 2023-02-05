

<?php $__env->startSection('additional_links'); ?>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php $__env->stopSection(); ?>

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
								
								<?php if(session('success')): ?>
									<script>
										Swal.fire({
											icon: 'success',
											title: 'Great...',
											text: '<?php echo e(session('success')); ?>',
											footer: '<span style="color: #900; font-size: 14px">The Root Of David (TROD) | Live Streaming!</span>',
											timer: 4500
										});
									</script>
								<?php endif; ?>
								
								
								<?php if(session('errors')): ?>
									<script>
										Swal.fire({
											icon: 'error',
											title: 'Ooops...',
											text: '<?php echo e(session('errors')); ?>',
											footer: '<span style="color: #900; font-size: 14px">The Root Of David (TROD) | Live Streaming!</span>',
											timer: 4500
										});
									</script>
								<?php endif; ?>

								<table class="table table-striped">
									<thead>
									  <tr>
										<th scope="col" width="4%">#</th>
										<th scope="col" width="32%">Title</th>
										<th scope="col" width="37%">Embedded Link</th>
										<th scope="col" width="10%">Platform</th>
										<th scope="col" width="6%"></th>
										<th scope="col" width="11%"></th>
									  </tr>
									</thead>
									<tbody>
									  <tr>
										<td style="font-weight: bold">1.</td>
										<td><?php echo e(ucwords($live[0]->title)); ?></td>
										<td><?php echo e($live[0]->url); ?></td>
										<td><?php echo e(ucwords($live[0]->platform)); ?></td>
										<td>
											<a href="<?php echo e(route('admin.liveview')); ?>">
												<i class="fa fa-pencil-square-o" style="font-size: 24px; color: red"></i>
											</a>
										</td>
										<td>
											<?php if($live[0]->notification_sent == 0): ?>
												<form name="form1" id="form1" method="POST" action="<?php echo e(route('admin.sendliveviewnotification')); ?>">
													<?php echo csrf_field(); ?>
													<button type="submit" class="btn btn-success btn-sm">
														<i class="fa fa-paper-plane" style="color:#fff"></i> Send Notification
													</button>
												</form>
											<?php else: ?>
												<b style="color:#900">Notification Sent</b>
											<?php endif; ?>
										</td>
									  </tr>
									</tbody>
								  </table>

							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\Desktop\TROD_Website_2\resources\views/admin/liveview.blade.php ENDPATH**/ ?>