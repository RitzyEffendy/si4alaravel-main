@extends('layout.main')
@section('title', 'Mahasiswa')

@section('content')
<!--begin::Row-->
<div class="row">
        <div class="col-12">
        <!-- Default box -->
        <div class="card">
            <div class="card-header">
            <h3 class="card-title">List Mahasiswa</h3>
            <div class="card-tools">
                <button
                type="button"
                class="btn btn-tool"
                data-lte-toggle="card-collapse"
                title="Collapse"
                >
                <i data-lte-icon="expand" class="bi bi-plus-lg"></i>
                <i data-lte-icon="collapse" class="bi bi-dash-lg"></i>
                </button>
                <button
                type="button"
                class="btn btn-tool"
                data-lte-toggle="card-remove"
                title="Remove"
                >
                <i class="bi bi-x-lg"></i>
                </button>
            </div>
            </div>
            <div class="card-body">
                <div>
                    <a href="{{ route ('mahasiswa.index')}}" class="btn btn-primary mb-3">Kembali</a>               
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>NPM</th>
                            <td>{{ $mahasiswa-> npm}}</td>
                        </tr>
                        <tr>
                            <th>Nama</th>
                            <td>{{ $mahasiswa-> nama}}</td>
                        </tr>
                        <tr>
                            <th>Tempat, Tanggal Lahir</th>
                            <td>{{ $mahasiswa->tempat_lahir}}, {{ $mahasiswa->tanggal_lahir}}</td>
                        </tr>
                        <tr>
                            <th>Asal SMA</th>
                            <td>{{ $mahasiswa-> asal_sma}}</td>
                        </tr>
                        <tr>
                            <th>Progam Studi</th>
                            <td>{{ $mahasiswa->prodi->nama}}</td>
                        </tr>
                        <tr>
                            <th>Progam Studi</th>
                            <td>{{ $mahasiswa->prodi->fakultas->nama}}</td>
                        </tr>
                        <tr>       
                            <td colspan="2">
                                <img src="{{ asset('images/'.$mahasiswa->foto) }}" class="img-fluid">    
                            </td>
                        </tr>
                    </table>
                </div>
        </div>
            <!-- /.card-body -->
            <!-- <div class="card-footer">Footer</div> -->
            <!-- /.card-footer-->
        </div>
        <!-- /.card -->
        </div>
    </div>
@endsection