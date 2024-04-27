@extends('layout')

@section('judul')
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur"
        data-scroll="false">
        <div class="container-fluid py-1 px-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                    <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Pages</a></li>
                    <li class="breadcrumb-item text-sm text-white active" aria-current="page">Pelanggan</li>
                </ol>
                <h6 class="font-weight-bolder text-white mb-0">Update Pelanggan</h6>
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
                        @foreach ($data as $item)
                            
                        <form class="ms-4" method="POST" >
                            @csrf
                            <div class="form-group">
                                <label for="nama" class="form-control-label">Nama Lengkap</label>
                                <input class="form-control" value="{{ $item->nama }}" type="text" name="nama" id="nama" autofocus required>
                            </div>
                            <div class="form-group">
                                <label for="username" class="form-control-label">Username</label>
                                <input class="form-control"  value="{{ $item->username }}" type="text" name="username" id="username" required>
                            </div>
                            <div class="form-group">
                                <label for="example-url-input" class="form-control-label">Email</label>
                                <input class="form-control" type="email" name="email" id="email" required value="{{ $item->email }}">
                            </div>
                            <div class="form-group">
                                <label for="example-url-input" class="form-control-label">Password</label>
                                <input class="form-control" type="password" name="password" id="password" required value="{{ $item->password }}">
                            </div>
                            <div class="form-group">
                                <label for="example-url-input" class="form-control-label">Akses</label>
                                <select name="akses" id="akses" class="form-control">
                                        <option {{ $item->akses=="admin"?"selected":"" }} value="admin">Admin</option>
                                        <option {{ $item->akses=="petugas"?"selected":"" }} value="petugas">Petugas</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Edit Data</button>
                            </div>
                        </form>
                        @endforeach

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
