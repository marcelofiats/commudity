@extends('includes.app')

    @section('contents')
    <div class="card">
        <div class="card-header">
            Lista de Culturas Agrícolas
        </div>
        <div class="card-body">
            @foreach($cultures as $culture) 

                <div class="d-flex flex-column bd-highlight mb-3">
                    <div class="p-2 bd-highlight">
                        <a class="btn btn-default link" href="{{ url('/details') }}/{{ $culture->id }}"> {{ $culture->name }} </a>
                    </div>
                </div>
            @endforeach
             
        </div>
    </div>
    @endsection