@extends('layout.base')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h1>TRENO</h1>
            </div>
            <div class="row">
                    <div class="col-4">
                        <div class="card mb-3">
                            <div class="card-body">
                                <h5 class="card-title">Azienda:{{ $train->azienda }}</h5>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Data Di partenza: {{$train->data_di_partenza}}</li>
                                    <li class="list-group-item">Data Di arrivo: {{$train->data_di_arrivo}}</li>
                                    <li class="list-group-item">Ora Di partenza: {{$train->orario_di_partenza}}</li>
                                    <li class="list-group-item">Ora Di arrivo: {{$train->orario_di_arrivo}}</li>
                                  </ul>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
@endsection