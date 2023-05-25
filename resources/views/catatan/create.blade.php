@extends('layouts.app')

@section('title', 'Tambah Catatan | PeduliDiri')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h3 class="text-center mt-5">Tambah Akun</h3>
                <div class="card-body">
                    <form method="POST" action="{{ route('catatan.store') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="id_user" class="col-md-4 col-form-label text-md-end">{{ __('ID User') }}</label>

                            <div class="col-md-6">
                                <input id="id_user" type="text" class="form-control @error('id_user') is-invalid @enderror" name="id_user" value="{{ Auth::id() }}" required autocomplete="id_user" autofocus readonly>

                                @error('id_user')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="tanggal" class="col-md-4 col-form-label text-md-end">{{ __('Tanggal') }}</label>

                            <div class="col-md-6">
                                <input id="tanggal" type="date" class="form-control @error('tanggal') is-invalid @enderror" name="tanggal" required autocomplete="tanggal" autofocus>

                                @error('tanggal')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="waktu" class="col-md-4 col-form-label text-md-end">{{ __('Waktu') }}</label>

                            <div class="col-md-6">
                                <input id="waktu" type="time" class="form-control @error('waktu') is-invalid @enderror" name="waktu" required autocomplete="waktu" autofocus>

                                @error('waktu')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="lokasi" class="col-md-4 col-form-label text-md-end">{{ __('Lokasi') }}</label>

                            <div class="col-md-6">
                                <input id="lokasi" type="text" class="form-control @error('lokasi') is-invalid @enderror" name="lokasi" required autocomplete="lokasi" autofocus>

                                @error('lokasi')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="suhu" class="col-md-4 col-form-label text-md-end">{{ __('Suhu') }}</label>

                            <div class="col-md-6">
                                <input id="suhu" type="text" class="form-control @error('suhu') is-invalid @enderror" name="suhu" required autocomplete="suhu" autofocus placeholder="Dalam Celsius">

                                @error('suhu')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection