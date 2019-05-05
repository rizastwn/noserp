@extends('home')
@section('content')
<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">Tambah Data Pelanggan</h1>
        </div><!-- /.col -->
        <div class="form-group">
                <label>Nama Pelanggan: </label>
                <input type="text" name="KodeLokasi" placeholder="Kode Gudang" class="form-control">
            </div>
            <div class="form-group">
                <label>Kontak: </label>
                <input type="text" name="NamaLokasi" placeholder="Nama Gudang" class="form-control">
            </div>
            <div class="form-group">
                <label>handphone: </label>
                <input type="text" name="Tipe" placeholder="Tipe" class="form-control">
            </div>
            <div class="form-group">
                <label>Email: </label>
                <input type="text" name="Tipe" placeholder="Tipe" class="form-control">
            </div>
            <div class="form-group">
                <label>Alamat: </label>
                <input type="text" name="Tipe" placeholder="Tipe" class="form-control">
            </div>
            <div class="form-group">
                <label>Kota: </label>
                <input type="text" name="Tipe" placeholder="Tipe" class="form-control">
            </div>
            <div class="form-group">
                <label>Provinsi: </label>
                <input type="text" name="Tipe" placeholder="Tipe" class="form-control">
            </div>
            <div class="form-group">
                <label>Faks: </label>
                <input type="text" name="Tipe" placeholder="Tipe" class="form-control">
            </div>
            <div class="form-group">
                <label>Telepon: </label>
                <input type="text" name="Tipe" placeholder="Tipe" class="form-control">
            </div>
            <a href="" class="btn btn-success">Simpan</a>
    </div><!-- /.row -->
</div><!-- /.container-fluid -->
@endsection