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