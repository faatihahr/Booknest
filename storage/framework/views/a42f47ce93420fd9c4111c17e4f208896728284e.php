<div class="navbar navbar-fixed-top" >
    <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                <i class="icon-reorder shaded"></i></a>
                <a class="brand" href="<?php echo e(URL::route('home')); ?>" style="color:#fff;">BookNest</a>
            <div class="nav-collapse collapse navbar-inverse-collapse">
                <ul class="nav pull-right">
                    <li class="nav-user dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="<?php echo e(asset('images/passport-size.jpg')); ?>" class="nav-avatar" /><?php echo e(auth()->user()->username); ?>

                        <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#" target="_blank">Data Diri</a></li>
                            <li class="divider"></li>
                            <li><a href="<?php echo e(URL::route('account-sign-out')); ?>">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\New folder\New folder\UAS_RPL\resources\views/layout/template_navbar.blade.php ENDPATH**/ ?>