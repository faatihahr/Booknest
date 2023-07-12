<?php $__env->startSection('content'); ?>

<div class="wrapper">
	<div class="container">
		<div class="row">
			<div class="module module-login span4 offset4">
				<form class="form-vertical" action="<?php echo e(URL::route('account-create-post')); ?>" method="POST">
					<?php echo csrf_field(); ?>
					<div class="module-head">
						<h3>Daftar</h3>
					</div>
					<div class="module-body">
						<div class="control-group">
							<div class="controls row-fluid">
								<input class="span12" type="text" placeholder="Username" name="username" value="<?php echo e(Request::old('login')); ?>">
								<?php if($errors->has('login')): ?>
									<?php echo e($errors->first('login')); ?>

								<?php endif; ?>
							</div>
						</div>
						<div class="control-group">
							<div class="controls row-fluid">
								<input class="span12" type="password" name="password" placeholder="Password">
								<?php if($errors->has('password')): ?>
									<?php echo e($errors->first('password')); ?>

								<?php endif; ?>
							</div>
						</div>
						<div class="control-group">
							<div class="controls row-fluid">
								<input class="span12" type="password" name="password_again" placeholder="Confirm Password">
								<?php if($errors->has('password_again')): ?>
									<?php echo e($errors->first('password_again')); ?>

								<?php endif; ?>
							</div>
						</div>
					</div>
					<div class="module-foot">
						<div class="control-group">
							<div class="controls clearfix">
								<button type="submit" class="btn btn-info pull-right">Buat Akun</button>
							</div>
						</div>
						<a href="<?php echo e(URL::route('account-sign-in')); ?>">Sudah memiliki akun?</a>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<?php echo $__env->make('account.style', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('account.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\New folder\New folder\UAS_RPL\resources\views/account/create.blade.php ENDPATH**/ ?>