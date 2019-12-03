@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row my-3 justify-content-center">
            <div class="col-md-12">
                <h4><strong><small>Marcomm Events Responsibility</small></strong></h4>
            </div>
        </div>
        <div class="row my-3 justify-content-center">
            <div class="col-md-8">
                @if (session('tambah_acara'))
                    <div class="alert alert-success alert-block">
                        <strong><small>Acara Berhasil Ditambahkan!</small></strong>
                    </div>
                @endif
                <div class="card shadow">
                    <div class="card-header">
                        Upcoming Events
                    </div>
                    <div class="card-body" style="overflow:auto;max-height:400px;">
                        @if ( $acaras->count() < 1)
                            <div class="row justify-content-center align-items-center" style="min-height:150px">
                                <div class="col-md-12 text-center">
                                    <h4>Whoops! There is no upcoming event available</h4>
                                </div>
                            </div>  
                        @else
                            <div class="row">
                                <div class="col-md-12">
                                    <table class="table">
                                        <thead>
                                            <th>Acara</th>
                                            <th>Tanggal</th>
                                            <th>Tempat</th>
                                            <th>Personil</th>
                                        </thead>
                                        <tbody>
                                            @foreach ( $acaras as $acara)
                                                <tr>
                                                    <td>{{ $acara->acara_nama }}</td>
                                                    <td>{{ $acara->tanggal_waktu->format('d M Y') }}</td>
                                                    <td>{{ $acara->tempat_acara }}</td>
                                                    <td>{{ $acara->jumlah_personil }}</td>
                                                    <td></td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="card my-3 shadow">
                    <div class="card-header">
                        Past Events
                    </div>
                    <div class="card-body" style="min-height:250px">
                        Testing
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow position-fixed">
                    <div class="card-header" style="">
                        Create New Event
                    </div>
                    <div class="card-body" style="">
                        <div class="col-md-12">
                            <form action="" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="acara_nama">Nama Acara</label>
                                            <input type="text" name="acara_nama" id="acara_nama" class="form-control @error('acara_nama') is-invalid @enderror" placeholder="Tulis nama acaranya">
                                            @error('acara_nama')
                                                <div class="invalid-feedback">
                                                    <small>Duh, nama Gak boleh kosong</small>
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="waktu">Waktu</label>
                                            <input type="time" name="waktu" id="waktu" value="{{ $defaultTime }}" class="form-control @error('waktu') is-invalid @enderror" value="14:00">
                                            @error('waktu')
                                                <div class="invalid-feedback">
                                                    <small>Waktu harus diisi, kak! :)</small>
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="tanggal">Tanggal</label>
                                            <input type="date" name="tanggal" id="tanggal" value="{{ $defaultDate }}" class="form-control @error('tanggal') is-invalid @enderror">
                                            @error('tanggal')
                                                <div class="invalid-feedback">
                                                    <small>Yuk Diisi Tanggalnya</small>
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="tempat_acara">Tempat</label>
                                            <input type="text" name="tempat_acara" id="tempat_acara" class="form-control @error('tempat_acara') is-invalid @enderror" placeholder="kasih tahu dong dimana">
                                            @error('tempat_acara')
                                                <div class="invalid-feedback">
                                                    <small>Kasih tahu dong, tempatnya</small>
                                                </div>
                                            @enderror
                                        </div>
                                    </div>    
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="prioritas_id">Prioritas</label>
                                            <select name="prioritas_id" id="prioritas_id" class="form-control @error('prioritas_id') is-invalid @enderror">
                                                @foreach ($prioritas as $prior)
                                                    <option value="{{ $prior->prioritas_id }}">{{ $prior->prioritas_nama }}</option>
                                                @endforeach
                                            </select>
                                            @error('prioritas_id')
                                                <div class="invalid-feedback">
                                                    <small>Jangan Dikosongin, Kak!</small>
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="jumlah_personil">Jumlah Petugas</label>
                                            <input type="text" name="jumlah_personil" id="jumlah_personil" class="form-control @error('jumlah_personil') is-invalid @enderror" placeholder="butuh berapa orang?">
                                            @error('jumlah_personil')
                                                <div class="invalid-feedback">
                                                    <small>Wah, butuh berapa orang?</small>
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-success btn-block">Buat Acara!</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection