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
                <h1 class="m-0 text-dark">Data Gudang</h1>
            </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
        </div>
            <div class="card">
              <div class="card-header">
                
                <div class="card-tools">
                  <div class="" >
                    <!-- <button class="btn btn-success"> -->
                        <a class="btn btn-success" href="/datagudang/create">
                          <i class="fa fa-plus-square"> Tambah gudang</i>
                        </a>
                    <!-- </button> -->
                    <input type="text" class="form-control float-right"  placeholder="Filter">
                    <button type="submit" class="btn btn-default" ><i class="fa fa-search"></i></button>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                  <tbody>
                  <tr>
                    <th>Kode Gudang</th>
                    <th>Nama Gudang</th>
                    <th>Tipe</th>
                  </tr>

                  @foreach($lokasi as $lok)
                  <tr>
                    <td>{{$lok->KodeLokasi}}</td>
                    <td>{{$lok->NamaLokasi}}</td>
                    <td>{{$lok->Tipe}}</td>
                    <td>
                        <a href="{{ url('/datagudang/show') }}" >
                            <i class="fa fa-eye green"></i>
                            Lihat
                        </a>    
                        &nbsp; - &nbsp;
                        <a href="/datagudang/edit/{{ $lok->KodeLokasi }}" >
                            <i class="fa fa-edit blue"></i>
                            Ubah
                        </a>    
                        &nbsp; - &nbsp;
                        <a href="{{ url('/datagudang/destroy') }}" >
                            <i class="fa fa-trash red"></i>
                            Hapus
                        </a>
                    </td>
                  </tr>
                  @endforeach
                </tbody></table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                  
              </div>
            </div>
            <!-- /.card -->

            
        </div>
    </div>

@endsection