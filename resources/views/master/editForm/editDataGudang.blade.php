@extends('home')
@section('content')
<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">Edit Data Gudang</h1>
        </div><!-- /.col -->
        <div class="form-group">
                <label>Kode Gudang: </label>
                <input disabled type="text" name="KodeLokasi" placeholder="Kode Gudang" class="form-control">
            </div>
            <div class="form-group">
                <label>Nama Gudang: </label>
                <input type="text" name="NamaLokasi" placeholder="Nama Gudang" class="form-control">
            </div>
            <div class="form-group">
                <label>Tipe: </label>
                <input type="text" name="Tipe" placeholder="Tipe" class="form-control">
            </div>
            <a href="" class="btn btn-success">Simpan</a>
    </div><!-- /.row -->
</div><!-- /.container-fluid -->
 
@endsection