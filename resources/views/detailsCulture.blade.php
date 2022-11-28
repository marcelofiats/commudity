@extends('includes.app')

@section('contents')
<div class="card">
    <div class="card-header">
        Detalhes Culturas Agrícolas
        <a class="d-flex justify-content-end" href="{{ url('/') }}">Voltar</a>
    </div>
    <div class="card-body">
        @if(!isset($culture) || empty($culture)) 
            <h4>Sem Atividades dessa Cultura!</h4>
        @else
        @php $culture = $culture[0];
        @endphp
            <div class="row">
                <div class="col-md-12">
                    <p>Cultura: {{ $culture->name }}</p>
                    <p>Tipo Unidade: {{ $culture->unit_type->name }} - {{ $culture->unit_type->sigle }}</p>
                    <br/>
                    @foreach($culture->activities as $activity) 
                        <div>
                            <p>Ano: {{ $activity->year }}</p> 
                            <p>Aréa: {{ number_format($activity->area, 3, ',', '.') }}</p> 
                            <p>Quantidade: {{ number_format($activity->quantity, 3, ',', '.') }} - {{ $culture->unit_type->sigle }}</p> 
                        </div>
                        <hr/>
                    @endforeach
                </div>
            </div>
        @endif
            
    </div>
</div>
@endsection
