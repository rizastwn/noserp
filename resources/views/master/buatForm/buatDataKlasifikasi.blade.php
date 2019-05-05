@extends('home')
@section('content')
<div class="container-fluid">
        <div class="form-group">
            <label>Kode Klasfikasi: </label>
            <input disabled type="text" name="KodeLokasi" placeholder="Kode Gudang" class="form-control">
        </div>
        <div class="form-group">
            <label>Nama klasifikasi: </label>
            <input type="text" name="NamaLokasi" placeholder="Nama Gudang" class="form-control">
        </div>
        <div class="form-group">
            <label>Kode Item: </label>
            <input type="text" name="Tipe" placeholder="Tipe" class="form-control">
        </div>
            <a href="" class="btn btn-success">Simpan</a>
</div>
@endsection