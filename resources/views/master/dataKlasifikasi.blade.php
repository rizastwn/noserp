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
                <h1 class="m-0 text-dark">Data Klasifikasi</h1>
            </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
        </div> 
            <div class="card">
              <div class="card-header">
<<<<<<< HEAD
                    <button  class="btn btn-success">
                        <i  class="fa fa-plus-square"> Tambah klasifikasi</i>
                    </button>
                <div class="card-tools">
                  <div >
                    <input type="text"  class="form-control float-right"  placeholder="Filter">
                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default" ><i class="fa fa-search"></i></button>
=======
                    <button class="btn btn-success" @click="createModal">
                        <i class="fas fa-plus-square">&nbsp;&nbsp;Tambah klasifikasi</i>
                    </button>
                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" v-model="filter" class="form-control float-right" @keydown="filterResult" placeholder="Filter">
                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default" @click="filterResult"><i class="fa fa-search"></i></button>
>>>>>>> 2261e1be3a9bce2015a1ba32c2d0aa56b0ae2206
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                  <tbody>
                  <tr>
<<<<<<< HEAD
                    <th >Kode Klasifikasi</th>
                    <th >Nama Klasifikasi</th>
                    <th >Kode Item</th>
                  </tr>

                  <tr v-for='klasifikasi in klasifikasi.data' :key='klasifikasi.KodeKategori'>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <a href="#" >
                            <i class="fa fa-eye green"></i>
                            Lihat
                        </a>    
                        &nbsp; - &nbsp;
                        <a href="#">
                            <i class="fa fa-edit blue"></i>
                            Ubah
                        </a>    
                        &nbsp; - &nbsp;
                        <a href="#" >
                            <i class="fa fa-trash red"></i>
=======
                    <th @click="sortBy('KodeKategori')">Kode Klasifikasi</th>
                    <th @click="sortBy('NamaKategori')">Nama Klasifikasi</th>
                    <th @click="sortBy('KodeItem')">Kode Item</th>
                  </tr>

                  <tr v-for='klasifikasi in klasifikasi.data' :key='klasifikasi.KodeKategori'>
                    <td>{{klasifikasi.KodeKategori}}</td>
                    <td>{{klasifikasi.NamaKategori}}</td>
                    <td>{{klasifikasi.KodeItem}}</td>
                    <td>
                        <a href="#" @click="readModal(klasifikasi)">
                            <i class="fas fa-eye green"></i>
                            Lihat
                        </a>    
                        &nbsp; - &nbsp;
                        <a href="#" @click="updateModal(klasifikasi)">
                            <i class="fas fa-edit blue"></i>
                            Ubah
                        </a>    
                        &nbsp; - &nbsp;
                        <a href="#" @click="deleteData(klasifikasi.KodeKategori)">
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
<<<<<<< HEAD
                  
              </div> 
=======
                  <pagination :data="klasifikasi" @pagination-change-page="getResults"></pagination>
              </div>
>>>>>>> 2261e1be3a9bce2015a1ba32c2d0aa56b0ae2206
            </div>
            <!-- /.card -->

            <!-- Read Modal -->
            <div class="modal fade" id="modalRead" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Klasifikasi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form @submit.prevent="readData()"> <!-- prevent will prevent page refresh -->
                    <div class="modal-body">
                        <div class="form-group-row">
                            <div class="form-group">
                                <label>Kode Klasifikasi: </label>
                                <input disabled v-model="form.KodeKategori" type="text" name="KodeKategori" placeholder="Kode Klasifikasi" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Nama Klasifikasi: </label>
                                <input disabled v-model="form.NamaKategori" type="text" name="NamaKategori" placeholder="Nama Klasifikasi" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Kode Item: </label>
                                <input disabled v-model="form.KodeItem" type="text" name="KodeItem" placeholder="Kode Item" class="form-control">
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

            <!-- Create & Update Modal -->
            <div class="modal fade" id="modalData" tabindex="-1" role="dialog" aria-labelledby="createDataTitle" aria-hidden="true">
            <div class="modal-dialog  modal-xl" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 v-show="!modal_change" class="modal-title">Tambah Klasifikasi</h5>
                    <h5 v-show="modal_change" class="modal-title">Ubah Klasifikasi</h5>
                    <button class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form @submit.prevent="modal_change ? updateData() : createData()"> <!-- prevent will prevent page refresh -->
                    <div class="modal-body">
                        <div class="form-group-row">
                            <div class="form-group">
                                <label v-show="modal_change">Kode Klasifikasi: </label>
                                <input v-model="form.KodeKategori" type="text" name="KodeKategori" placeholder="Kode Klasifikasi" 
                                    class="form-control" :class="{ 'is-invalid': form.errors.has('KodeKategori') }">
                                <has-error :form="form" field="KodeKategori"></has-error>
                            </div>
                            <div class="form-group">
                                <label v-show="modal_change">Nama Klasifikasi: </label>
                                <input v-model="form.NamaKategori" type="text" name="NamaKategori" placeholder="Nama Klasifikasi" 
                                    class="form-control" :class="{ 'is-invalid': form.errors.has('NamaKategori') }">
                                <has-error :form="form" field="NamaKategori"></has-error>
                            </div>
                            <div class="form-group">
                                <label v-show="modal_change">Kode Item: </label>
                                <input v-model="form.KodeItem" type="text" name="KodeItem" placeholder="Kode Item" 
                                    class="form-control" :class="{ 'is-invalid': form.errors.has('KodeItem') }">
                                <has-error :form="form" field="KodeItem"></has-error>
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
        </div>
    </div>

@endsection