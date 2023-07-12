<?php $__env->startSection('content'); ?>
<div class="content" style="height: 600px;">
    <div class="btn-controls">
        <div class="btn-box-row row-fluid" >
            <button class="btn-box span12" style="background: #6D919C ; ">
                <b style="color:#fff">Admin Dasboard</b>
            </button>
        </div>

        <div class="btn-box-row row-fluid">
            <button class="btn-box big span4 homepage-form-box" id="findbookbox">
                <i class="icon-list" ></i>
                <b>Cari Buku</b>
            </button>

            <button class="btn-box big span4 homepage-form-box" id="findissuebox">
                <i class="icon-book"></i>
                <b>Cari Buku terpinjam </b>
            </button>

            <button class="btn-box big span4 homepage-form-box" id="findstudentbox">
                <i class="icon-user"></i>
                <b>Cari pengguna</b>
            </button>
        </div>

        <div class="content">
            <div class="module" style="display: none;">
                <div class="module-body">
                    <form class="form-horizontal row-fluid" id="findbookform">
                        <div class="control-group">
                            <label class="control-label">Nama atau penulis buku</label>
                            <div class="controls">
                                <div class="span9">
                                    <textarea class="span12" rows="2"></textarea>
                                </div>
                                <div class="span3">
                                    <a class="btn homepage-form-submit " style="background-color:  #50417a; color:#fff"><i class="icon-search"></i> Cari</a>
                                </div>
                            </div>
                        </div>
                    </form>
                    <hr>
                    <table class="table table-striped table-bordered table-condensed" style="display: none;">
                        <thead>
                            <tr>
                                <th>ID buku</th>
                                <th>Judul Buku</th>
                                <th>Pengarang</th>
                                <th>Deskripsi</th>
                                <th>Kategori</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody id="book-results"></tbody>
                    </table>
                </div>
            </div>

            <div class="module" style="display: none;">
                <div class="module-body">
                    <form class="form-horizontal row-fluid" id="findissueform">
                        <div class="control-group">
                            <label class="control-label">Masukan ID buku</label>
                            <div class="controls">
                                <input type="number" placeholder="" class="span9">
                                <a class="btn homepage-form-submit" style="background-color:  #50417a; color:#fff"><i class="icon-search"></i> Cari</a>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="module-body" id="module-body-results"></div>
            </div>

            <div class="module" style="display: none;">
                <div class="module-body">
                    <form class="form-horizontal row-fluid" id="findstudentform">
                        <div class="control-group">
                            <label class="control-label">Masukan ID siswa</label>
                            <div class="controls">
                                <input type="text" placeholder="" class="span9">
                                <a class="btn homepage-form-submit" style="background-color:  #50417a; color:#fff"><i class="icon-search"></i> Cari</a>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="module-body" id="module-body-results"></div>
            </div>
        </div>
    </div>
    <input type="hidden" name="" id="branches_list" value="<?php echo e(json_encode($branch_list)); ?>">
    <input type="hidden" name="" id="student_categories_list" value="<?php echo e(json_encode($student_categories_list)); ?>">
    <input type="hidden" name="" id="categories_list" value="<?php echo e(json_encode($categories_list)); ?>">
    <input type="hidden" id="_token"  data-form-field="token"  value="<?php echo e(csrf_token()); ?>">

</div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('custom_bottom_script'); ?>
<script type="text/javascript">
        var branches_list = $('#branches_list').val(),
        student_categories_list = $('#student_categories_list').val(),
        categories_list = $('#categories_list').val(),
        _token = $('#_token').val();
</script>

<script type="text/javascript" src="<?php echo e(asset('static/custom/js/script.mainpage.js')); ?>"></script>


<script type="text/template" id="search_book">
    <?php echo $__env->make('underscore.search_book', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</script>
<script type="text/template" id="search_issue">
    <?php echo $__env->make('underscore.search_issue', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</script>
<script type="text/template" id="search_student">
    <?php echo $__env->make('underscore.search_student', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</script>
<script type="text/template" id="approvalstudents_show">
    <?php echo $__env->make('underscore.approvalstudents_show', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\New folder\New folder\UAS_RPL\resources\views/panel/index.blade.php ENDPATH**/ ?>