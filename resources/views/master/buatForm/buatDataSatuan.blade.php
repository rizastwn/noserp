@extends('home')
@section('content')
<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">Tambah Data Satuan</h1>
        </div><!-- /.col -->
    </div><!-- /.row -->
    <br> 

    <form action="/datasatuan/store" method="get">
    @csrf
        <div class="form-group">
            <label>Kode Satuan: </label>
            <input type="text" required="required" name="KodeSatuan" placeholder="Kode Satuan" class="form-control">
        </div>
        <div class="form-group">
            <label>Nama Satuan: </label>
            <input type="text" required="required" name="NamaSatuan" placeholder="Nama Satuan" class="form-control">
        </div>
        <button class="btn btn-success">Simpan</button>
    </form>

</div><!-- /.container-fluid -->
 
@endsection

