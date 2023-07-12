<?php $__env->startSection('content'); ?>

<div class="wrapper">
	<div class="container">
		<div class="row">
			<div class="module module-login span8 offset2">
				<form class="form-vertical" action="<?php echo e(URL::route('student-registration-post')); ?>" method="POST">
					<div class="module-head">
						<h3>Pendaftaran Siswa</h3>
					</div>
					<div class="module-body">
						<div class="control-group">
							<div class="controls row-fluid">
								<input class="span6" type="text" placeholder="Nama Pertama" name="first" value="<?php echo e(Request::old('first')); ?>" />
								<input class="span6" type="text" placeholder="Nama Akhir" name="last" value="<?php echo e(Request::old('last')); ?>" />

								<?php if($errors->has('first')): ?>
									<?php echo e($errors->first('first')); ?>

								<?php endif; ?>
								<?php if($errors->has('last')): ?>
									<?php echo e($errors->first('last')); ?>

								<?php endif; ?>
							</div>
						</div>
						<div class="control-group">
							<div class="controls row-fluid">
								<input class="span4" type="number" placeholder="Absen" name="rollnumber" value="<?php echo e(Request::old('rollnumber')); ?>" />
								<select class="span4" style="margin-bottom: 0;" name="branch">
									<option value="0">Jurusan</option>
									<?php $__currentLoopData = $branch_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $branch): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				                        <option value="<?php echo e($branch->id); ?>"><?php echo e($branch->branch); ?></option>
				                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								</select>
								<input class="span4" type="number" placeholder="Tahun" name="year" value="<?php echo e(Request::old('year')); ?>" />

								<?php if($errors->has('rollnumber')): ?>
									<?php echo e($errors->first('rollnumber')); ?>

								<?php endif; ?>
								<?php if($errors->has('branch')): ?>
									<?php echo e($errors->first('branch')); ?>

								<?php endif; ?>
								<?php if($errors->has('year')): ?>
									<?php echo e($errors->first('year')); ?>

								<?php endif; ?>

							</div>
						</div>
						<div class="control-group">
							<div class="controls row-fluid">
								<input class="span8" type="email" placeholder="E-mail" name="email" autocomplete="false" value="<?php echo e(Request::old('email')); ?>" />
								<select class="span4" style="margin-bottom: 0;" name="category">
									<option value="0">Kategori</option>
									<?php $__currentLoopData = $student_categories_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student_category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				                        <option value="<?php echo e($student_category->cat_id); ?>"><?php echo e($student_category->category); ?></option>
				                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								</select>

								<?php if($errors->has('email')): ?>
									<?php echo e($errors->first('email')); ?>

								<?php endif; ?>
								<?php if($errors->has('category')): ?>
									<?php echo e($errors->first('category')); ?>

								<?php endif; ?>
							</div>
						</div>
					</div>
					<div class="module-foot">
						<div class="control-group">
							<div class="controls clearfix">
								<button type="submit" class="btn btn-info pull-right">Daftar keanggotaan</button>
								<?php echo csrf_field(); ?>
							</div>
						</div>
						<a href="<?php echo e(URL::route('account-sign-in')); ?>">Go Back!</a>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<?php echo $__env->make('account.style', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('account.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\New folder\New folder\UAS_RPL\resources\views/public/registration.blade.php ENDPATH**/ ?>