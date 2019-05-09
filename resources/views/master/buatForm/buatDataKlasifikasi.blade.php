@extends('home')
@section('content')
<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">Tambah Data Klasifikasi</h1>
        </div><!-- /.col -->
    </div><!-- /.row -->
    <br>

    <form action="/dataklasifikasi/store" method="get">
    @csrf
        <div class="form-group">
            <label>Kode Klasifikasi: </label>
            <input type="text" name="KodeKategori" required="required" placeholder="Kode Klasifikasi" class="form-control">
        </div>
        <div class="form-group">
            <label>Nama Klasifikasi : </label>
            <input type="text" name="NamaKategori" required="required" placeholder="Nama Klasifikasi" class="form-control">
        </div>
        <div class="form-group">
            <label>Kode Item: </label>
            <input type="text" name="KodeItemAwal" required="required" placeholder="Kode Item" class="form-control">
        </div>
        <button class="btn btn-success">Simpan</button>
    </form>

</div><!-- /.container-fluid -->
 
@endsection