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
  <div class="row mt-5">
      <div class="col">
          <div class="card ">
              <div class="card-header pb-0 p-3">
                  <div class="d-flex justify-content-between">
                      <h6 class="mb-2">Data</h6>
                  </div>
              </div>
              <div class="table-responsive">
                  <table class="table align-items-center " id="dash">
                      <tbody>
                          <tr>
                              <th class="w-30">
                                  <div class="d-flex px-2 py-1 align-items-center">
                                      <div>
                                        
                                          <img src="../assets/img/icons/flags/US.png" alt="Country flag">
                                      </div>
                                      <div class="ms-4">
                                        <p class="text-xs font-weight-bold mb-0">Sales:</p>
                                          <h6 class="text-sm mb-0">United States</h6>
                                      </div>
                                  </div>
                                </th>
                              <td>
                                  <div class="text-center">
                                      <p class="text-xs font-weight-bold mb-0">Sales:</p>
                                      <h6 class="text-sm mb-0">2500</h6>
                                  </div>
                              </td>
                              <td>
                                  <div class="text-center">
                                      <p class="text-xs font-weight-bold mb-0">Value:</p>
                                      <h6 class="text-sm mb-0">$230,900</h6>
                                  </div>
                              </td>
                              <td class="align-middle text-sm">
                                  <div class="col text-center">
                                      <p class="text-xs font-weight-bold mb-0">Bounce:</p>
                                      <h6 class="text-sm mb-0">29.9%</h6>
                                  </div>
                              </td>
                          </tr>
                          <tr>
                              <td class="w-30">
                                  <div class="d-flex px-2 py-1 align-items-center">
                                      <div>
                                          <img src="../assets/img/icons/flags/DE.png" alt="Country flag">
                                      </div>
                                      <div class="ms-4">
                                          <p class="text-xs font-weight-bold mb-0">Country:</p>
                                          <h6 class="text-sm mb-0">Germany</h6>
                                      </div>
                                  </div>
                              </td>
                              <td>
                                  <div class="text-center">
                                      <p class="text-xs font-weight-bold mb-0">Sales:</p>
                                      <h6 class="text-sm mb-0">3.900</h6>
                                  </div>
                              </td>
                              <td>
                                  <div class="text-center">
                                      <p class="text-xs font-weight-bold mb-0">Value:</p>
                                      <h6 class="text-sm mb-0">$440,000</h6>
                                  </div>
                              </td>
                              <td class="align-middle text-sm">
                                  <div class="col text-center">
                                      <p class="text-xs font-weight-bold mb-0">Bounce:</p>
                                      <h6 class="text-sm mb-0">40.22%</h6>
                                  </div>
                              </td>
                          </tr>
                          <tr>
                              <td class="w-30">
                                  <div class="d-flex px-2 py-1 align-items-center">
                                      <div>
                                          <img src="../assets/img/icons/flags/GB.png" alt="Country flag">
                                      </div>
                                      <div class="ms-4">
                                          <p class="text-xs font-weight-bold mb-0">Country:</p>
                                          <h6 class="text-sm mb-0">Great Britain</h6>
                                      </div>
                                  </div>
                              </td>
                              <td>
                                  <div class="text-center">
                                      <p class="text-xs font-weight-bold mb-0">Sales:</p>
                                      <h6 class="text-sm mb-0">1.400</h6>
                                  </div>
                              </td>
                              <td>
                                  <div class="text-center">
                                      <p class="text-xs font-weight-bold mb-0">Value:</p>
                                      <h6 class="text-sm mb-0">$190,700</h6>
                                  </div>
                              </td>
                              <td class="align-middle text-sm">
                                  <div class="col text-center">
                                      <p class="text-xs font-weight-bold mb-0">Bounce:</p>
                                      <h6 class="text-sm mb-0">23.44%</h6>
                                  </div>
                              </td>
                          </tr>
                          <tr>
                              <td class="w-30">
                                  <div class="d-flex px-2 py-1 align-items-center">
                                      <div>
                                          <img src="../assets/img/icons/flags/BR.png" alt="Country flag">
                                      </div>
                                      <div class="ms-4">
                                          <p class="text-xs font-weight-bold mb-0">Country:</p>
                                          <h6 class="text-sm mb-0">Brasil</h6>
                                      </div>
                                  </div>
                              </td>
                              <td>
                                  <div class="text-center">
                                      <p class="text-xs font-weight-bold mb-0">Sales:</p>
                                      <h6 class="text-sm mb-0">562</h6>
                                  </div>
                              </td>
                              <td>
                                  <div class="text-center">
                                      <p class="text-xs font-weight-bold mb-0">Value:</p>
                                      <h6 class="text-sm mb-0">$143,960</h6>
                                  </div>
                              </td>
                              <td class="align-middle text-sm">
                                  <div class="col text-center">
                                      <p class="text-xs font-weight-bold mb-0">Bounce:</p>
                                      <h6 class="text-sm mb-0">32.14%</h6>
                                  </div>
                              </td>
                          </tr>
                      </tbody>
                  </table>
              </div>
          </div>
      </div>
  </div>
  <footer class="footer pt-3  ">
      <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
              <div class="col-lg-6 mb-lg-0 mb-4">
                  <div class="copyright text-center text-sm text-muted text-lg-start">
                      ©
                      <script>
                          document.write(new Date().getFullYear())
                      </script>
                      
                  </div>
              </div>
              
          </div>
      </div>
  </footer>
</div>
@endsection