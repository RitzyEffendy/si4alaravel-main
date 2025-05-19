@extends('layout.main')
@section('title', 'Mahasiswa')

@section('content')
<!--begin::Header-->
<div class="row">
    <div class="col-12">
        <div class="card card-primary card-outline mb-4">
                  <!--begin::Header-->
                  <div class="card-header"><div class="card-title">Mahasiswa Mahasiswa</div></div>
                  <!--end::Header-->
                  <!--begin::Form-->
                  <form action="{{ route('mahasiswa.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <!--begin::Body-->
                    <div class="card-body">
                      <div class="mb-3">
                        <label for="nama" class="form-label">Nama Mahasiswa</label>
                        <input type="text" class="form-control" name="nama" value="{{ old('nama') }}">
                        @error('nama')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                        </div>
                      <div class="mb-3">
                        <label for="singkatan" class="form-label">Singkatan</label>
                        <input type="text" class="form-control" name="singkatan" value="{{ old('singkatan') }}">
                        @error('singkatan')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                      </div>
                      <div class="mb-3">
                        <label for="jk" class="form-label">Jenis Kelamin</label>
                        <input type="radio" name="jk" value="L" {{ old('jk') == 'L' ? 'checked' : '' }}> Laki-laki
                        <input type="radio" name="jk" value="P" {{ old('jk') == 'P' ? 'checked' : '' }}> Perempuan
                        @error('jk')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                        </div>
                      <div class="mb-3">
                        <label for="wakil_dekan" class="form-label">Nama Wakil Dekan</label>
                        <input type="text" class="form-control" name="wakil_dekan" value="{{ old('wakil_dekan') }}">
                        @error('wakil_dekan')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                      </div>
                    </div>
                    <!--end::Body-->
                    <!--begin::Footer-->
                    <div class="card-footer">
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    <!--end::Footer-->
                  </form>
                  <!--end::Form-->
                </div>
    </div>
</div>
@endsection