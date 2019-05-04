@extends('home')
@section('content')
<div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Tambah Data Gudang</h1>
            </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
        <div class="form-group">
                                <label>Kode Gudang: </label>
                                <input   type="text" name="KodeLokasi" placeholder="Kode Gudang" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Nama Gudang: </label>
                                <input  type="text" name="NamaLokasi" placeholder="Nama Gudang" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Tipe: </label>
                                <input   type="text" name="Tipe" placeholder="Tipe" class="form-control">
                            </div>
                            
        </div>
@endsection