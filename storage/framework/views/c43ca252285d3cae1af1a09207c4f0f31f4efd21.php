<?php $__env->startSection('custom_top_script'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="content" style="height: 600px;">
    <div class="module">
        <div class="module-head">
            <h3>tambahkan buku/Donasi buku baru</h3>
        </div>
        <div class="module-body">
            <form class="form-horizontal row-fluid">
                <div class="control-group">
                    <label class="control-label">Judul buku</label>
                    <div class="controls">
                        <input type="text" id="title" data-form-field="title" placeholder="Enter the title of the book here..." class="span8">
                        <input type="hidden"  data-form-field="token"  value="<?php echo e(csrf_token()); ?>">
                        <input type="hidden"  data-form-field="auth_user"  value="<?php echo e(auth()->user()->id); ?>">
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label">Nama Pengarang</label>
                    <div class="controls">
                        <input type="text" id="author" data-form-field="author" placeholder="Enter the name of author for the book here..." class="span8">
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="basicinput">Deskripsi Buku</label>
                    <div class="controls">
                        <textarea class="span8" id="description" data-form-field="description" rows="5" placeholder="Enter few lines about the book here"></textarea>
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="basicinput">Kategori</label>
                    <div class="controls">
                        <select tabindex="1" id="category" data-form-field="category" data-placeholder="Select category.." class="span8">
                            <?php $__currentLoopData = $categories_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($category->id); ?>"><?php echo e($category->category); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label">Jumlah buku</label>
                    <div class="controls">
                        <input type="number" id="number" data-form-field="number" placeholder="How many issues are there?" class="span8">
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <button type="button" class="btn btn-inverse" id="addbooks">Tambahkan buku</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('custom_bottom_script'); ?>

    <script type="text/javascript" src="<?php echo e(asset('static/custom/js/script.addbook.js')); ?>"></script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\New folder\New folder\UAS_RPL\resources\views/panel/addbook.blade.php ENDPATH**/ ?>