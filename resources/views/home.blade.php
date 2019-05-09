<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="images/favicon.ico" type="image/ico" />

  <title>NOS-ERP </title>

  <!-- Bootstrap -->
  <link href="{{ url('vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="{{ url('vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
  <!-- NProgress -->
  <link href="{{ url('vendors/nprogress/nprogress.css') }}" rel="stylesheet">
  <!-- iCheck -->
  <link href="{{ url('vendors/iCheck/skins/flat/green.css') }}" rel="stylesheet">


  <!-- Custom Theme Style -->
  <link href="{{ url('css/custom.min.css') }}" rel="stylesheet">
</head>

<body class="nav-md">
  <div class="container body">
    <div class="main_container">
      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
          <div class="navbar nav_title" style="border: 0;">
            <a href="{{ url('/') }}'" class="site_title"><i class="fa fa-paw"></i> <span>NOS-ERP</span></a>
          </div>

          <div class="clearfix"></div>

          <!-- menu profile quick info -->
          <div class="profile clearfix">
            <div class="profile_pic">
              <img src="{{ url('img/img.jpg') }}" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
              <span>Welcome,</span>
              <h2>John Doe</h2>
            </div>
          </div>

          <!-- sidebar menu -->
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
              <ul class="nav side-menu">
                  <li><a><i class="fa fa-edit"></i> Master <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ url('/datagudang') }}">Data gudang </a></li>
                      <li><a href="{{ url('/dataitem') }}">Data item</a></li>
                      <li><a href="{{ url('/dataklasifikasi') }}">Data klasifikasi</a></li>
                      <li><a href="{{ url('/datamatauang') }}">Data mata uang</a></li>
                      <li><a href="{{ url('/datapelanggan') }}">Data pelanggan</a></li>
                      <li><a href="{{ url('/datasatuan') }}">Data satuan</a></li>
                      <li><a href="{{ url('/datasupplier') }}">Data supplier</a></li>
                    </ul>
                  </li>
                <li><a><i class="fa fa-edit"></i> Penjualan <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a>Pemesanan penjualan<span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href="{{ url('/pemesananPenjualan') }}">S.O Penjualan</a></li>
                        <li><a href="{{ url('/konfirmasipemesananPenjualan') }}">S.O Konfirmasi</a></li>
                        <li><a href="{{ url('/dikirimpemesananPenjualan') }}">S.O Dikirim</a></li>
                        <li><a href="{{ url('/batalpemesananPenjualan') }}">S.O Batal</a></li>
                      </ul>
                    </li>
                    <li><a>Surat jalan<span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                          <li><a href="{{ url('/') }}">Buat Surat Jalan </a></li>
                        <li><a href="{{ url('/suratJalan') }}">Surat Jalan </a></li>
                        <li><a href="{{ url('/konfirmasisuratJalan') }}">Konfirmasi Surat jalan</a></li>
                      </ul>
                    </li>
                    <li><a>Return Surat jalan<span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href="{{ url('/returnSuratJalan') }}">Return Surat Jalan </a></li>
                        <li><a href="{{ url('/konfirmasireturnSuratJalan') }}">Konfirmasi Surat jalan</a></li>
                      </ul>
                    </li>
                    <li><a>Penjualan Langsung<span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href="{{ url('/penjualanLangsung') }}">Penjualan Langsung (kasir)</a></li>
                        <li><a href="{{ url('/returnPenjualanLangsung') }}">Return Penjualan Langsung</a></li>
                      </ul>
                    </li>
                    
                  </ul>
                </li>

                <li><a><i class="fa fa-edit"></i> Pembelian <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a>Pemesanan Pembelian<span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href="{{ url('/pemesananPembelian') }}">P.O Pembelian</a></li>
                        <li><a href="{{ url('/konfirmasipemesananPembelian') }}">P.O Konfirmasi</a></li>
                        <li><a href="{{ url('/diterimapemesananPembelian') }}">P.O Diterima</a></li>
                        <li><a href="{{ url('/batalpemesananPembelian') }}">P.O Batal</a></li>
                      </ul>
                    </li>
                    <li><a>Penerimaan Barang<span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href="{{ url('/penerimaanBarang') }}">Penerimaan Barang </a></li>
                        <li><a href="{{ url('/konfirmasipenerimaanBarang') }}">Penerimaan Barang Konfirmasi</a></li>
                      </ul>
                    </li>
                    <li><a>Return Penerimaan Barang<span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href="{{ url('/returnPenerimaanBarang') }}">Return Penerimaan Barang</a></li>
                        <li><a href="{{ url('/konfirmasireturnPenerimaanBarang') }}">Konfirmasi Return Penerimaan
                            Barang</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
          <!-- /sidebar menu -->

        </div>
      </div>

      <!-- top navigation -->
      <div class="top_nav">
        <div class="nav_menu">
          <nav>
            <div class="nav toggle">
              <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>

            <ul class="nav navbar-nav navbar-right">
              <li class="">
                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown"
                  aria-expanded="false">
                  <img src="images/img.jpg" alt="">John Doe
                  <span class=" fa fa-angle-down"></span>
                </a>
                <ul class="dropdown-menu dropdown-usermenu pull-right">
                  <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                </ul>
              </li>
            </ul>
            </li>
            </ul>
          </nav>
        </div>
      </div>
      <!-- /top navigation -->

      <!-- page content -->

      <div class="right_col">
        @yield('content')
      </div>
      <!-- /page content -->


    </div>
  </div>
  <footer>
    erp-dnz
  </footer>
  <!-- jQuery -->
  <script src="{{ url('vendors/jquery/dist/jquery.min.js') }}"></script>
  <!-- Bootstrap -->
  <script src="{{ url('vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>
  <!-- FastClick -->
  <script src="{{ url('vendors/fastclick/lib/fastclick.js') }}"></script>
  <!-- NProgress -->
  <script src="{{ url('vendors/nprogress/nprogress.js') }}"></script>
  <!-- Chart.js -->
  <script src="{{ url('vendors/Chart.js/dist/Chart.min.js') }}"></script>
  <!-- gauge.js -->
  <script src="{{ url('vendors/gauge.js/dist/gauge.min.js') }}"></script>
  <!-- bootstrap-progressbar -->
  <script src="{{ url('/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js') }}"></script>
  <!-- iCheck -->
  <script src="{{ url('vendors/iCheck/icheck.min.js') }}"></script>
  <!-- Skycons -->
  <script src="{{ url('vendors/skycons/skycons.js') }}"></script>
  <!-- Flot -->
  <script src="{{ url('vendors/Flot/jquery.flot.js') }}"></script>
  <script src="{{ url('vendors/Flot/jquery.flot.pie.js') }}"></script>
  <script src="{{ url('vendors/Flot/jquery.flot.time.js') }}"></script>
  <script src="{{ url('/vendors/Flot/jquery.flot.stack.js') }}"></script>
  <script src="{{ url('vendors/Flot/jquery.flot.resize.js') }}"></script>
  <!-- Flot plugins -->
  <script src="{{ url('vendors/flot.orderbars/js/jquery.flot.orderBars.js') }}"></script>
  <script src="{{ url('vendors/flot-spline/js/jquery.flot.spline.min.js') }}"></script>
  <script src="{{ url('/vendors/flot.curvedlines/curvedLines.js') }}"></script>
  <!-- DateJS -->
  <script src="{{ url('/vendors/DateJS/build/date.js') }}"></script>
  <!-- JQVMap -->
  <script src="{{ url('/vendors/jqvmap/dist/jquery.vmap.js') }}"></script>
  <script src="{{ url('/vendors/jqvmap/dist/maps/jquery.vmap.world.js') }}"></script>
  <script src="{{ url('/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js' ) }}"></script>
  <!-- bootstrap-daterangepicker -->
  <script src="{{ url('/vendors/moment/min/moment.min.js' ) }}"></script>
  <script src="{{ url('/vendors/bootstrap-daterangepicker/daterangepicker.js') }}"></script>

  <!-- Custom Theme Scripts -->
  <script src="{{ url('js/custom.min.js') }}"></script>

</body>

</html>