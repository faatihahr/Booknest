<?php if(Session::has('global')): ?>
	<div class="wrapper">
		<div class="container">
			<div class="row">
				<div class="alert alert-success">
					<button type="button" class="close" data-dismiss="alert">×</button>
					<?php echo e(Session::get('global')); ?>

				</div>
			</div>
		</div>
	</div>
<?php endif; ?>
<?php /**PATH C:\new\htdocs\New folder\lib\resources\views/account/message.blade.php ENDPATH**/ ?>