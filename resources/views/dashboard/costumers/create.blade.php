@extends('layouts.app')
@section('title', 'Tambah Data Costumer')

@section('title-header', 'Tambah Data Costumer')
@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="{{ route('costumers.index') }}">Data Costumer</a></li>
    <li class="breadcrumb-item active">Tambah Data Costumer</li>
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card shadow">
                <div class="card-header bg-transparent border-0 text-dark">
                    <h5 class="mb-0">Formulir Tambah Data Costumer</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('costumers.store') }}" method="POST" role="form" enctype="multipart/form-data">
                        @csrf


                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <div class="form-group mb-3">
                                    <label for="nama">Nama Costumer</label>
                                    <input type="text" class="form-control @error('nama') is-invalid @enderror"
                                        id="nama" placeholder="Nama Costumer" value="{{ old('nama') }}" name="nama">

                                    @error('nama')
                                        <div class="d-block invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="form-group mb-3">
                                    <label for="telp">No Telp Costumer</label>
                                    <input type="text" class="form-control @error('telp') is-invalid @enderror"
                                        id="telp" placeholder="No Telp Costumer" value="{{ old('telp') }}" name="telp">

                                    @error('telp')
                                        <div class="d-block invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <button type="submit" class="btn btn-sm btn-primary">Tambah</button>
                                <a href="{{ route('costumers.index') }}" class="btn btn-sm btn-secondary">Kembali</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
