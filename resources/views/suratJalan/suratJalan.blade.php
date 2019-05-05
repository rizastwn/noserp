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
 <div class="container">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Surat Jalan</h1>
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </div>

    <div class="card">
      <div class="card-header">
        <form>
          <!-- <button class="btn btn-success">
                    <i class="fas fa-plus">&nbsp;&nbsp;Tambah Data P.O</i>
          </button>-->

          <!-- Contents -->
          <br>
          <div class="form-row">
            <!-- column 1 -->
            <div class="">
              <input
                class="form-control form-control-navbar"
                type="search"
                placeholder="Cari Nomor S.O"
                aria-label="Search"
              >
            </div>
          </div>
          <hr class="style1">
          <div class="form-row">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th scope="col">Nomor S.O</th>
                  <th scope="col">Nama Pelanggan</th>
                  <th scope="col">Tanggal</th>
                  <th scope="col">Gudang</th>
                  <th scope="col">Status</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Besi</td>
                  <td>10</td>
                  <td>Ro.1000</td>
                  <td>Rp.5.000</td>
                  <td>Keterangan</td>
                  <td>
                    <button >Print Surat jalan</button>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </form>
      </div>
    </div>
    <!-- Button trigger modal -->

      
    </div>
  </div>
@endsection