<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<?php $__env->startSection('custom_top_script'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="content">
    <div class="module">
        <div class="module-head">
            <h3>Tambahkan Setting</h3>
        </div>
        <div class="row">
            <div class="module-body column">
                <h2 style="text-align:center; font-family:'Times New Roman', Times, serif">Jurusan</h2>
                <form class="form-horizontal row-fluid">

                    <div class="control-group">
                        <label class="control-label">Nama Jurusan</label>
                        <div class="controls">
                            <input type="text" id="branch" data-form-field="branch" placeholder="Enter branch here..." class="span12">
                            <input type="hidden"  data-form-field="token"  value="<?php echo e(csrf_token()); ?>">
                        </div>
                    </div>

                    <div class="control-group">
                        <div class="controls">
                            <button type="button" class="btn btn-inverse" id="addBranch">Tambahkan Jurusan</button>
                        </div>
                    </div>
                </form>
                <br>
                <br>
                <br>
                <br>
                <table class="table table-striped" style="margin-left: 30px">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Jurusan</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $branches; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $branch): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <tr>
                           <td><?php echo e($branch->id); ?></td>
                           <td><?php echo e($branch->branch); ?></td>
                           <td><div class="btn btn-group">
                            <a href=""><i class="icon-edit"></i></a>

                                <a href="#" data-toggle="modal" data-target="#deleteBranch<?php echo e($branch->id); ?>"><i class="icon-trash"></i></a>

                        </div></td>
                      </tr>

                        <!-- Modal -->
                        <div class="modal fade" id="deleteBranch<?php echo e($branch->id); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header ">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                <h5 class="modal-title" id="exampleModalLabel">Hapus Jurusan</h5>

                                </div>
                                <div class="modal-body">
                                    <form action="<?php echo e(route('student.destroy', $branch->id)); ?>" method="Post">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('Delete'); ?>
                                        <p>Apakah anda yakin akan menghapus jurusan (<?php echo e($branch->branch); ?>) </p>
                                        <input type="hidden" name="branch" id="branch" value="<?php echo e($branch->branch); ?>">
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">tutup</button>
                                <button type="submit" class="btn btn-danger">hapus</button>
                                </form>
                                </div>
                            </div>
                            </div>
                        </div>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </tbody>
                  </table>

            </div>
            <div class="module-body column">
                <h2 style="text-align:center; font-family:'Times New Roman', Times, serif">Kategori siswa</h2>
                <form class="form-horizontal row-fluid">
                    <div class="control-group">
                        <label class="control-label">kategori siswa</label>
                        <div class="controls">
                            <input type="text" id="student_category" data-form-field="student_category" placeholder="Enter the category of the book here..." class="span12">
                            <input type="hidden"  data-form-field="token"  value="<?php echo e(csrf_token()); ?>">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Max Allow</label>
                        <div class="controls">
                            <input type="number" id="max_allow" data-form-field="max_allowed" placeholder="Enter the max allow value" class="span12">
                        </div>
                    </div>

                    <div class="control-group">
                        <div class="controls">
                            <button type="button" class="btn btn-inverse" id="addStudentCategory">Tambahkan kategori siswa</button>
                        </div>
                    </div>
                </form>
                <br>
                <table class="table table-striped" style="margin-left: 30px">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Category</th>
                        <th scope="col">Total</th>
                        <th scope="col">tindakan</th>

                      </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $student_category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student_category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <tr>
                           <td><?php echo e($student_category->cat_id); ?></td>
                           <td><?php echo e($student_category->category); ?></td>
                           <td><?php echo e($student_category->max_allowed); ?></td>
                           <td><div class="btn btn-group">
                                <a href=""><i class="icon-edit"></i></a>
                                <a href="#" data-toggle="modal" data-target="#deleteCategory<?php echo e($student_category->cat_id); ?>"><i class="icon-trash"></i></a>
                            </div></td>
                      </tr>
                       <!-- Modal -->
                       <div class="modal fade" id="deleteCategory<?php echo e($student_category->cat_id); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header ">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            <h5 class="modal-title" id="exampleModalLabel">Hapus kategori siswa</h5>

                            </div>
                            <div class="modal-body">
                                <form action="<?php echo e(route('student.destroy', $student_category->cat_id)); ?>" method="Post">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('Delete'); ?>
                                    <p>Apakah anda yakin akan menghapus kategori (<?php echo e($student_category->category); ?>) ? </p>
                                    <input type="hidden" name="category" id="category" value="<?php echo e($student_category->category); ?>">
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">tutup</button>
                            <button type="submit" class="btn btn-danger">hapus</button>
                            </form>
                            </div>
                        </div>
                        </div>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </tbody>
                  </table>
            </div>
          </div>
    </div>
</div>

<style>
.row {
  display: flex;
  flex-direction: row;
  /* flex-wrap: wrap; */
  width: 100%;
}

.column {
  /* display: flex; */
  flex-direction: column;
  flex-basis: 100%;
  flex: 1;
}
.modal-header{
    background: #D02A3A;
    color:#fff !important;
}
.modal-title{
    color:#fff !important;
}
.close{
    color:#fff !important;
}

</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('custom_bottom_script'); ?>

    <script type="text/javascript" src="<?php echo e(asset('static/custom/js/script.settings.js')); ?>"></script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\New folder\New folder\UAS_RPL\resources\views/panel/addsettings.blade.php ENDPATH**/ ?>