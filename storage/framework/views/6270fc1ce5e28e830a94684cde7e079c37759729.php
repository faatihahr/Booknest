<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <link rel="shortcut icon" href="">
    <link rel="image_src" href="" />
    <link rel="canonical" href="" />

    <title>BookNest 1.0</title>

    <link type="text/css" href="<?php echo e(asset('static/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">
    <link type="text/css" href="<?php echo e(asset('static/bootstrap/css/bootstrap-responsive.min.css')); ?>" rel="stylesheet">
    <link type="text/css" href="<?php echo e(asset('static/css/theme.css')); ?>" rel="stylesheet">
    <link type="text/css" href="<?php echo e(asset('static/images/icons/css/font-awesome.css')); ?>" rel="stylesheet">
    <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>

    <?php echo $__env->make('common.script_top', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</head>
<body>
    <style>
        .module-head{
            background-color: #235261 ;
            color:#fff;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            text-transform: uppercase;
            font-style: bold;
        }
        .module-head h3{
            color:#fff;
        }

        .widget-menu{
            background: #235261  !important;
            color:#fff;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            text-transform: uppercase;
            font-style: bold;
        }
        .navbar-inner{
            background: #235261  !important;
            color:#fff;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            text-transform: uppercase;
            font-style: bold;
        }
    </style>

    <?php echo $__env->make('layout.template_navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="wrapper">
    <div class="container">
        <div class="row">

            <?php echo $__env->make('layout.template_leftbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <div class="span9">

            <?php echo $__env->make('account.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->yieldContent('content'); ?>

            </div>
        </div>
    </div>
</div>

    <?php echo $__env->make('layout.template_footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<script src="<?php echo e(asset('static/scripts/jquery-1.9.1.min.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('static/scripts/jquery-ui-1.10.1.custom.min.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('static/bootstrap/js/bootstrap.min.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('static/scripts/underscore-min.js')); ?>" type="text/javascript"></script>

<script src="<?php echo e(asset('static/custom/js/script.common.js')); ?>" type="text/javascript"></script>

<?php echo $__env->make('common.script_bottom', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<script type="text/template" id="alert_box">
    <?php echo $__env->make('underscore.alert_box', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</script>

<script>
    $(document).ready(function(){
    $("input").attr("autocomplete", "off");
});
</script>

</body>
</html>
<?php /**PATH C:\New folder\New folder\UAS_RPL\resources\views/layout/index.blade.php ENDPATH**/ ?>