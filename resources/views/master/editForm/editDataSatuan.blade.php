@extends('home')
@section('content')
<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">Edit Data Satuan</h1>
        </div><!-- /.col -->
        <div class="form-group">
                <label>Kode Satuan: </label>
                <input disabled type="text" name="KodeLokasi" placeholder="Kode Gudang" class="form-control">
            </div>
            <div class="form-group">
                <label>Nama Satuan: </label>
                <input type="text" name="NamaLokasi" placeholder="Nama Gudang" class="form-control">
            </div>
            <a href="" class="btn btn-success">Simpan</a>
    </div><!-- /.row -->
</div><!-- /.container-fluid -->
@endsection 