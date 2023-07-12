<?php $__env->startSection('custom_top_script'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="content">
    <div class="module">
        <div class="module-head">
            <h3>Add Books Category</h3>
        </div>
        <div class="module-body">
            <form class="form-horizontal row-fluid">
                <div class="control-group">
                    <label class="control-label">Category</label>
                    <div class="controls">
                        <input type="text" id="category" data-form-field="category" placeholder="Enter the category of the book here..." class="span8">
                        <input type="hidden"  data-form-field="token"  value="<?php echo e(csrf_token()); ?>">
                    </div>
                </div>

                <div class="control-group">
                    <div class="controls">
                        <button type="button" class="btn btn-inverse" id="addbookcategory">Add Books</button>
                    </div>
                </div>
            </form>
        </div>
    </div>    
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('custom_bottom_script'); ?>

    <script type="text/javascript" src="<?php echo e(asset('static/custom/js/script.addbookcategory.js')); ?>"></script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\new\htdocs\New folder\lib\resources\views/panel/addbookcategory.blade.php ENDPATH**/ ?>