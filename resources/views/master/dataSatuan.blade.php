@extends('home')
@section('content')
<style>
  .btn {
    background-color: DodgerBlue;
    border: none;
    color: white;
    padding: 12px 16px;
    font-size: 16px;
    cursor: pointer;
  }

  /* Darker background on mouse-over */
  .btn:hover {
    background-color: RoyalBlue;
  }
</style>
    <div class="container">
        <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Data Satuan</h1>
            </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
        </div>
            <div class="card">
              <div class="card-header">
                    <button >
<<<<<<< HEAD
                        <i class="fa fa-plus-square">&nbsp;&nbsp;Tambah satuan</i>
                    </button>
                <div class="card-tools">
                  <div >
                    <input type="text"  class="form-control float-right"  placeholder="Filter">
=======
                        <i class="fas fa-plus-square">&nbsp;&nbsp;Tambah satuan</i>
                    </button>
                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" v-model="filter" class="form-control float-right"  placeholder="Filter">
>>>>>>> 2261e1be3a9bce2015a1ba32c2d0aa56b0ae2206
                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                  <tbody>
                  <tr>
                    <th>Kode Satuan</th>
                    <th>Nama Satuan</th>
                  </tr>

                  <tr v-for='satuan in satuan.data' :key='satuan.KodeSatuan'>
                    <td></td>
                    <td></td>
                    <td>
                        <a href="#" >
<<<<<<< HEAD
                            <i class="fa fa-eye green"></i>
=======
                            <i class="fas fa-eye green"></i>
>>>>>>> 2261e1be3a9bce2015a1ba32c2d0aa56b0ae2206
                            Lihat
                        </a>    
                        &nbsp; - &nbsp;
                        <a href="#" >
<<<<<<< HEAD
                            <i class="fa fa-edit blue"></i>
=======
                            <i class="fas fa-edit blue"></i>
>>>>>>> 2261e1be3a9bce2015a1ba32c2d0aa56b0ae2206
                            Ubah
                        </a>    
                        &nbsp; - &nbsp;
                        <a href="#" >
<<<<<<< HEAD
                            <i class="fa fa-trash red"></i>
=======
                            <i class="fas fa-trash red"></i>
>>>>>>> 2261e1be3a9bce2015a1ba32c2d0aa56b0ae2206
                            Hapus
                        </a>
                    </td>
                  </tr>
                </tbody></table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                  
              </div>
            </div>
            <!-- /.card -->

            <!-- Read Modal -->
            <div class="modal fade" id="modalRead" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Satuan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form > <!-- prevent will prevent page refresh -->
                    <div class="modal-body">
                        <div class="form-group-row">
                            <div class="form-group">
                                <label>Kode Satuan: </label>
                                <input disabled v-model="form.KodeSatuan" type="text" name="KodeSatuan" placeholder="Kode Satuan" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Nama Satuan: </label>
                                <input disabled v-model="form.NamaSatuan" type="text" name="NamaSatuan" placeholder="Nama Satuan" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </form>
                </div>
            </div>
            </div>

<<<<<<< HEAD
            
=======
            <!-- Create & Update Modal -->
            <div class="modal fade" id="modalData" tabindex="-1" role="dialog" aria-labelledby="createDataTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 v-show="!modal_change" class="modal-title">Tambah Satuan</h5>
                    <h5 v-show="modal_change" class="modal-title">Ubah Satuan</h5>
                    <button class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form @submit.prevent="modal_change ? updateData() : createData()"> <!-- prevent will prevent page refresh -->
                    <div class="modal-body">
                        <div class="form-group-row">
                            <div class="form-group">
                                <label v-show="modal_change">Kode Satuan: </label>
                                <input v-model="form.KodeSatuan" type="text" name="KodeSatuan" placeholder="Kode Satuan" 
                                    class="form-control" :class="{ 'is-invalid': form.errors.has('KodeSatuan') }">
                                <has-error :form="form" field="KodeSatuan"></has-error>
                            </div>
                            <div class="form-group">
                                <label v-show="modal_change">Nama Satuan: </label>
                                <input v-model="form.NamaSatuan" type="text" name="NamaSatuan" placeholder="Nama Satuan" 
                                    class="form-control" :class="{ 'is-invalid': form.errors.has('NamaSatuan') }">
                                <has-error :form="form" field="NamaSatuan"></has-error>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button v-show="!modal_change" type="submit" class="btn btn-primary">Save</button>
                        <button v-show="modal_change" type="submit" class="btn btn-primary">Edit</button>
                    </div>
                </form>
                </div>
            </div>
>>>>>>> 2261e1be3a9bce2015a1ba32c2d0aa56b0ae2206
        </div>
    </div>
@endsection