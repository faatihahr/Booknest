<script type="text/javascript">
    var config = {};
    config.path = {};
    config.path.tpl = "<?php echo e(Config::get('app.url') . Config::get('view.custom.tpl')); ?>";
    config.path.ajax = "<?php echo e(Config::get('app.url')); ?>";    
</script>

<?php echo $__env->yieldContent('custom_top_script'); ?><?php /**PATH C:\new\htdocs\New folder\lib\resources\views/common/script_top.blade.php ENDPATH**/ ?>