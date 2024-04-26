@extends('layout')

@section('judul')
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur"
        data-scroll="false">
        <div class="container-fluid py-1 px-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                    <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Pages</a></li>
                    <li class="breadcrumb-item text-sm text-white active" aria-current="page">Produk</li>
                </ol>
                <h6 class="font-weight-bolder text-white mb-0">Tambah Produk</h6>
            </nav>

        </div>
    </nav>
@endsection

@section('isi')
    <div class="container-fluid py-4">
        <div class="col-5">
            <div class="card m-sm-auto">
                <div class="card-body p-3">
                    
    
                    <div class="col">
                        <form class="ms-4" method="POST" action="{{ url('dashboard/pelanggan/tambah') }}">
                            @csrf
                            <div class="form-group">
                                <label for="nama_pelanggan" class="form-control-label">Nama Pelanggan</label>
                                <input class="form-control" type="text" name="nama_pelanggan" id="nama_pelanggan" autofocus required>
                            </div>
                            <div class="form-group">
                                <label for="nomor_telepon" class="form-control-label">Nomor Telepon</label>
                                <input class="form-control" type="number" name="nomor_telepon" id="nomor_telepon" required>
                            </div>
                            <div class="form-group">
                                <label for="example-url-input" class="form-control-label">Alamat</label>
                                <textarea class="form-control" id="alamat" style="height: 100px" name="alamat"></textarea>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Tambah Data</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
<script>
    @if ($errors->any())
                    
                    @foreach ($errors->all() as $error)
                    Swal.fire({
                        icon: "error",
                        title: "Gagal !",
                        text: "{{ $error }}",
                    });
                    @endforeach
                
        @endif
</script>
  
<script>
    @if ($failed = Session::get('failed'))
        Swal.fire({
            icon: "error",
            title: "Gagal !",
            text: "{{ Session::get('failed') }}",
        });
    @endif
</script>
@endsection
