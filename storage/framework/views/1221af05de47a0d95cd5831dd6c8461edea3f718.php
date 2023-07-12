<?php $__env->startSection('custom_top_script'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="content" style="height: 600px;">
    <div class="module">
        <div class="module-head">
            <h3>Buku terpinjam</h3>
        </div>
        <div class="module-body">
            <div class="row-fluid">
                <table class="table table-striped table-bordered table-condensed">
                    <thead>
                        <tr>
                            <th>Log ID</th>
                            <th>ID Peminjaman</th>
                            <th>Nama buku</th>
                            <th>ID peminjam</th>
                            <th>Nama</th>
                            <th>tanggal peminjaman</th>
                            <th>Pengembalian</th>
                        </tr>
                    </thead>
                    <tbody id="issue-logs-table">
                        <tr class="text-center">
                            <td colspan="99">Loading...</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('custom_bottom_script'); ?>
<script type="text/javascript" src="<?php echo e(asset('static/custom/js/script.logs.js')); ?>"></script>
<script type="text/template" id="all_logs_display">
    <?php echo $__env->make('underscore.all_logs_display', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\New folder\New folder\UAS_RPL\resources\views/panel/logs.blade.php ENDPATH**/ ?>