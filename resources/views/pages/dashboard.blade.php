@extends('layout')

@section('judul')
<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur"
data-scroll="false">
<div class="container-fluid py-1 px-3">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white"
                    href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">Dashboard</li>
        </ol>
        <h6 class="font-weight-bolder text-white mb-0">Dashboard</h6>
    </nav>

</div>
</nav>
@endsection

@section('isi')
<div class="container-fluid py-4">
  <div class="row">
      <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
              <div class="card-body p-3">
                  <div class="row">
                      <div class="col-8">
                          <div class="numbers">
                              <p class="text-sm mb-0 text-uppercase font-weight-bold">Pelanggan</p>
                              <h5 class="font-weight-bolder">
                                  {{ $pelanggans }}
                              </h5>

                          </div>
                      </div>
                      <div class="col-4 text-end">
                          <div
                              class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
                              <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
              <div class="card-body p-3">
                  <div class="row">
                      <div class="col-8">
                          <div class="numbers">
                              <p class="text-sm mb-0 text-uppercase font-weight-bold">User</p>
                              <h5 class="font-weight-bolder">
                                  {{ $admins }}
                              </h5>
                              <p class="mb-0">

                          </div>
                      </div>
                      <div class="col-4 text-end">
                          <div
                              class="icon icon-shape bg-gradient-danger shadow-danger text-center rounded-circle">
                              <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
              <div class="card-body p-3">
                  <div class="row">
                      <div class="col-8">
                          <div class="numbers">
                              <p class="text-sm mb-0 text-uppercase font-weight-bold">Produk</p>
                              <h5 class="font-weight-bolder">
                                  {{ $produks }}
                              </h5>

                          </div>
                      </div>
                      <div class="col-4 text-end">
                          <div
                              class="icon icon-shape bg-gradient-success shadow-success text-center rounded-circle">
                              <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="col-xl-3 col-sm-6">
          <div class="card">
              <div class="card-body p-3">
                  <div class="row">
                      <div class="col-8">
                          <div class="numbers">
                              <p class="text-sm mb-0 text-uppercase font-weight-bold">Penjualan</p>
                              <h5 class="font-weight-bolder">
                                  $103,430
                              </h5>

                          </div>
                      </div>
                      <div class="col-4 text-end">
                          <div
                              class="icon icon-shape bg-gradient-warning shadow-warning text-center rounded-circle">
                              <i class="ni ni-cart text-lg opacity-10" aria-hidden="true"></i>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
@endsection