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
                <div class="card shadow">
                    <div class="card-header">
                        Upcoming Events
                    </div>
                    <div class="card-body" style="min-height:250px">
                        Testing
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
                                            <label for="nama_acara">Nama Acara</label>
                                            <input type="text" name="nama_acara" id="nama_acara" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="waktu_acara">Waktu</label>
                                            <input type="time" name="waktu_acara" id="waktu_acara" class="form-control" value="14:00">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="date_acara">Tanggal</label>
                                            <input type="date" name="date_acara" id="date_acara" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="tempat_acara">Tempat</label>
                                            <input type="text" name="tempat_acara" id="tempat_acara" class="form-control">
                                        </div>
                                    </div>    
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="prioritas_acara">Prioritas</label>
                                            <select name="prioritas_acara" id="prioritas_acara" class="form-control">
                                                @foreach ($prioritas as $prior)
                                                    <option value="{{ $prior->priortas_id }}">{{ $prior->prioritas_nama }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="jumlah_kru">Pengurus</label>
                                            <input type="text" name="jumlah_kru" id="jumlah_kru" class="form-control">
                                        </div>
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