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
                <h1 class="m-0 text-dark">Data Pelanggan</h1>
            </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
        </div>
            <div class="card">
              <div class="card-header">
                    <button class="btn btn-success" >
                        <i class="fa fa-plus-square"> Tambah pelanggan</i>
                    </button>
                <div class="card-tools">
                  <div >
                    <input type="text" class="form-control float-right"  placeholder="Filter">
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
                    <th>Kode Pelanggan</th>
                    <th>Nama Pelanggan</th>
                    <th>Kontak</th>
                    <th>Handphone</th>
                    <th>Email</th>
                  </tr>

                  <tr >
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <a href="#" >
                       
                            <i class="fa fa-eye green"></i>
                            Lihat
                        </a>    
                        &nbsp; - &nbsp;
                        <a href="#"">
                            <i class="fa fa-edit blue"></i>
                            Ubah
                        </a>    
                        &nbsp; - &nbsp;
                        <a href="#" >
                            <i class="fa fa-trash red"></i>
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
                    <h5 class="modal-title">Lihat Pelanggan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form > 
                    <div class="modal-body">
                        <div class="form-group-row">
                            <div class="form-group">
                                <label>Nama Pelanggan: </label>
<<<<<<< HEAD
                                
                            </div>
                            <div class="form-group">
                                <label>Kontak: </label>
                                
                            </div>
                            <div class="form-group">
                                <label>Handphone: </label>
                                
                            </div>
                            <div class="form-group">
                                <label>Email: </label>
                                
                            </div>
                            <div class="form-group">
                                <label><br>Alamat: </label>
                                
                            </div>
                            <div class="form-group">
                                <label>Kota: </label>
                               
                            </div>
                            <div class="form-group">
                                <label>Provinsi: </label>
                               
                            </div>
                            <div class="form-group">
                                <label>Faks: </label>
                             
                            </div>
                            <div class="form-group">
                                <label>Telepon: </label>
                               
=======
                                <h6>{{form.NamaPelanggan}}</h6>
                            </div>
                            <div class="form-group">
                                <label>Kontak: </label>
                                <h6>{{form.Kontak}}</h6>
                            </div>
                            <div class="form-group">
                                <label>Handphone: </label>
                                <h6>{{form.Handphone}}</h6>
                            </div>
                            <div class="form-group">
                                <label>Email: </label>
                                <h6>{{form.Email}}</h6>
                            </div>
                            <div class="form-group">
                                <label><br>Alamat: </label>
                                <h6>{{form.Alamat}}</h6>
                            </div>
                            <div class="form-group">
                                <label>Kota: </label>
                                <h6>{{form.Kota}}</h6>
                            </div>
                            <div class="form-group">
                                <label>Provinsi: </label>
                                <h6>{{form.Provinsi}}</h6>
                            </div>
                            <div class="form-group">
                                <label>Faks: </label>
                                <h6>{{form.Faks}}</h6>
                            </div>
                            <div class="form-group">
                                <label>Telepon: </label>
                                <h6>{{form.Telepon}}</h6>
>>>>>>> 2261e1be3a9bce2015a1ba32c2d0aa56b0ae2206
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
                    <h5 v-show="!modal_change" class="modal-title">Tambah Pelanggan</h5>
                    <h5 v-show="modal_change" class="modal-title">Ubah Pelanggan</h5>
                    <button class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form > <!-- prevent will prevent page refresh -->
                    <div class="modal-body">
                        <div class="form-group-row">
                            <div class="form-group">
                                <label v-show="modal_change">Kode Pelanggan: </label>
                                <input v-model="form.KodePelanggan" type="text" name="KodePelanggan" placeholder="Kode Pelanggan" 
                                    class="form-control" :class="{ 'is-invalid': form.errors.has('KodePelanggan') }">
                                <has-error :form="form" field="KodePelanggan"></has-error>
                            </div>
                            <div class="form-group">
                                <label v-show="modal_change">Nama Pelanggan: </label>
                                <input v-model="form.NamaPelanggan" type="text" name="NamaPelanggan" placeholder="Nama Pelanggan" 
                                    class="form-control" :class="{ 'is-invalid': form.errors.has('NamaPelanggan') }">
                                <has-error :form="form" field="NamaPelanggan"></has-error>
                            </div>
                            <div class="form-group">
                                <label v-show="modal_change">Kontak: </label>
                                <input v-model="form.Kontak" type="text" name="Kontak" placeholder="Kontak" 
                                    class="form-control" :class="{ 'is-invalid': form.errors.has('Kontak') }">
                                <has-error :form="form" field="Kontak"></has-error>
                            </div>
                            <div class="form-group">
                                <label v-show="modal_change">Handphone: </label>
                                <input v-model="form.Handphone" type="text" name="Handphone" placeholder="Handphone"
                                    class="form-control" :class="{ 'is-invalid': form.errors.has('Handphone') }">
                                <has-error :form="form" field="Handphone"></has-error>
                            </div>
                            <div class="form-group">
                                <label v-show="modal_change">Email: </label>
                                <input v-model="form.Email" type="text" name="Email" placeholder="Email"
                                    class="form-control" :class="{ 'is-invalid': form.errors.has('Email') }">
                                <has-error :form="form" field="Email"></has-error>
                            </div>
                            <div class="form-group">
                                <label v-show="modal_change">Alamat: </label>
                                <input v-model="form.Alamat" type="text" name="Alamat" placeholder="Alamat" 
                                    class="form-control" :class="{ 'is-invalid': form.errors.has('Alamat') }">
                                <has-error :form="form" field="Alamat"></has-error>
                            </div>
                            <div class="form-group">
                                <label v-show="modal_change">Kota: </label>
                                <input v-model="form.Kota" type="text" name="Kota" placeholder="Kota" 
                                    class="form-control" :class="{ 'is-invalid': form.errors.has('Kota') }">
                                <has-error :form="form" field="Kota"></has-error>
                            </div>
                            <div class="form-group">
                                <label v-show="modal_change">Provinsi: </label>
                                <input v-model="form.Provinsi" type="text" name="Provinsi" placeholder="Provinsi"
                                    class="form-control" :class="{ 'is-invalid': form.errors.has('Provinsi') }">
                                <has-error :form="form" field="Provinsi"></has-error>
                            </div>
                            <div class="form-group">
                                <label v-show="modal_change">Faks: </label>
                                <input v-model="form.Faks" type="text" name="Faks" placeholder="Faks"
                                    class="form-control" :class="{ 'is-invalid': form.errors.has('Faks') }">
                                <has-error :form="form" field="Faks"></has-error>
                            </div>
                            <div class="form-group">
                                <label v-show="modal_change">Telepon: </label>
                                <input v-model="form.Telepon" type="text" name="Telepon" placeholder="Telepon"
                                    class="form-control" :class="{ 'is-invalid': form.errors.has('Telepon') }">
                                <has-error :form="form" field="Telepon"></has-error>
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