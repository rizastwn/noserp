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
                <h1 class="m-0 text-dark">Data Supplier</h1>
            </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
        </div>
            <div class="card">
              <div class="card-header">
                    <button class="btn btn-success" >
<<<<<<< HEAD
                        <i class="fa fa-plus-square">&nbsp;&nbsp;Tambah supplier</i>
                    </button>
                <div class="card-tools">
                  <div >
                    <input type="text" class="form-control float-right"  placeholder="Filter">
=======
                        <i class="fas fa-plus-square">&nbsp;&nbsp;Tambah supplier</i>
                    </button>
                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" v-model="filter" class="form-control float-right"  placeholder="Filter">
>>>>>>> 2261e1be3a9bce2015a1ba32c2d0aa56b0ae2206
                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default" ><i class="fa fa-search"></i></button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                  <tbody>
                  <tr>
                    <th >Kode Supplier</th>
                    <th >Nama Supplier</th>
                    <th >Alamat</th>
                    <th >Telepon</th>
                    <th >Handphone</th>
                  </tr>

                  <tr v-for='supplier in supplier.data' :key='supplier.KodeSupplier'>
                    <td></td>
                    <td></td>
                    <td></td>
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
                    <h5 class="modal-title">Tambah Supplier</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form > 
                    <div class="modal-body">
                        <div class="form-group-row">
                            <div class="form-group">
                                <label>Kode Supplier: </label>
                                <input disabled v-model="form.KodeSupplier" type="text" name="KodeSupplier" placeholder="Kode Supplier" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Nama Supplier: </label>
                                <input disabled v-model="form.NamaSupplier" type="text" name="NamaSupplier" placeholder="Nama Supplier" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Alamat: </label>
                                <input disabled v-model="form.Alamat" type="text" name="Alamat" placeholder="Alamat" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Telepon: </label>
                                <input disabled v-model="form.Telepon" type="text" name="Telepon" placeholder="Telepon" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Handphone: </label>
                                <input disabled v-model="form.Handphone" type="text" name="Handphone" placeholder="Handphone" class="form-control">
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
                    <h5 v-show="!modal_change" class="modal-title">Tambah Supplier</h5>
                    <h5 v-show="modal_change" class="modal-title">Ubah Supplier</h5>
                    <button class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form > <!-- prevent will prevent page refresh -->
                    <div class="modal-body">
                        <div class="form-group-row">
                            <div class="form-group">
                                <label v-show="modal_change">Kode Supplier: </label>
                                <input v-model="form.KodeSupplier" type="text" name="KodeSupplier" placeholder="Kode Supplier" 
                                    class="form-control" :class="{ 'is-invalid': form.errors.has('KodeSupplier') }">
                                <has-error :form="form" field="KodeSupplier"></has-error>
                            </div>
                            <div class="form-group">
                                <label v-show="modal_change">Nama Supplier: </label>
                                <input v-model="form.NamaSupplier" type="text" name="NamaSupplier" placeholder="Nama Supplier" 
                                    class="form-control" :class="{ 'is-invalid': form.errors.has('NamaSupplier') }">
                                <has-error :form="form" field="NamaSupplier"></has-error>
                            </div>
                            <div class="form-group">
                                <label v-show="modal_change">Alamat: </label>
                                <input v-model="form.Alamat" type="text" name="Alamat" placeholder="Alamat" 
                                    class="form-control" :class="{ 'is-invalid': form.errors.has('Alamat') }">
                                <has-error :form="form" field="Alamat"></has-error>
                            </div>
                            <div class="form-group">
                                <label v-show="modal_change">Telepon: </label>
                                <input v-model="form.Telepon" type="text" name="Telepon" placeholder="Telepon" 
                                    class="form-control" :class="{ 'is-invalid': form.errors.has('Telepon') }">
                                <has-error :form="form" field="Telepon"></has-error>
                            </div>
                            <div class="form-group">
                                <label v-show="modal_change">Handphone: </label>
                                <input v-model="form.Handphone" type="text" name="Handphone" placeholder="Handphone" 
                                    class="form-control" :class="{ 'is-invalid': form.errors.has('Handphone') }">
                                <has-error :form="form" field="Handphone"></has-error>
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
