@extends('layout.index')

{{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> --}}
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
@section('custom_top_script')
@stop

@section('content')
<div class="content" style="height: 600px;">
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
                            <input type="hidden"  data-form-field="token"  value="{{ csrf_token() }}">
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
                        @foreach ($branches as $branch)
                      <tr>
                           <td>{{ $branch->id }}</td>
                           <td>{{ $branch->branch }}</td>
                           <td><div class="btn btn-group">
                            <a href=""><i class="icon-edit"></i></a>

                                <a href="#" data-toggle="modal" data-target="#deleteBranch{{ $branch->id }}"><i class="icon-trash"></i></a>

                        </div></td>
                      </tr>

                        <!-- Modal -->
                        <div class="modal fade" id="deleteBranch{{ $branch->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header ">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                <h5 class="modal-title" id="exampleModalLabel">Hapus Jurusan</h5>

                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('student.destroy', $branch->id) }}" method="Post">
                                        @csrf
                                        @method('Delete')
                                        <p>Apakah anda yakin akan menghapus jurusan ({{ $branch->branch }}) </p>
                                        <input type="hidden" name="branch" id="branch" value="{{ $branch->branch }}">
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">tutup</button>
                                <button type="submit" class="btn btn-danger">hapus</button>
                                </form>
                                </div>
                            </div>
                            </div>
                        </div>
                      @endforeach

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
                            <input type="hidden"  data-form-field="token"  value="{{ csrf_token() }}">
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
                        @foreach ($student_category as $student_category)
                      <tr>
                           <td>{{ $student_category->cat_id }}</td>
                           <td>{{ $student_category->category }}</td>
                           <td>{{ $student_category->max_allowed }}</td>
                           <td><div class="btn btn-group">
                                <a href=""><i class="icon-edit"></i></a>
                                <a href="#" data-toggle="modal" data-target="#deleteCategory{{ $student_category->cat_id }}"><i class="icon-trash"></i></a>
                            </div></td>
                      </tr>
                       <!-- Modal -->
                       <div class="modal fade" id="deleteCategory{{ $student_category->cat_id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header ">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            <h5 class="modal-title" id="exampleModalLabel">Hapus kategori siswa</h5>

                            </div>
                            <div class="modal-body">
                                <form action="{{ route('student.destroy', $student_category->cat_id) }}" method="Post">
                                    @csrf
                                    @method('Delete')
                                    <p>Apakah anda yakin akan menghapus kategori ({{ $student_category->category }}) ? </p>
                                    <input type="hidden" name="category" id="category" value="{{ $student_category->category }}">
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">tutup</button>
                            <button type="submit" class="btn btn-danger">hapus</button>
                            </form>
                            </div>
                        </div>
                        </div>
                      @endforeach

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
@stop

@section('custom_bottom_script')

    <script type="text/javascript" src="{{ asset('static/custom/js/script.settings.js') }}"></script>

@stop
