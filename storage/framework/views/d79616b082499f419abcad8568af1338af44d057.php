<div class="span3" >
    <div class="sidebar"  >
        <ul class="widget widget-menu unstyled" style="background: #235261">
            <li>
                <a href="<?php echo e(URL::route('home')); ?>">
                    <i class="menu-icon icon-home"></i>Home
                </a>
            </li>
            <li>
                <a href="<?php echo e(URL::route('students-for-approval')); ?>">
                    <i class="menu-icon icon-filter"></i> Akun menunggu konfirmasi
                </a>
            </li>
            <li>
                <a href="<?php echo e(URL::route('registered-students')); ?>">
                    <i class="menu-icon icon-group"></i>Siswa terkonfirmasi
                </a>
            </li>
            <li>
                <a href="<?php echo e(URL::route('all-books')); ?>">
                    <i class="menu-icon icon-th-list"></i>Daftar Buku
                </a>
            </li>
            <li>
                <a href="<?php echo e(URL::route('add-book-category')); ?>">
                    <i class="menu-icon icon-folder-open-alt"></i>Tambahkan Kategori Buku
                </a>
            </li>
            <li>
                <a href="<?php echo e(URL::route('add-books')); ?>">
                    <i class="menu-icon icon-folder-open-alt"></i>Tambahkan Buku
                </a>
            </li>
            <li>
                <a href="<?php echo e(URL::route('settings')); ?>">
                    <i class="menu-icon icon-cog"></i>Tambahkan setting
                </a>
            </li>

            <li>
                <a href="<?php echo e(URL::route('issue-return')); ?>">
                    <i class="menu-icon icon-signout"></i>Peminjaman
                </a>
            </li>
            <li>
                <a href="<?php echo e(URL::route('currently-issued')); ?>">
                    <i class="menu-icon icon-list-ul"></i>Daftar buku terpinjam
                </a>
            </li>
        </ul>

        <ul class="widget widget-menu unstyled">
            <li><a href="<?php echo e(URL::route('account-sign-out')); ?>"><i class="menu-icon icon-wrench"></i>Logout </a></li>
        </ul>
    </div>
</div>
<?php /**PATH C:\New folder\New folder\UAS_RPL\resources\views/layout/template_leftbar.blade.php ENDPATH**/ ?>