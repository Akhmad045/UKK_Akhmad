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
                <h6 class="font-weight-bolder text-white mb-0">Pelanggan</h6>
            </nav>

        </div>
    </nav>
@endsection

@section('isi')
    <div class="container-fluid py-4">
        <div class="row mt-5">
            <div class="col">
                <div class="d-flex justify-content-end">
                    <a href="{{ url('dashboard/pelanggan/tambah') }}" class="btn btn-light active"><i
                            class="bi bi-person-plus-fill"></i> Tambah Data</a>
                </div>
                <div class="card ">
                    <div class="card-header pb-0 p-3">
                        <div class="d-flex justify-content-between">
                            <h6 class="mb-2">Data Pelanggan</h6>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table align-items-center ">
                            <tbody>
                                @foreach ($data as $item)
                                    <tr>
                                        <th class="w-30">
                                            <div class="d-flex px-2 py-1 align-items-center">
                                                <div>
                                                    {{ $item->id }}
                                                </div>
                                                <div class="ms-4">
                                                    <p class="text-xs font-weight-bold mb-0">Nama Pelanggan</p>
                                                    <h6 class="text-sm mb-0">{{ $item->nama_pelanggan }}</h6>
                                                </div>
                                            </div>
                                        </th>
                                        <td>
                                            <div class="text-center">
                                                <p class="text-xs font-weight-bold mb-0">Nomor Telepon</p>
                                                <h6 class="text-sm mb-0">{{ $item->nomor_telepon }}</h6>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="text-center">
                                                <p class="text-xs font-weight-bold mb-0">Alamat</p>
                                                <h6 class="text-sm mb-0">{{ $item->alamat }}</h6>
                                            </div>
                                        </td>
                                        <td class="align-middle text-sm">
                                            <div class="col text-center">
                                                <p class="text-xs font-weight-bold mb-0">Aksi</p>
                                                <a href="{{ url('dashboard/pelanggan/edit/' . $item->id) }}"><i
                                                        class="bi bi-pencil-square"></i></a>
                                                <a id="delete" href="{{ url('dashboard/pelanggan/hapus/' . $item->id) }}"><i
                                                        class="bi bi-trash"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        @if ($success = Session::get('success'))
            Swal.fire({
                icon: "success",
                title: "Selamat",
                text: "{{ Session::get('success') }}",
            });
        @endif
    </script>
    <script>
        @if ($delete = Session::get('delete'))
            Swal.fire({
                icon: "success",
                title: "Terhapus!",
                text: "{{ Session::get('delete') }}",
            });
        @endif
    </script>
@endsection
