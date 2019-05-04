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
                        <i class="fa fa-plus-square">&nbsp;&nbsp;Tambah supplier</i>
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
                            <i class="fa fa-eye green"></i>
                            Lihat
                        </a>    
                        &nbsp; - &nbsp;
                        <a href="#" >
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

            
        </div>
    </div>
@endsection
