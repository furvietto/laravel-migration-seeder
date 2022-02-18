@extends('layout.base')

@section('content')
    in partenza :
    @foreach ($train as $item)
    <div> {{$item->data_partenza}} {{$item->orario_di_partenza}} {{$item->azienda}}</div>
        
    @endforeach
@endsection