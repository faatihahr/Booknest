<?php $__env->startSection('content'); ?>

<div class="wrapper">
	<div class="container">
		<div class="row">
			<div class="module module-login span4 offset1">
				<form class="form-vertical" action="<?php echo e(URL::route('account-sign-in-post')); ?>" method="POST">
					<?php echo csrf_field(); ?>
					<div class="module-head">
						<h3>User Administratif Login</h3>
					</div>
					<div class="module-body">
						<div class="control-group">
							<div class="controls row-fluid">
								<input class="span12" type="text" name="username" placeholder="Username" value="<?php echo e(Request::old('login')); ?>" autofocus>
								<?php if($errors->has('user_login')): ?>
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
					</div>
					<div class="module-foot">
						<div class="control-group">
							<div class="controls clearfix">
								<button type="submit" class="btn btn-primary pull-right">Login</button>
								<label class="checkbox">
									<input type="checkbox" name="remember" id="remember"> Remember me
								</label>
							</div>
						</div>
						<a href="<?php echo e(URL::route('account-create')); ?>">New admin sign in</a>
					</div>
				</form>
			</div>
			<div class="module module-login span4 offset2">
				<div class="module-head">
					<h3>Anda Mahasiswa, daftar pengguna baru</h3>
				</div>
				<div class="module-body">
                    <p><a href="<?php echo e(URL::route('student-registration')); ?>"><strong>form Registrasi</strong></a></p>
                    <p><a href="<?php echo e(URL::route('search-book')); ?>"><strong>Cari buku</strong></a></p>
				</div>
			</div>
        </div>
	</div>
</div>
<?php echo $__env->make('account.style', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('account.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\New folder\New folder\UAS_RPL\resources\views/account/signin.blade.php ENDPATH**/ ?>