<?php $__env->startSection('custom_top_script'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="content" style="height: 600px;">
    <div class="module">
        <div class="module-head">
            <h3>Siswa terdaftar</h3>
        </div>
        <div class="module-body">
            <div class="controls">
                <select class="span3" id="branch_select">
                    <?php $__currentLoopData = $branch_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $branch): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($branch->id); ?>"><?php echo e($branch->branch); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
                <select class="span3" id="category_select">
                    <option value="0">All Categories</option>
                    <?php $__currentLoopData = $student_categories_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student_category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($student_category->cat_id); ?>"><?php echo e($student_category->category); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
                <select class="span3" id="year_select">
                    <option value="0">Tahun</option>
                    <option>2020</option>
                    <option>2021</option>
                    <option>2022</option>
                    <option>2023</option>
                    <option>2024</option>
                    <option>2025</option>
                    <option>2026</option>
                    <option>2027</option>
                    <option>2028</option>
                    <option>2029</option>
                    <option>2030</option>
                </select>
            </div>
            <table class="table table-striped table-bordered table-condensed">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama pertama</th>
                        <th>Nama akhir</th>
                        <th>Absen</th>
                        <th>Jurusan</th>
                        <th>Kategori</th>
                        <th>Email ID</th>
                        <th>Buku terpinjam</th>
                    </tr>
                </thead>
                <tbody id="students-table">
                    <tr class="text-center">
                        <td colspan="99">Loading...</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <input type="hidden" name="" id="branches_list" value="<?php echo e(json_encode($branch_list)); ?>">
    <input type="hidden" name="" id="student_categories_list" value="<?php echo e(json_encode($student_categories_list)); ?>">
    <input type="hidden" id="_token"  data-form-field="token"  value="<?php echo e(csrf_token()); ?>">

</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('custom_bottom_script'); ?>
<script type="text/javascript">
     var branches_list = $('#branches_list').val(),
        categories_list = $('#student_categories_list').val(),
        _token = $('#_token').val();
</script>
<script type="text/javascript" src="<?php echo e(asset('static/custom/js/script.students.js')); ?>"></script>
<script type="text/template" id="allstudents_show">
    <?php echo $__env->make('underscore.allstudents_show', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\New folder\New folder\UAS_RPL\resources\views/panel/students.blade.php ENDPATH**/ ?>