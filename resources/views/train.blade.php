@extends('layout.base')

@section('content')
    in partenza :
    @foreach ($train as $item)
    <div> {{$item->data_di_partenza}} {{$item->orario_di_partenza}} {{$item->azienda}}
     {{$item->in_orario == 1 ? "in orario" : "in ritardo" }}
    </div>
        
    @endforeach
@endsection