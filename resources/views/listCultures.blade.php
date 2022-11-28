@extends('includes.app')

    @section('contents')
    <div class="card">
        <div class="card-header">
            Lista de Culturas Agrícolas
        </div>
        <div class="card-body">
            @foreach($cultures as $key=>$culture) 
                <div>
                  <a href="http://" value="{{ $key }}"> {{ $culture }} </a>  
                </div>
            
            @endforeach
             
        </div>
    </div>
    @endsection