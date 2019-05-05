@extends('home')
@section('content')
<div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Edit Data Klasifikasi</h1>
            </div><!-- /.col -->
            <div class="form-group">
                    <label>Kode Klasifikasi: </label>
                    <input type="text" name="KodeLokasi" placeholder="Kode Gudang" class="form-control">
                </div>
                <div class="form-group">
                    <label>Nama Klasifikasi : </label>
                    <input type="text" name="NamaLokasi" placeholder="Nama Gudang" class="form-control">
                </div>
                <div class="form-group">
                    <label>Kode Item: </label>
                    <input type="text" name="Tipe" placeholder="Tipe" class="form-control">
                </div>
                <a href="" class="btn btn-success">Simpan</a>
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->


@endsection