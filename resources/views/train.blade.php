@extends('layout.base')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h1>TRENI</h1>
            </div>
            <div class="row">
                @foreach ($train as $item)
                    <div class="col-4">
                        <div class="card mb-3">
                            <div class="card-body">
                                <h5 class="card-title">Azienda: {{ $item->azienda }}</h5>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Data Di partenza: {{$item->data_di_partenza}}</li>
                                    <li class="list-group-item">Data Di arrivo: {{$item->data_di_arrivo}}</li>
                                    <li class="list-group-item">Ora Di partenza: {{$item->orario_di_partenza}}</li>
                                    <li class="list-group-item">Ora Di arrivo: {{$item->orario_di_arrivo}}</li>
                                  </ul>
                                <a href="{{ route('show', $item) }}" class="btn btn-primary">View Train</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row">
                <div class="col">
                    {{$train->links()}}
                </div>
            </div>
        </div>
    </div>
    {{-- in partenza :
    @foreach ($train as $item)
    <div> {{$item->data_di_partenza}} {{$item->orario_di_partenza}} {{$item->azienda}}
     {{$item->in_orario == 1 ? "in orario" : "in ritardo" }}
    </div> --}}
@endsection