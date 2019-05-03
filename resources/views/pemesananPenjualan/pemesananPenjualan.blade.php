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
<!-- page content -->
<br><br><br>
<div class="container">
  <div class="content-header">
  <div class="container-fluid">
      <div class="row mb-2">
      <div class="col-sm-6">
          <h1 class="m-0 text-dark">Sales Order</h1>
      </div><!-- /.col -->
      </div><!-- /.row -->
  </div><!-- /.container-fluid -->
  </div>

  <div class="card">
      <div class="card-header">
        <h2>SO-150700005</h2>
          <form>
          <!-- <button class="btn btn-success">
              <i class="fas fa-plus">&nbsp;&nbsp;Tambah Data P.O</i>
          </button> -->

          <!-- Contents -->
          <br>
          <div class="form-row">
              <!-- column 1 -->
              <div class="form-group col-md-3">
                <div class="form-group">
                  <label for="inputPO">Nomor P.O. Customer</label>
                  <select class="form-control" id="inputPO">
                    <option>PO-150700005</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="inputDate">Tanggal</label>
                  <input type="date" class="form-control" id="inputDate">
                </div>
                <div class="form-group">
                  <label for="inputDate2">Tanggal Kirim</label>
                  <input type="date" class="form-control" id="inputDate2">
                </div>
                <div class="form-group">
                  <label for="inputBerlaku">Masa Berlaku</label>
                  <input type="text" class="form-control" id="inputBerlaku" placeholder="/hari">
                </div>
              </div>
              <!-- pembatas -->
              <div class="form-group col-md-1"></div>
              <!-- column 2 -->
              <div class="form-group col-md-4">
                <div class="form-group">
                  <label for="inputMatauang">Mata Uang</label>
                  <select class="form-control" id="inputMatauang" placeholder="Pilih mata uang">
                    <option>Rp</option>
                    <option>USD</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="inputGudang">Gudang</label>
                  <select class="form-control" id="inputGudang">
                    <option>Toko Widodo</option>
                    <option>Toko Dennis</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="inputCustomer">Customer</label>
                  <select class="form-control" id="inputCustomer">
                    <option>Budi</option>
                    <option>Sumarni</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="inputTerm">Term</label>
                  <input type="text" class="form-control" id="inputTerm" placeholder="/hari">
                </div>
              </div>
              <!-- pembatas -->
              <div class="form-group col-md-1"></div>
              <!-- column 3 -->
              <div class="form-group col-md-3">
                <label for="inputKeterangan">Keterangan</label>
                <textarea class="form-control" id="inputKeterangan" rows="5"></textarea>
              </div>
          </div>
          <hr class="style1">
          <div class="form-row">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th scope="col">No.</th>
                  <th scope="col">Nama Barang</th>
                  <th scope="col">Jumlah</th>
                  <th scope="col">Harga Satuan</th>
                  <th scope="col">Diskon</th>
                  <th scope="col">Total</th>
                  <th scope="col">Keterangan</th>
                  <th scope="col"></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Besi</td>
                  <td>10</td>
                  <td>Ro.1000</td>
                  <td>Ro.5.000</td>
                  <td>Rp.5.000</td>
                  <td>Keterangan</td>
                  <td><button class="btn"><i class="fa fa-trash"></i> Hapus</button></td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Baja</td>
                  <td>20</td>
                  <td>Ro.2000</td>
                  <td>Rp.0</td>
                  <td>Rp.40.000</td>
                  <td>Keterangan</td>
                  <td><button class="btn"><i class="fa fa-trash"></i> Hapus</button></td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>Kayu</td>
                  <td>30</td>
                  <td>Ro.3000</td>
                  <td>Rp.0</td>
                  <td>Rp.9000</td>
                  <td>Keterangan</td>
                  <td><button class="btn"><i class="fa fa-trash"></i> Hapus</button></td>
                </tr>
                <tr>
                  <th scope="row">4</th>
                  <td><button class="fa fa-plus"></button></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td><button class="btn"><i class="fa fa-trash"></i> Hapus</button></td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="form-row">
            <div class="form-group col-md-1"></div>
            <div class="form-group col-md-3">
              <br>
              <button type="button" class="btn btn-success">&nbsp;&nbsp;Simpan&nbsp;&nbsp;</button>
            </div>
            <div class="form-group col-md-4"></div>
            <div class="form-group col-md-3">
              <div class="form-group">
                <label for="total">Total</label>
                <input type="text" class="form-control" id="total" placeholder="Rp. 54.000,-" disabled>
              </div>
            </div>
          </div>
        </form>
      </div>
  </div>
</div>
    <div>
  </div>
</div>
<!-- /page content -->
@endsection