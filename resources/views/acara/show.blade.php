@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row my-3 justify-content-center">
            <div class="col-md-12">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h3><strong>{{ $target->acara_nama }}</strong></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection