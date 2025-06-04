@extends('layout.main')
@section('title', 'Fakultas')

@section('content')
<!--begin::Row-->
<div class="row">
        <div class="col-12">
        <!-- Default box -->
        <div class="card">
            <div class="card-header">
            <h3 class="card-title">List Fakultas</h3>
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
                <div class="table-responsive">
                    <a href="{{ route ('fakultas.index')}}" class="btn btn-primary mb-3">Kembali</a>
                    <table class="table table-bordered table-striped">
                        <tbody>
                            <tr>
                                <th>Nama Fakultas</th>
                                <td>{{ $fakultas-> nama}}</td>
                            </tr>
                            <tr>
                                <th>Singkatan</th>
                                <td>{{ $fakultas-> singkatan}}</td>
                            </tr>
                            <tr>
                                <th>Dekan</th>
                                <td>{{ $fakultas->dekan}}</td>
                            </tr>
                            <tr>
                                <th>Wakil Dekan</th>
                                <td>{{ $fakultas-> wakil_dekan}}</td>
                            </tr>
                        </tbody>
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
    <!--end::Row-->
    
@endsection