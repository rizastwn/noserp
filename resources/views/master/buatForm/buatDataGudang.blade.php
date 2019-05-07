@extends('home')
@section('content')
<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">Tambah Data Gudang</h1>
        </div><!-- /.col -->
    </div><!-- /.row -->
    <br>

    <form action="/datagudang/store" method="get">
    @csrf
        <div class="form-group">
            <label>Kode Gudang: </label>
            <input type="text" required="required" name="KodeLokasi" placeholder="Kode Gudang" class="form-control">
        </div>
        <div class="form-group">
            <label>Nama Gudang: </label>
            <input type="text" required="required" name="NamaLokasi" placeholder="Nama Gudang" class="form-control">
        </div>
        <div class="form-group">
            <label>Tipe: </label>
            <input type="text" required="required" name="Tipe" placeholder="Tipe" class="form-control">
        </div>
        <button class="btn btn-success">Simpan</button>
    </form>

</div><!-- /.container-fluid -->
 
@endsection