<?php $__env->startSection('custom_top_script'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="content">
    <div class="module">
        <div class="module-head">
            <h3>Buku Tersedia</h3>
        </div>
        <div class="module-body">
<!--             <p>
                <strong>Combined</strong>
                -
                <small>table class="table table-striped table-bordered table-condensed"</small>
            </p> -->
            <div class="controls">
                <select class="" id="category_fill">
                    <?php $__currentLoopData = $categories_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($category->id); ?>"><?php echo e($category->category); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <table class="table table-striped table-bordered table-condensed">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Judul buku</th>
                        <th>Pengaran</th>
                        <th>Deskripsi</th>
                        <th>Kategori</th>
                        <th>Ketersidaan</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody id="all-books">
                    <tr class="text-center">
                        <td colspan="99"> <i class="icon-spinner icon-spin"></i></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <input type="hidden" name="" id="categories_list" value="<?php echo e(json_encode($categories_list)); ?>">
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('custom_bottom_script'); ?>
<script type="text/javascript">
    var categories_list = $('#categories_list').val();
</script>
<script type="text/javascript" src="<?php echo e(asset('static/custom/js/script.addbook.js')); ?>"></script>
<script type="text/template" id="allbooks_show">
    <?php echo $__env->make('underscore.allbooks_show', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\New folder\New folder\UAS_RPL\resources\views/panel/allbook.blade.php ENDPATH**/ ?>